<?php

namespace App\Http\Controllers;

use App\Models\student as ModelsStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class student extends Controller
{
  public  $value;

  public function index()
  {



     session(['message' => 'welcome ' . Auth::user()->name]);
     $message = session('message');

      return view('student.index', ['message' => $message]);
  }


  public function update()
  {
      $information = ModelsStudent::exists('link' , Auth::user()->name);
      if ($information == 'true') {
          session(['message'=> 'haa you have updated your record already dumbass']);
      }

       $message = session('message');
       return view('student.update',['message' => $message, 'name' => $information]);
  }




  public function updateme(Request  $request)
 {

    $request->validate([
      'class' => 'required', 'string', 'max:225',
      'dob' => 'required', 'date',
      'parentemail' => 'required', 'email',
]);



    ModelsStudent::create([
        'class' => $request -> class,
        'dob' => $request -> dob,
        'age' => Carbon::parse($request->dob)->diff(Carbon::now())->format('%y'),
        'parentname' => $request -> parentname,
        'parentoccupation' => $request -> parentoccupation,
        'parentemail' => $request -> parentemail,
        'link'  => Auth::user()->name

        ]);


return redirect() -> route('dashboard');
}
}
