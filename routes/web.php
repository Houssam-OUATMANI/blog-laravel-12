<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class, 'index'])->name("home");
Route::get("/auth/register", [AuthController::class, "register"])->name("auth.register");
Route::post("/auth/register", [AuthController::class, "handleRegister"])->name("auth.handleRegister");

Route::get("/auth/login", [AuthController::class, "login"])->name("auth.login");
Route::post("/auth/login", [AuthController::class, "handleLogin"])->name("auth.handleLogin");





