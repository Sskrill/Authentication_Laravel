<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $employees= Employee::paginate(10);
        return view('employee.index',compact('employees'));
    }
    public function create(){
       return view('employee.create');
    }
    public function show($id){
        $employee=Employee::findOrFail($id);
        return view('employee.show',compact('employee'));
    }
    public function edit($id){
        $employee=Employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
    }
    public function store(){
        $data=request()->validate([
            'name'=>'required|string',
            'job'=>'string',
            'age'=>'required|integer',
        ]);


        Employee::create($data);
        return redirect()->route('employee.index');
    }
    public function update($id){
        $employee=Employee::findOrFail($id);
        $data=request()->validate([
            'job'=>'string',
            'age'=>'required|integer',
        ]);
        $employee->update($data);
        return redirect()->route('employee.show',$employee->id);
    }
}
