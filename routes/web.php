<?php

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

Route::get('kuda', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/legality', [App\Http\Controllers\HomeController::class, 'legality'])->name('legality');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminSpace\AdminController::class, 'index'])->name("dashboard");

	Route::prefix('article')->group(function () {
	    Route::get('/list', [App\Http\Controllers\AdminSpace\ArticleController::class, "view_list"])->name("article-list");
	    Route::get('/create', [App\Http\Controllers\AdminSpace\ArticleController::class, "view_create"])->name("create-article");
	    Route::get('/update', [App\Http\Controllers\AdminSpace\ArticleController::class, "view_update"])->name("create-article");

	    Route::post('/delete', [App\Http\Controllers\AdminSpace\ArticleController::class, "post_delete"])->name("delete-article-post");
	    Route::post('/create', [App\Http\Controllers\AdminSpace\ArticleController::class, "post_create"])->name("create-article-post");
	    Route::post('/update', [App\Http\Controllers\AdminSpace\ArticleController::class, "post_update"])->name("update-article-post");
	});

	Route::prefix('license')->group(function () {
	    Route::get('/list', [App\Http\Controllers\AdminSpace\LicenseController::class, "view_list"])->name("license-list");
	    Route::get('/create', [App\Http\Controllers\AdminSpace\LicenseController::class, "view_create"])->name("create-license");
	    Route::get('/update', [App\Http\Controllers\AdminSpace\LicenseController::class, "view_update"])->name("create-license");

	    Route::post('/delete', [App\Http\Controllers\AdminSpace\LicenseController::class, "post_delete"])->name("delete-license-post");
	    Route::post('/create', [App\Http\Controllers\AdminSpace\LicenseController::class, "post_create"])->name("create-license-post");
	    Route::post('/update', [App\Http\Controllers\AdminSpace\LicenseController::class, "post_update"])->name("update-license-post");
	});
});