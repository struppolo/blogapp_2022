<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\ApiPostController;
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

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken('my-token');

    return ['token' => $token->plainTextToken];
})->middleware('auth.basic');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('posts',ApiPostController::class)->middleware('auth:sanctum');
