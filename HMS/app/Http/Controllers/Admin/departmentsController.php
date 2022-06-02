<?php

namespace App\Http\Controllers\admin;

use App\Models\departments;
use App\Http\Controllers\Controller;
use App\Http\Requests\departmentsRequest;

class departmentsController extends Controller
{
    public function index()
    {
        return view('admin.departments.index', [
            'departments' => departments::latest()->get()
        ]);
    }

    public function create()
    {
        session(['message' => 'Add departments here']);
        $message = session('message');
        return view('admin.departments.create',['message' => $message]);
    }

    public function store(departmentsRequest $request)
    {

        $message = session('message');
        if (departments::where('name', $request->name)->count()>0) {
            return redirect('admin/departments/add');
        }
        else{
departments::create($request->validated());

        return redirect('admin/departments/add')->with('message', 'departments Created Successfully!');
        }

    }

    public function show(departments $departments)
    {
        return view('admin.departments.show', compact('departments'));
    }

    public function edit(departments $departments)
    {
        return view('admin.departments.edit', compact('departments'));
    }

    public function update(departmentsRequest $request, departments $departments)
    {
        $departments->update($request->validated());

        return redirect()->route('departments.index')->with('message', 'departments Created Successfully!');
    }

    public function destroy(departments $departments)
    {
        $departments->delete();

        return redirect()->route('departments.index')->with('message', 'departments Deleted Successfully!');
    }
}
