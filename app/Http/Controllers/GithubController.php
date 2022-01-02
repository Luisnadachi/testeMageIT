<?php

namespace App\Http\Controllers;

use App\Repositories\GithubRepository;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function __construct(GithubRepository $repository)
    {
        $this->repository = $repository;
    }

    public function viewGithubSeach(Request $request)
    {
        $github = [];
        if ($request->has('name')) {
            $github = $this->repository->fetchGithubByName($request->get('name'));
        }
        return view('github.accounts', compact('github'));
    }

    public function viewGithubAccounts(Request $request)
    {
        $page = $request->get('page');
        $github = $this->repository->fetchGithubAccounts($page);

        return view('github.dashboard', compact('github'));
    }
}
