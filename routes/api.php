<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::apiResource('students', App\Http\Controllers\StudentController::class);
Route::apiResource('departments', App\Http\Controllers\DepartmentController::class);

// get those students whose phone number has n digits
Route::get('students/phone/{k}', [App\Http\Controllers\StudentController::class, 'phone']);



