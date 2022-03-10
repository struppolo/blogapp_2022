<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts = Post::orderBy('created_at')->paginate(3);
    return view('index', ['posts' => $posts]);
})->name('index');


Route::get('/results', function (Request $request) {

    $posts = Post::where('titolo', 'like', '%' . $request->input('cerca') . '%')
        ->orWhere('descrizione', 'like', '%' . $request->input('cerca') . '%')
        ->paginate(10);
    return view('results', ['posts' => $posts], compact('request'));
})->name('results');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
