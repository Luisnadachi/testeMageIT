<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class GithubApiService
{
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.github.com/'
        ]);
    }

    public function getGithubByName(string $name)
    {
        $uri = 'users/' . $name;
        try {
            $response = $this->client->get($uri);
        } catch (GuzzleException $e) {
            return [];
        }

        return json_decode($response->getBody(), true);
    }

    public function getGithubAccounts(int $page = 0)
    {
        $uri = 'users?per_page=100&since=' . (100 * $page);
        try {
            $response = $this->client->get($uri);
        } catch (GuzzleException $e) {
            return [];
        }

        return json_decode($response->getBody(), true);
    }
}
