<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:admin'])->group(function() {
    Route::prefix('admin')->group(function() {
        Route::put('blog/update/{blogID}', 'BlogController@updateBlog')
            ->name('admin.blog.update');
    });
});
