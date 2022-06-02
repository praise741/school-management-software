<?php

namespace App\Http\Controllers;

use App\Models\result;
use App\Models\student;
use Illuminate\Http\Request;

class teachers extends Controller
{
    public function index()
    {
        $message = session('message');
        $numberofstudents = student::count();
        $results = result::count();
        return view('teacher.index',['numberofstudent' => $numberofstudents,'message'=>$message]);
    }
}
