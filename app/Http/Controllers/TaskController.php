<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    public function Resistration(){
        return view('resistration');
    }
}
