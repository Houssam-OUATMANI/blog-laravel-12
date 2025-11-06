<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class, 'index'])->name("home");

Route::get("/auth/register", [AuthController::class, "register"])
        ->name("auth.register")
        ->middleware("guest");

Route::post("/auth/register", [AuthController::class, "handleRegister"])
        ->name("auth.handleRegister")
        ->middleware("guest");

Route::get("/auth/login", [AuthController::class, "login"])
        ->name("auth.login")
        ->middleware("guest");
Route::post("/auth/login", [AuthController::class, "handleLogin"])
        ->name("auth.handleLogin")
        ->middleware("guest");

Route::delete("/auth/logout", [AuthController::class, "handleLogout"])
    ->name("auth.handleLogout")
    ->middleware("auth");



Route::get("/posts", [PostController::class, "index"])->name("post.index");
Route::get("/posts/{post}", [PostController::class, "show"])->name("post.show");






