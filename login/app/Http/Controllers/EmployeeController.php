<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::latest()->paginate(5);
        return view('employee',
        [
            'employees'=>$employees,
        ]
    );
    }

    public function store(EmployeeRequest $request){
        $validated= $request->validated();
        Employee::create($validated);
        return redirect()->route('employees.index')->with('success','employee created successfully');


    }

    public function show(Employee $employee){
        return view('viewemployee',compact('employee'));
    }
}
