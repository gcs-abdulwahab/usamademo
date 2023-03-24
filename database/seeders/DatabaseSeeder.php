<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Department::factory(10)->create();

        // create 10 students for each department
        Department::all()->each(function ($department) {
            $department->students()->saveMany(Student::factory(10)->make());
        });


    }
}
