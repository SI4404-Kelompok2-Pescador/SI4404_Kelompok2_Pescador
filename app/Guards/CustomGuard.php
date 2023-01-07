<?php

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Http;

class CustomGuard implements Guard
{
    protected $user;

    public function check()
    {
        // Check if the user is already logged in
    }

    public function guest()
    {
        // Check if the user is a guest
    }

    public function user()
    {
        // Get the authenticated user
    }

    public function id()
    {
        // Get the authenticated user's ID
    }

    public function validate(array $credentials = [])
    {
        // Check the credentials against a database or external API
        $email = $credentials['email'];
        $password = $credentials['password'];

        $user = Http::post(env('API') . '/login', [
            'email' => $email,
            'password' => $password,
        ]);

        $user = $user->json();
        
    }

    public function setUser(Authenticatable $user)
    {
        // Set the authenticated user
        $this->user = $user;
    }

    public function hasUser()
    {
        // Check if the user is set
    }
}
