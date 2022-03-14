<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ProjectDetailController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|edit rossa
*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/blog', [BlogController::class, 'blog'])-> name('blog');

Route::get('/contact', [ContactController::class, 'contact'])-> name('contact');

Route::get('/blog-detail', [BlogDetailController::class, 'blogDetail'])-> name('blog-detail');

Route::get('/project-detail', [ProjectDetailController::class, 'projectDetail'])-> name('project-detail');