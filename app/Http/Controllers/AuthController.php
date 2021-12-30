<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validated = $this->validate($request, [
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function postAuthenticate(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|exists:users',
            'password'=>'required'
        ]);

        if(!Auth::attempt($credentials)){
            return back()->withErrors(['wrong-password'=>'Senha errada.']);
        }

        return redirect('/dashboard');
    }

    public function getLogout(){
        Auth::logout();

        return redirect('/');
    }
}
