<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\database\seeders\StudentSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Student::factory(10)->create();



      $this->call([
        
        StudentSeeder::class,
        courseseeder::class
      ]);
    }
}
