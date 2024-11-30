<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     
    public function run(): void
    {


        for ($i=0; $i < 10 ; $i++) { 
            student::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'city'=> fake()->city(),
                'percentage' => 89,
            ]);    
        }

        
        

        // $json = File::get('database/json/student.json');

        // $students = collect(json_decode($json));


        //     $students->each(function($student){
        //         student::create([
        //             'name' => $student->name,
        //             'email' => $student->email,
        //             'city'=> $student->city,
        //             'percentage' => $student->percentage,
        //         ]);        
        //     });
        

        
    }
}
