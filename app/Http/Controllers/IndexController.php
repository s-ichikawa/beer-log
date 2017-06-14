<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $contents = [];
        return view('index', [
            'contents' => $contents,
        ]);
    }
}
