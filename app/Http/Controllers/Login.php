<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Login extends Controller
{
    // Halaman Login
    public function login(){
    	return view ('login');
    }
    // Halaman Register
    public function register(){
    	return view('register');
    }
    // Halaman Input Register
    public function store(Request $request)
    {
    	// 1.Validasi Input Register
    	$validasi = $request->validate([
    		'nama' => 'required|max:100',
    		'email' => 'required|email|max:150',
    		'password' => 'required|min:8',
    		'confirm_password' => 'same:password'
    	]);
    	
    	// 2.Jika validasi maka masukan ke database
    	if ($validasi){		 
    		User::create([
    			'name' => $request->nama,
    			'level' => "siswa",
    			'email' => $request->email,
    			'password' => bcrypt($request->password)
    		]);

        	return redirect('/users');
    	}
    	// 3.Jika tidak, maka akan pindah ke halaman register
    	else {
    		return Redirect::to('/register')
            ->withErrors($validasi)
            ->withInput();
    	}

    }
}
