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
                    'link' => 'https://www.boolean.careers/images/students/biagini.png',
                    'slug' => 'alessandro-biagini'
                ],
                [
                    'nome' => 'Ervin Bani',
                    'eta' => '35',
                    'azienda' => 'Fabbrica Digitale',
                    'link' => 'https://www.boolean.careers/images/students/bani.png',
                    'slug' => 'ervin-bani'

                ],
                [
                    'nome' => 'Federico Losi',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => 'https://www.boolean.careers/images/students/losi.png',
                    'slug' => 'federico-losi'
                ],
                [
                    'nome' => 'Davide Lecci',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => 'https://www.boolean.careers/images/students/lecci.png',
                    'slug' => 'davide-lecci'
                ],
                [
                    'nome' => 'Samuel Poma',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => 'https://www.boolean.careers/images/students/poma.png',
                    'slug' => 'samuel-poma'
                ],
                [
                    'nome' => 'Loana Masetti',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => 'https://www.boolean.careers/images/students/masetti.png',
                    'slug' => 'loana-masetti'
                ],
                [
                    'nome' => 'Alessandro Lausdei',
                    'eta' => '28',
                    'azienda' => 'Facile.it',
                    'link' => 'https://www.boolean.careers/images/students/lausdei.png',
                    'slug' => 'alessandro-lausdei'
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
