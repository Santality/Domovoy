<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{id}', [PostController::class, 'detailPost']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/catalog', [CatalogController::class, 'catalogList']);

Route::post('/catalog/filter', [CatalogController::class, 'catalogFilter']);

Route::get('/seller/{id}', [UserController::class, 'sellerInfo']);

Route::get('/sitemap', function(){
    return view('sitemap');
});

Route::middleware('checkRole:Пользователь')->group(function (){

    Route::get('/profile', [UserController::class, 'myPosts']);

    Route::get('/post_create', [ApplicationController::class, 'pagePostCreate']);

    Route::get('/post_delete/{id}', [UserController::class, 'deletePost']);

    Route::get('/post_edit/{id}', [UserController::class, 'editPost']);

    Route::post('/post_update', [UserController::class, 'updatePost']);

    Route::get('/post_confirm/{id}', [UserController::class, 'confirmPost']);

    Route::post('/create_post', [ApplicationController::class, 'createPost']);

    Route::post('/profile/update', [UserController::class, 'userUpdate']);

});

Route::middleware('checkRole:Администратор')->group(function (){

    Route::get('/admin', [AdminController::class, 'adminUsers']);

    Route::get('/postList', [AdminController::class, 'adminPosts']);

    Route::get('/postList/delete/{id}', [AdminController::class, 'postDelete']);

});
