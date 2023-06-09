<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StudentController;


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

// Route::get('/students' , [StudentController::class, 'index']);
// Route::post('/students/store' , [StudentController::class, 'store']);
// Route::get('/' , [StudentController::class, 'createToken']);
// Route::get('/students/{id}' , [StudentController::class, 'show']);
// Route::patch('/students/{id}/update' , [StudentController::class, 'update']);
// Route::delete('/students/{id}/delete' , [StudentController::class, 'destroy']);
Route::get('/' , [StudentController::class, 'createToken']);