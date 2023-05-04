<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('data',[UserController::class,'list']);
// Route::get('filter',[UserController::class,'index']);
// Route::get('/',function(){

//     return view('filter');
// });
Route::get('filt',[UserController::class,'filt']);
