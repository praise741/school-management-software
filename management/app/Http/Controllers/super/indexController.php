<?php

namespace App\Http\Controllers\super;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{

    function index(){

        $message = session('message');
        return view('admin.index',["message" => $message]);

    }






}
