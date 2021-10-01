<?php

use App\Http\Controllers\SpecialtyController;
use App\Models\Specialty;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Specialti


Route::get('/specialties',[SpecialtyController::class,'index']);
Route::get('/specialties/create',[SpecialtyController::class,'create']);//formulario
Route::get('/specialties/{specialty}/edit',[SpecialtyController::class,'edit']);
Route::post('specialties',[SpecialtyController::class,'store']);//envio del form 
Route::put('/specialties/{specialty}',[SpecialtyController::class,'update']);
Route::delete('/specialties/{specialty}',[SpecialtyController::class,'destroy']);

//Doctors

Route::resource('doctors',DoctorController::class);


//patients
