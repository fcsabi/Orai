<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
          
    
    public function listStudent(){
        $student=DB::table("student")->select˙(
            "Id","Id as Azonositó"
        )->get ;
    }
}
