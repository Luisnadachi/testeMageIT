<?php

namespace App\Repositories;

use App\Models\Github;
use App\Services\GithubApiService;

class GithubRepository
{
    public function __construct()
    {
        $this->model = new Github();
        $this->service = new GithubApiService();
    }

    public function fetchGithubByName(string $name)
    {
        return $this->service->getGithubByName($name);
    }

    public function fetchGithubAccounts(int $page)
    {
        $page -= 1;
        return $this->service->getGithubAccounts($page);
    }
}
