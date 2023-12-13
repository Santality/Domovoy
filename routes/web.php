<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PostController;
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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/catalog', [CatalogController::class, 'catalogList']);

Route::get('/post_create', [ApplicationController::class, 'pagePostCreate']);

Route::post('/create_post', [ApplicationController::class, 'createPost']);