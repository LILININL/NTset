<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = new Department();
        $data['departments'] = $departments->getAllDepartments();
        return view('departments.index', $data);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $department = new Department();
        $department->createDepartment($request->all());
        return redirect()->route('departments.index');
    }

    public function edit($id)
    {
        $department = new Department();
        $data['department'] = $department->find($id);
        return view('departments.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $department = new Department();
        $department->updateDepartment($id, $request->all());
        return redirect()->route('departments.index');
    }

    public function destroy($id)
    {
        $department = new Department();
        $department->deleteDepartment($id);
        return redirect()->route('departments.index');
    }
}
