<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function privacy_policy()
    {
       return 'siamo nella pagina privacy policy';
    }

    public function workWithUs()
    {
       return 'siamo nella pagina work with us';
    }
}
