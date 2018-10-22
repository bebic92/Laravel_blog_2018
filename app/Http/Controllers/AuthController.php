<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    
    public function __construct(){

    	$this->middleware('guest')->except(['logoutUser']);

    }

	public function showRegisterPage(){

		return view('registration.register');

	}

	public function createUser(){

		$this->validate(request(),[

			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:4|confirmed'
		
		]);


		$user = User::create([

			'name' => request('name'),
			'email' => request('email'),
			'password' => bcrypt(request('password'))

		]);

		Mail::to($user)->send(new Welcome($user));

		Auth::login($user);


		return redirect('/');
	}

	public function logoutUser(){
		

		Auth::logout();
		
		return redirect('/');
	}

	public function showLoginPage(){

		return view('registration.login');

	}

	public function loginUser(){

		if(! Auth::attempt(request(['email', 'password']))){

			return back()->withErrors([

				'message' => 'Email ili lozinka su neispravni ili se ne podudaraju'
			
			]);
		};	

		return redirect('/');

	}

}
