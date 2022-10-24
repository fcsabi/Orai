<?php

use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarController;




// Route::get ("/about",[ServiceController::class,"index"]);
// Route::get ("/about-admin",function(){
// return view("admin.about_admin",["names"=>["Béla","Pista","Kata","Joci"]])
// ;}
// );
// Route::get("/uj-diak",[StudentController::class,"newStudent"]);
Route::get("/uj-auto",[CarController::class,"newCar"]);
Route::post("/submit-Animals",[AnimalsController::class,"newAnimals"]);
Route::post("/submit-Student",[StudentController::class,"newStudent"]);
Route::get("/diak",[StudentController::class,"diak"]);
Route::get("/beszur",[StudentController::class,"insertStudent"]);