<?php

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

Route::get('/catalog', [CatalogController::class, 'catalogList']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/post_create', [ApplicationController::class, 'pagePostCreate']);

Route::post('/create_post', [ApplicationController::class, 'createPost']);

Route::get('/profile', function () {
    return view('profile');
});

Route::post('/profile/update', [UserController::class, 'userUpdate']);




Route::middleware('checkRole:Пользователь')->group(function (){

});

Route::middleware('checkRole:Администратор')->group(function (){

});
