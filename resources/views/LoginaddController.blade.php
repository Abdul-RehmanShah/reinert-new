<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index() { 
        return view('login');
    }

    public function loginAction(Request $request) { 
        User::create([
            'name' => 'John Doe',
            'email' => 'jd@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        die;
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) { 
            $request->session()->regenerate();
            return redirect()->route('rental');
        }
  
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        
    }   


     // Logout the authenticated user
     public function logout()
     {
         Auth::logout();
         return redirect('/login');
     }
}
