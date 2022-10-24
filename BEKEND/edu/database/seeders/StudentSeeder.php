<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\database\seeders\DatabaseSeeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\faker\Factory::create();


        DB::table("students")->insert([
            "name"=>"Noel",
            "phone"=>123123123,
            "age"=>40,
            "price"=>12,
            "courseid"=>5
                    ]

        );
    }
}
