<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restocontroller;

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

/*Route::get('/', function () {
    return view('welcome');
*/
Route::view('/','home');
Route::view('layout','layout');
Route::view('add','add');
Route::view('home','home');
Route::get('list',[restocontroller::class,'list']);   //Get All Data
Route::post('add',[restocontroller::class,'add']);   //Add Restaurant
Route::get('delete/{id}',[restocontroller::class,'delete']);
Route::get('edit/{id}',[restocontroller::class,'edit']);
Route::post('update',[restocontroller::class,'update']);
Route::get('downloadPDF',[restocontroller::class,'downloadPDF']); 
Route::get('expert',[restocontroller::class,'exportIntoExcel']);  
Route::get('exportcsv',[restocontroller::class,'exportIntoCSV']);  