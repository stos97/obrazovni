<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/classroom', [ClassroomController::class, 'getAll']);
Route::post('/classroom', [ClassroomController::class, 'create']);

Route::get('/student/{classroom}', [StudentController::class, 'getAll']);
Route::post('/student', [StudentController::class, 'create']);
