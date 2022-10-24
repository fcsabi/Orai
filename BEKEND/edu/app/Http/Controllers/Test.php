<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Test extends Controller
{
    public function index($id=null ,$name =""){
        echo "<h3>Id:</h3>".$id."," .$name;
    }
    
}
