<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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

Route::post('createTask',[TasksController::class,'save']);
Route::get('/',[TasksController::class,'displayTask']);
Route::get('/{editid}',[TasksController::class,'update'])->name('update');
Route::get('/{deleteid}',[TasksController::class,'destroy'])->name('destroy');
