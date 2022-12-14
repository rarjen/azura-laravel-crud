<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::resource("/education", EducationController::class);
Route::resource("/project", ProjectController::class);

// Route::get('/education', function () {
//     return view("education.index");
// });
Route::get('/', function () {
    return view('index');
});
