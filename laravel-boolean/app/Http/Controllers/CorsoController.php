<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorsoController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Il Corso',
            'meta_description' => 'meta description di boolean corso'
        ];
        return view('corso', $data);
    }

}
