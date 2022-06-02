<?php

namespace App\Http\Controllers\admin;

use App\Models\doctors;
use App\Http\Controllers\Controller;
use App\Http\Requests\doctorsRequest;
use App\Models\departments;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class doctorsController extends Controller
{
    public function index()
    {
        session(['message' => 'List of Doctors']);
        $message = session('message');
     $doctors = User::where('role','doctor')->get();



        return view('admin.doctors.index', [
            'doctors' => $doctors,'message'=> $message
        ]);
    }

    public function create()
    {
        $departments = departments::all();
        session(['message' => 'Add doctors here']);
        $message = session('message');
        return view('admin.doctors.create',['message' => $message,'departments' => $departments]);
    }

    public function store(doctorsRequest $request)
    {




        $name = $request->file('profile')->getClientOriginalName();

        $request->profile->storeAs('images',$name,'public');


        if(User::where('email', $request->email)->count() > 0){

            return redirect('admin/doctor/add')->with('message', 'doctors exist already');

         }
        else   {
               $drex = 'doctor';
        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'profile' => $name,
        'department' => $request -> department,
        'link' => $request -> name,
        'role' => $drex
        ]);


        event(new Registered ($user));



        return redirect('admin/doctor/add')->with('message', 'doctors Created Successfully!');
    }



    }

    public function show(doctors $doctors)
    {
        return view('admin.doctors.show', compact('doctors'));
    }

    public function edit(doctors $doctors)
    {
        return view('admin.doctors.edit', compact('doctors'));
    }

    public function update(doctorsRequest $request, doctors $doctors)
    {
        $doctors->update($request->validated());

        return redirect()->route('doctors.index')->with('message', 'doctors Created Successfully!');
    }

    public function destroy(doctors $doctors)
    {
        $doctors->delete();

        return redirect()->route('doctors.index')->with('message', 'doctors Deleted Successfully!');
    }
}
