<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangelogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Admin\ReleaseController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\DashboardController;

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

Route::feeds();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/features/dashboard', function () {
    return view('features.dashboard');
});

Route::get('/features/reminders', function () {
    return view('features.reminders');
});

Route::get('/features/journal', function () {
    return view('features.journal');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/refund', function () {
    return view('refund');
});

Route::get('/changelog', [ChangelogController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'post'])->name('blog.show');
Route::get('/blog/category/{slug}', [BlogController::class, 'category']);

Route::get('/api', [ApiController::class, 'index']);
Route::get('/api/{category}', [ApiController::class, 'category']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('releases', ReleaseController::class);
    Route::resource('posts', PostController::class);
});
