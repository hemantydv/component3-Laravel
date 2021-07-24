<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//GET
Route::get('/', [ProductController::class,'index']);


Route::get('/Addform',function(){
    return view('Addform');
});

Route::get('/login',function(){
    return view('newLogin');
});

Route::get('/register',function(){
    return view('newRegister');
});

Route::post('registeruser/',[ProductController::class,'register']);
Route::post('afterlogin/',[ProductController::class,'afterlogin']);
Route::get('/UpdateForm/{id}',[ProductController::class, 'getproduct']);
Route::get('/Cdform/{id}',[ProductController::class, 'getproduct']);
Route::get('/Deleteform/{id}',[ProductController::class, 'delete']);
Route::get('logout/',[ProductController::class,'logout']);

//POST
Route::post('/Bookform/{id}',[ProductController::class, 'updateproduct']);

Route::post('Addform/', [ProductController::class, 'save']);

//login

