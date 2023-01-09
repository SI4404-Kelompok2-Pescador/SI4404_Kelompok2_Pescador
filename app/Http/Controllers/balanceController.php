<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class balanceController extends Controller
{
    //

    public function topup(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => $request->cookie('token'),
        ])->post(env('API') . '/user/balance', [
            'balance' => floatval($request->input('balance')),
        ]);
        $response = $response->json();
        // dd($response);
        return redirect('/historytr')->with('success', $response['message']);
    }

    public function getbalance(Request $request)
    {
        // Get User Balance
        $response = Http::withHeaders([
            'Authorization' => $request->cookie('token'),
        ])->get(env('API') . '/user/balance');
        $response = $response->object();
        $balance = $response->data;
        return view('/historytr', compact('balance'));
    }
}
