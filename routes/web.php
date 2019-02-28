<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('site_home');
})->name('home');

Route::get('/about-me', function () {
    return view('about-me');
})->name('about-me');

Route::get('/album', 'AlbumController@render')->name('album');
Route::get('/blog', 'BlogController@blog')->name('blog');

Route::get('/admin/login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
Route::post('/admin/login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');

Route::middleware(['auth:admin'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('blog', 'BlogController@blogEditor')->name('admin.blog');
        Route::post('blog', 'BlogController@createBlog')->name('admin.blog.post');
        Route::get('blog/delete/{blogID}', 'BlogController@deleteBlog')->name('admin.blog.delete');
        Route::post('blog/upload-blogs', 'BlogController@uploadBlogs')->name('admin.blog.upload');
    });
});

Route::get('/create-admin', 'AdminController@createAdmin');