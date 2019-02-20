<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $meta_description = 'questa e la meta description di boolean home';
        return view('home', compact('meta_description'));
    }
}
