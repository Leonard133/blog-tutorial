<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed',
    	]);

    	$user = User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => request('password')
    	]);

    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

    	return redirect()->home();
    }
}
