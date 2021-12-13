<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    
    {
        $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        'email' => 'required|email|unique:users',
        'password' =>'required|min:5|max:10'
       ]);
        //encrypt
       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);

       //redirect
       return redirect('/login')->with('status', 'Registration was successful!');


        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => ['required', 'max:255', Password::min(6)->letters()->mixedCase()->numbers()->symbols()->uncompromised()]
        // ]);

        // $validatedData['password'] = Hash::make($validatedData['password']);

        // User::create($validatedData);

        // return redirect('/login')->with('status', 'Registration was successful!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' =>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/mahasiswa');
        }

        return back()->with ('loginError', 'Login Failed!');
    }
        
        
}
