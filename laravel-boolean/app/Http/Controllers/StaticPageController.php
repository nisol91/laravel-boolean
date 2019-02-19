<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function privacy_policy()
    {
        $title = 'Privacy Policy';
        return view('privacy-policy', compact('title'));
    }

    public function workWithUs()
    {
        $title = 'Work with Us!';
        return view('work-with-us', compact('title'));
    }
}
