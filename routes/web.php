<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainorController;
use App\Http\Controllers\UserController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class,'create']);
Route::post('/users/create',[UserController::class,'store']);
Route::get('/users/{user}', [UserController::class, 'edit']);
Route::post('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);


Route::get('/trainors', [TrainorController::class, 'index'])->name('trainors');
Route::get('/trainors/create', [TrainorController::class, 'create'])->name('trainors');
Route::post('/trainors/create', [TrainorController::class, 'store'])->name('trainors');;

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/trainees', [TraineeController::class, 'index'])->name('trainees');

