<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            'email'=>'required|unique:users',
            'password'=>'required|confirmed'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/');
    }

    public function viewLogin()
    {

    }

    public function postAuthenticate()
    {

    }
}
