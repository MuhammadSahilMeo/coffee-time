<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::post('/create-employee', [EmployeeController::class, 'store']);
Route::get('/all-employee', [EmployeeController::class, 'index']);
Route::get('/single-employee/{id}', [EmployeeController::class, 'show']);