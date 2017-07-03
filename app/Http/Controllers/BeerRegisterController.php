<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerRegisterController extends Controller
{
    //

    public function index()
    {
        return view('add');
    }

    public function register(Request $request)
    {
        var_dump($request);
    }
}
