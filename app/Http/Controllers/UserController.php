<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed', 
        ]);

        $user = Test::create($data);

        if($user){
            return redirect()->route('logins');
        }
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required', 
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('welcome');
        }
        else{
            return redirect()->route('logins');
        }
    }

    public function welcome(){
        if(Auth::check()){
            return view('welcome');
        }
        else{
            return redirect()->route('logins');
        }
    }

    
}
