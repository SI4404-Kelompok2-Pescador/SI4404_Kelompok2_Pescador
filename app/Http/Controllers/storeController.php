<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class storeController extends Controller
{
    //

    public function registerStore(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');

            $response = Http::attach('img', file_get_contents($image), $image->getClientOriginalName())
                ->withHeaders([
                    'Authorization' => $request->cookie('token'),
                ])
                ->post(env('API') . '/store/create', [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'image' => $request->file('image')->store('public/images'),
                    'password' => $request->input('password'),
                ]);
        } else {
            $response = Http::withHeaders([
                'Authorization' => $request->cookie('token'),
            ])->post(env('API') . '/store', $request->all());
        }

        $response = $response->json();

        return redirect('/login')->with('success', $response['message']);
    }

    public function loginStore(Request $request)
    {
        $response = Http::post(env('API') . '/login-store', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();

        return redirect('/addtoko')->with('error', 'Invalid credentials');
    }
}
