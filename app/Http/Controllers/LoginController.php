<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
       
        return view('login');
    }

    public function loginAction(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
       // dd('Authenticated!');

        // No need for a separate session variable; Auth::check() can be used
        return redirect()->route('rental');
    }

    return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
}

public function logout()
{
    dd('Before logout');  // Debugging line

    Auth::logout();

    dd('After logout');  // Debugging line

    // No need to manually remove the session variable; Laravel handles it
    return redirect('/login');
}


}
