<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
Route::get("/" ,[WebController::class,"index"])->name("home");
Route::get("/services" ,[WebController::class,"serviceShow"])->name("services");
Route::get("/contact", [WebController::class,"contactShow"])->name("contact");