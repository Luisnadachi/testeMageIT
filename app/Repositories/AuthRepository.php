<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{

    public function register(array $validated)
    {
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
    }

    public function authenticate(array $credentials)
    {
        if (!Auth::attempt($credentials)) {
            throw new \Exception('Senha incorreta.');
        }
    }


}
