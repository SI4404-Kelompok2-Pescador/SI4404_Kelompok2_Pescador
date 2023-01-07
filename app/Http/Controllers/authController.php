<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Validator;

class authController extends Controller
{
    public function register(Request $request)
    {
        $response = Http::post(env('API') . '/register', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
        ]);
        $response = $response->json();

        return redirect('/login')->with('success', $response['message']);
    }



    public function login(Request $request)
    {
        // Make request to external API
        $response = Http::post(env('API') . '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();

        if ($response['status'] == 'success') {
            // Get user credentials from API response
            $credentials = [
                'email' => $response['user']['email'],
                'password' => $response['user']['password']
            ];

            if (!auth()->attempt($credentials))
            return redirect('/login')->with('error', 'Login Failed');
        }

        return redirect('/')->with('success', $response['message']);
    }
}
