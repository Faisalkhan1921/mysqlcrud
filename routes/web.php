<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('crud/operation',[StudentController::class,'index']);
Route::post('student/add',[StudentController::class,'addstudent'])->name('student.add');
Route::get('edit/student/{id}',[StudentController::class,'EditStudent'])->name('student.edit');
Route::post('update/sutdent/{id}',[StudentController::class,'updatestudent'])->name('update.student');
Route::get('student/delete/{id}',[StudentController::class,'deletestudent'])->name('student.delete');
Route::get('/', function () {
    return view('welcome');
});
