<?php




namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class StudentController extends Controller
{
    public function filter(Request $request)
    {
        $data = $request->all();
        $gender = $data['gender'];
        //questo e' M o F della select. In pratica il giro e':
        // clicco il pulsante, chiamata ajax a questa rotta creata ad hoc (student/filter) che ha questo metodo che
        //mi controlla , ciclando negli studenti, se lo studente in questione ha
        //oppure no il genere nella query della chiamata ajax, passato alla chiamata dalla select con jquery.
        //infine consolloggo con js il risultato della chiamata, ovvero il return di questo controller.
        if (empty($gender))
        {
            return response()->json([
                'error' => 'Guarda che gender era vuoto',
                'results' => []
            ]);
        }
        $filteredStudents = [];
        foreach (config('students') as $student)
        {
            if ($student['gender'] == $gender)
            {
                $filteredStudents[] = $student;
            }
        }
        return response()->json([
            'studenti' => $filteredStudents,
            'numero risultati' => count($filteredStudents),
        ]);
    }
}
