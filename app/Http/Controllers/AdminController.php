<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth:admin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.home');
    }

    public function createAdmin() {
        Admin::create([
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin1234')
        ]);

        return 'ADMIN CREATED';
    }
}