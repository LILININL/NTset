<?php

 namespace App\Http\Controllers;

 use App\Models\Employee;
 use Illuminate\Http\Request;
 
 class EmployeeController extends Controller
 {
     public function index()
     {
         $employees = new Employee();
         $data['employees'] = $employees->getAllEmployees();
         return view('employees.index', $data);
     }
 
     public function create()
     {
         return view('employees.create');
     }
 
     public function store(Request $request)
     {
         $employee = new Employee();
         $employee->createEmployee($request->all());
         return redirect()->route('employees.index');
     }
 
     public function edit($id)
     {
         $employee = new Employee();
         $data['employee'] = $employee->find($id);
         return view('employees.edit', $data);
     }
 
     public function update(Request $request, $id)
     {
         $employee = new Employee();
         $employee->updateEmployee($id, $request->all());
         return redirect()->route('employees.index');
     }
 
     public function destroy($id)
     {
         $employee = new Employee();
         $employee->deleteEmployee($id);
         return redirect()->route('employees.index');
     }
 }
 