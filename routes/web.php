<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\ContactForm;
use App\Http\Livewire\Page;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    $posts = $user->posts();
    return view('dashboard', compact('posts'));
})->name('dashboard');

Route::get('post', Posts::class)->name('post');
Route::get('/posts/',[\App\Http\Controllers\PostsController::class, 'index'])->name('public_posts_index');
Route::get('/posts/{id}',[\App\Http\Controllers\PostsController::class, 'show'])->name('public_posts_show'); //new added

Route::get('contact', ContactForm::class)->name('contact');

Route::get('page', Page::class)->name('page');
Route::get('/ages/',[\App\Http\Controllers\PagesController::class, 'index'])->name('public_pages_index');
Route::get('/pages/{id}',[\App\Http\Controllers\PagesController::class, 'show'])->name('public_pages_show'); //new added

