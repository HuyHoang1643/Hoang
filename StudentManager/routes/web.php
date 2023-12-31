<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/dashboard', function () {
    return view('Dashboard.dashboard');
});
Route::resource("teachers",TeacherController::class);
Route::resource("courses",CourseController::class);
Route::resource('/students', StudentController::class);
Route::resource('/departments',DepartmentController::class);
Route::resource('/grades',GradeController::class);
Route::get('/search',[StudentController::class, 'search']);
Route::get('/search',[TeacherController::class, 'search']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
