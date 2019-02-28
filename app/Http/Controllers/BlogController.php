<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Utils\Paginator;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller {
    private $paginator;

    public function __construct() {
        $this->paginator = new Paginator([
            'model' => Blog::class,
            'limit' => 5
        ]);
    }

    public function blogEditor(Request $req) {
        $paginatedReq = $this->paginator->paginateRequest($req);
        $paginatedReq['pagination']['path'] = route('admin.blog');

        return $this->render('blog-editor', $paginatedReq);
    }

    public function blog(Request $req) {
        $paginatedReq = $this->paginator->paginateRequest($req);
        $paginatedReq['pagination']['path'] = route('admin.blog');

        return $this->render('blog', $paginatedReq);
    }

    public function createBlog(Request $req) {
        $req->validate([
            'text' => 'required|string',
            'subject' => 'required|string'
        ]);
        
        $newPost = [
            'text' => $req->text,
            'subject' => $req->subject
        ];
        $pathToImage = $this->getPathToPostImage($req);
        print_r($pathToImage);
        if ($pathToImage) {
            $newPost['path_to_image'] = $pathToImage;
        }

        Blog::create($newPost);
        return redirect()->intended(route('admin.blog'));
    }

    public function updateBlog(Request $req, $blogID) {
        $validatedData = Validator::make(
            [
                'text' => $req->text,
                'subject' => $req->subject
            ],
            [
                'text' => 'required|string',
                'subject' => 'required|string'
            ]
        );

        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->errors()]);
        }

        $blog = Blog::find($blogID);

        if (!$blog) {
            return response()->json(['errors' => ['404' => 'item not found']]);
        }

        $blog->text = $req->text;
        $blog->subject = $req->subject;
        $blog->save();

        return response()->json($blog);
    }

    public function deleteBlog(Request $req, $blogID) {
        Blog::destroy($blogID);
        return redirect()->intended(route('admin.blog'));
    }

    public function uploadBlogs(Request $req) {
        $blogs = $this->getBlogsFileContent($req);
        Blog::insert($blogs);
        return redirect()->intended(route('admin.blog'));
    }

    private function getBlogsFileContent(Request $req) {
        $file = $this->getRequestFile($req, 'blogs-file');
        if ($file) {
            $data = array_map('str_getcsv', file($file->getRealPath()));
            $actualData = array_slice($data, 1);
            return array_map(function($row) {
                $blog = [
                    'subject' => $row[0],
                    'text' => $row[1]
                ];
                if (isset($row[2]) && strlen($row[2]) > 0) {
                    $blog['path_to_image'] = $row[2];
                } else {
                    $blog['path_to_image'] = NULL;
                }
                return $blog;
            }, $actualData);
        }
        return [];
    }

    private function getPathToPostImage(Request $req) {
        $image = $this->getRequestFile($req, 'blog-image');
        if ($image) {
            $stored = $image->store('public/blog');
            $pathToImage = asset('storage/' . $stored);
            return str_replace('public/', '', $pathToImage);
        }

        return false;
    }

    private function getRequestFile(Request $req, $fileName) {
        if ($req->hasFile($fileName) && $req->file($fileName)->isValid()) {
            return $req->file($fileName);
        }
        return false;
    }
}
