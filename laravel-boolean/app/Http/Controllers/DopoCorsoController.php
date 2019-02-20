<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DopoCorsoController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dopo il Corso',
            'meta_description' => 'meta description di boolean dopo il corso',
            'students' => [
                [
                    'nome' => 'Alessandro Biagini',
                    'eta' => '24',
                    'azienda' => 'Softec Spa',
                    'link' => '#',
                    'slug' => 'alessandro-biagini'
                ],
                [
                    'nome' => 'Ervin Bani',
                    'eta' => '35',
                    'azienda' => 'Fabbrica Digitale',
                    'link' => '#',
                    'slug' => 'ervin-bani'

                ],
                [
                    'nome' => 'Federico Losi',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => '#',
                    'slug' => 'federico-losi'
                ],
            ]
        ];

        return view('dopo-il-corso', $data);
        //in alternativa potevo usare un nuovo array $students e chiamarlo con compact('students)
    }
    public function show($slug) {
        dd($slug);
    }
}
