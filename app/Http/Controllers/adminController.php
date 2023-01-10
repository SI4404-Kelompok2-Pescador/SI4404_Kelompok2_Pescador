<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class adminController extends Controller
{
    //

    public function dashboard(Request $request)
    {

        return view('/admindash');
    }

    public function createCategory(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => $request->cookie('token')
        ])->post(env('API') . '/admin/category/create', [
            'name' => $request->input('name'),
        ]);

        $response = $response->json();
        dd($response);

        return redirect('/category')->with('success', $response['message']);
    }
}
