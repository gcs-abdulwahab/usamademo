<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // return all Students
        return Student::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
         // store a new Student
        $student = Student::create($request->all());
        return response()->json($student, 201);

    }

    // get those students whose phone number has n digits
    public function phone($k)
    {
        // return all Students whose phone length is $k
        return Student::where('phone', 'like',  str_repeat('_', $k) )->get();

    }


    public function show(Student $student)
    {
        // return a single Student  along with Department
        return $student->load('department');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // update a single Student
        $student->update($request->all());
        return response()->json($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // delete a single Student
        $student->delete();
        return response()->json(null, 204);
    }
}
