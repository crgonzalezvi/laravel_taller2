<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('authors',[AuthorApiController::class, 'index']);
Route::get('authors/{id}',[AuthorApiController::class, 'show']);
Route::post('authors',[AuthorApiController::class, 'store']);
Route::put('authors/{id}',[AuthorApiController::class, 'update']);
Route::delete('authors/{id}',[AuthorApiController::class, 'destroy']);
Route::post('authors_nationality',[AuthorApiController::class, 'colomb']);

