<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/student', [StudentController::class, 'list_student']);
Route::get('/update-student/{id}', [StudentController::class, 'update_student']);
Route::get('/delete-student/{id}', [StudentController::class, 'delete_student']);
Route::get('/add', [StudentController::class, 'add_student']);
Route::post('/add/treatment', [StudentController::class, 'add_student_treatment']);
Route::post('/update/treatment', [StudentController::class, 'update_student_treatment']);

