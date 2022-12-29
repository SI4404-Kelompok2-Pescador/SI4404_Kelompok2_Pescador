<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Illuminate\Http\UploadedFile;

use Illuminate\Http\Request;
use Validator;

class authController extends Controller
{

    
    public function register(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');

            $response = Http::attach('img', file_get_contents($image), $image->getClientOriginalName())
                ->post(env('API') . '/register', $request->all());
        } else {
            $response = Http::post(env('API') . '/register', $request->all());
        }

        $response = $response->json();

        // store image in local storage
        if ($response['status'] == 'success') {
            $image = Storage::disk('public')->put('img', $response['data']['image']);
        }

        return redirect('/login')->with('success', $response['message']);
    }



    public function login(Request $request)
    {

        $response = Http::post(env('API') . '/login', [
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
