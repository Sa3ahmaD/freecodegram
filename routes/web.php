<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile/{user:username}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user:username}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user:username}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/p/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/p', [PostsController::class, 'store'])->name('posts.store');
Route::get('/p/{post}', [PostsController::class, 'show'])->name('posts.show');


Route::post('follow/{user}', [FollowsController::class, 'store']);

require __DIR__.'/auth.php';
