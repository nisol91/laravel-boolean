<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Metodo',
            'meta_description' => 'meta description di boolean metodo'
        ];

        return view('metodo', $data);
    }
}
