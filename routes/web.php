<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentCntroller;

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

Route::get('/students',[StudentCntroller::class,'getStudents']);
Route::get('/add-student', function () {
    return view('add-student');
});

// Route::get('/students', function () {
//     return view('students');
// });
