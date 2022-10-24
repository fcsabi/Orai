<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB ;

use Illuminate\Http\Request;
use app\Http\Requests\StudentData;
;


class StudentController extends Controller
{
    public function  newStudent(){
        return view("new_student");
    }

    public function submitStudent(StudentData $request){
        $request->validate([
            "name"=>"required|min:4|max:20",
            "email"=>"required",
            "phone"=>"required|digits_beetwen:9,11"

        
        ],[
            "name.required"=>"Név kitöltése kitöltése",
            "email.required"=>"email töltése kötelező",
            "phone.required"=>"Telefon kitöltése kötelező"
        ]
    
    
    
    
    
    
    );
    //     print_r($request->all());
    // }
    // public function listStudent(){
    //     $student=DB::table("student")->select˙(
    //         "Id","Id as Azonositó"
    //     )->get ;
    // }



    print_r($request->all());
}
// public function listStudent(){
//     $student=DB::table("student")->select˙(
//         "nam","email as levél"
//     )->find(5) ;
//     echo "<pre>";
//     printf($student);
// }
// public function listStudent(){
//     $student=DB::table("student")->where˙(
//         "email","like","%gmail.com"
//     )->get ;

// public function listStudent(){
//         $student=DB::table("student")->wherebeetween˙(
//             "Id","name"
//         )->get ;
//     }

// public  function diak()
// {
//     $students=DB::table("studens")->join("courses","students.id","s","courses.studets");
// }

// public function insertStudent()
// {
//     $lastid=DB::table("students")->insert([
//         "name"=>"Pityu",
//         "phone"=>"02346456464",
//         "age"=>43
//     ]);
//     echo "beszurás megtörtént".$lastid;
// }

public function insertStudent(){
    DB::table("stundens")->insert(
        ["name"=>"Laci","phone"=>"06201021323","age"=>32],
        ["name"=>"Edit","phone"=>"0654376234","age"=>342],
        ["name"=>"Éva","phone"=>"0667635445","age"=>50],
    );

}
public function updateStudent(){

    DB::table("studens")->where("id", 3)->update([
        "name"=>"Pali"
    ]);
}
public function upIn(){
    DB::table("studens")->updateOrInsert([
        "name"=>"Béla",
        "phone"=>"06302074967",
        "age"=>99
    ]);
}


}
