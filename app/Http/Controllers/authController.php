<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Validator;

class authController extends Controller
{
    //

    public function login(Request $request)
    {

        $response = Http::post('http://127.0.0.1:3030/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();
        if ($response['status'] == 200) {
            $request->session()->put('token', $response['token']);
        }

        return redirect('/')->with('success', $response['message']);
    }
}
