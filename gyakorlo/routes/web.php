<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/gyakorlo/{name1}/{name2}",function($name1,$name2){
    echo "<h3>Id:</h3>".$name1;
    echo "<h3>Id:</h3>".$name2;
    })->where(["name2"=>"[a-zA-Z]+"]);
