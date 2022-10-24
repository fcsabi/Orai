<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function  newCar(){
        return view("new_Car");
    }

    public function submitcar(Request $request){
        print_r($request->all());
    }
}
