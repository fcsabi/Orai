<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    // public function listStudent(){
    //     $students=Student::with("course")->get(); 
    //     // foreach($students as $student){
    //     //     echo "<pre>";
    //     //     print_r($student->name."  ");
    //     //     print_r($student->course->course);

    //         return view ("list_student",{
    //             "students"=>$students
    //         });
    // }
        public function listStudent(){
            $students= Course::find(3)->student;

                    return view ("list_student",[
                    "students"=>$students
                ]);
        }


}
