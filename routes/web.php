<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

Route::get("/contact", function () {
    return view("contact");
})->name("contact");





// routes/web.php
use App\Http\Controllers\EmployeeController;

Route::post('/create-employee', [EmployeeController::class, 'store']);