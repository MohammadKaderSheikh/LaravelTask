<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resistration;
class LoginController extends Controller
{
    public function LoginFrom(){
       
      return view('login');

    }
    public function Login(Request $request){
       

      $user = $request->only('email','password');

      if(Auth::attempt($user)){
        if(Auth::user()->email == 'email'){
          return redirect('/task');
        }
      }else{
          return redirect('/');
      }
           

    }



}
