<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\departments;
use App\Models\doctors;
use App\Models\patient;
use App\Models\User;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function index(){
        session(['message' => 'Welcome to dotmart codes']);
       $message =  session('message');
       $patients = patient::count();
       $doctors = User::where('role','doctor')->count();
       $department = departments::count();

        return view('admin.index',['message' => $message,'patients' => $patients,'doctors'=>$doctors,'departments'=> $department]);
    }
    public function adddoctor(){
        session(['message' => 'Add docotrs here']);
        $message = session('message');
        return view('admin.adddoctor',['message' => $message]);
    }
    public function adddepartments(){
        session(['message' => 'Add docotrs here']);
        $message = session('message');
        return view('admin.adddepartment');

    }

}
