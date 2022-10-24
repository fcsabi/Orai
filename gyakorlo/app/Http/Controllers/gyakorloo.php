<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gyakorloo extends Controller
{
    public function index($name1 ,$name2){
        echo "<h3>Név:</h3>".$name1."," .$name2;
    }
}
