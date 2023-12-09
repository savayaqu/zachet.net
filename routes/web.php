<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/roles', [RoleController::class, 'index']);

Route::match(['get','post'],'/categories/new', [CategoryController::class, 'new']);
Route::match(['get','post'],'/products/new', [ProductController::class, 'new']);
Route::match(['get','post'],'/users/new', [UserController::class, 'new']);
Route::match(['get','post'],'/roles/new', [RoleController::class, 'new']);

Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/roles/{id}', [RoleController::class, 'show']);

Route::match(['get','post'],'/categories/{id}/update', [CategoryController::class, 'update']);
Route::match(['get','post'],'/products/{id}/update', [ProductController::class, 'update']);
Route::match(['get','post'],'/users/{id}/update', [UserController::class, 'update']);
Route::match(['get','post'],'/roles/{id}/update', [RoleController::class, 'update']);

Route::get('/categories/{id}/delete', [CategoryController::class, 'delete']);
Route::get('/products/{id}/delete', [ProductController::class, 'delete']);
Route::get('/users/{id}/delete', [UserController::class, 'delete']);
Route::get('/roles/{id}/delete', [RoleController::class, 'delete']);


