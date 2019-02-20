<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function privacy_policy()
    {
        $data = [
            'title' => 'Privacy Policy',
            'meta_description' => 'meta description di Privacy Policy'
        ];
        return view('privacy-policy', $data);
    }

    public function workWithUs()
    {
        $data = [
            'title' => 'Privacy Policy',
            'meta_description' => 'meta description di work with us'
        ];
        return view('work-with-us', $data);
    }
}
