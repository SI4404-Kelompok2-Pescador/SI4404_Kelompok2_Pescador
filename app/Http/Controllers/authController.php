<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Validator;

class authController extends Controller
{
    public function register(Request $request)
    {
        $response = Http::post(env('API'). '/register', [
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

        $response = Http::post(env('API'). '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();
        if ($response['status'] == 'success') {
            $request->session()->put('token', $response['token']);
        }

        return redirect('/')->with('success', $response['message']);
    }
}
