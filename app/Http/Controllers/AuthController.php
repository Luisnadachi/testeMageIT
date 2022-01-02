<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * @var AuthRepository
     */
    private $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;

    }

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $validated = $request->validated();
        $this->repository->register($validated);

        return redirect('/');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function postAuthenticate(LoginRequest $request)
    {
        $credentials = $request->validated();
        try {
            $this->repository->authenticate($credentials);
            return redirect('/dashboard?page=1');
        } catch (\Exception $e) {
            return back()->withErrors(['wrong_password' => $e->getMessage()]);
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}
