<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // check if request is coming from api or web
        if (request()->wantsJson()) {
            // return all Departments
            return Department::all();
        } else {
            // return all Departments
            return view('departments.index', ['departments' => Department::all()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentRequest $request)
    {
        // store a new Department
        $department = Department::create($request->all());
        return response()->json($department, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        // return a single Department
        return $department;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        // update a single Department
        $department->update($request->all());
        return response()->json($department, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        // delete a single Department
        $department->delete();
        return response()->json(null, 204);
    }
}
