<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//public routes
Route::get('me', [AuthController::class, 'me']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Route::resource('books', BookController::class)->except(
//    ['create','edit']
//);
//Route::delete('books/{id}', [BookController::class, 'destroy']);
//Route::resource('author', AuthorController::class)->except(
//    ['create','edit']
//);    
//Route::get('/author', [AuthorController::class, 'index']);
//Route::get('/author/{id}', [AuthorController::class, 'show']);
//Route::post('/author', [AuthorController::class, 'store']);
//Route::put('/author/{id}', [AuthorController::class, 'update']);
//Route::delete('/author/{id}', [AuthorController::class]);

// Route::resource('author', AuthorController::class)->except(
    // ['create', 'edit']
// );
// Route::get('author', [AuthorController::class, 'index']);
// Route::get('author/{id}', [AuthorController::class, 'show']);//detail
// Route::post('author', [AuthorController::class, 'store']);
// Route::put('author/{id}', [AuthorController::class, 'update']);
// Route::delete('/author/{id}', [AuthorController::class, 'destroy']);


//protected routes
Route::middleware('auth:sanctum')->group(function (){
    Route::resource('books', BookController::class)->except(
        ['create', 'edit', 'index', 'show']
    );
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('authors', AuthorController::class)->except(
    ['create', 'edit', 'index', 'show']
    );
});