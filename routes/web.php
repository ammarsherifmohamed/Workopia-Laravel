<?php

// use App\Http\Controllers\HelloControler;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
// use Laravel\Mcp\Request;
use Illuminate\Http\Request;


Route::get('/', [HomeController::class, "index"]);
Route::get("/jobs", [JobController::class, "index"]);
Route::get("/jobs/create", [JobController::class, "create"]);
Route::post("/jobs/create" , [JobController::class,"store"]);

// Route::resource("jobs" , JobController::class);