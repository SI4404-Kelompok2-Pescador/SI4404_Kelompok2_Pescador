<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function showAllCategories(Request $request)
    {
        $response = Http::get(env('API') . '/categories');
        $response = $response->object();

        $category = $response->data;

        return view('/category', compact('category'));
    }

    public function showAllStores(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => $request->cookie('token')
        ])->get(env('API') . '/admin/stores');

        $response = $response->object();
        // dd($response);
        $stores = $response->data;

        return view('/storeview', compact('stores'));
    }

    public function deleteCategory($id)
    {   
        // direct delete 

        DB::table('categories')->where('id', $id)->delete();

        return redirect('/category')->with('success');
    }
}
