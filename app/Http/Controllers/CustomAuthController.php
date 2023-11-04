<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Auth;
class CustomAuthController extends Controller
{
    public function login() {
      if(!auth()->check()){
       	return view("auth.login");
       }else{
       	return redirect('dashboard');
       }
    	
    }

    public function register() {
       if(!auth()->check()){
    	    return view("auth.register");
    	}else{
         	return redirect('dashboard');
       }
    }

    public function registerUser(Request $request) {

    	$request->validate([
           'name' => 'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:5|max:12'
    	]);
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$res = $user->save();
    	if($res){
            return back()->with('success','you have registered successfuly');
    	}else{
            return back()->with('fail','Something Wrong');
    	}
    }

     public function loginUser(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:5|max:12',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('dashboard');
    } else {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return back()->with('fail', 'Incorrect password. Please try again.');
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
}

    public function dashboard() {
        if(!auth()->check()){
    	    return view("auth.login");
    	}else{
         	return view('dashboard');
       }
    	

    }
     public function logout() {
       Auth::logout();
       return redirect('login');
    }
}
