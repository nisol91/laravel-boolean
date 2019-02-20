<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DopoCorsoController extends Controller
{
    private $students;


    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->students = config('students');
    }
    public function index()
    {
        // dd($this->students);
        // dd(config('students.4.nome'));
        //con questa dot notation posso accedere agli elementi interni della mia config

        $data = [
            'title' => 'Dopo il Corso',
            'meta_description' => 'meta description di boolean dopo il corso',
        ];
        $students = $this->students;
        return view('dopo-il-corso', $data, compact('students'));
        //in alternativa potevo usare compact('data')
    }


    public function show($slug) {
        $students = $this->students;
        //in alternativa posso usare config('students')

        $studente = [];
        foreach ($students as $key => $value) {
            if ($value['slug'] == $slug) {
                $studente = $value;


                $data = [
                    'title' => 'Show',
                    'meta_description' => 'meta description di boolean show studenti',
                ];

                return view('student-show', $data, compact('studente'));
            }
        }
    }
}
