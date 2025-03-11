<?php

namespace App\Http\Controllers;

use App\Models\Point;
use App\Models\Teacher;
use DateTime;
use DateTimeZone;
use Exception;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $hours = date("H:i:s");

        try {
            $registerPoint = Point::create([
                'teacher_id' => $request->idTeacher,
                'Prohibited' =>  $hours,
                'registered_by' => 'NOME DO VIGILANTE ( USER LOGADO )'
            ]);
            $registerPoint->save();
           
            return view('/')

                ->with(['message' => 'Atividade cadastrada com sucesso!', 'class' => 'alert-success']);
        } catch (Exception $e) {
          
            return redirect()->route('dashboard')
                ->with(['message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $teachers = Teacher::all();

        
        $date = date("Y-m-d");
        $points = Point::with('teacher')  
        ->whereDate('created_at', $date)
        ->orderBy('created_at', 'asc')
        ->get();

        
        return view('dashboard', compact('teachers', 'points') );
    }

    public function registerExit(Request $request, string $id)
    {
        $exitTeacher = date("H:i:s");
        $teacher = Point::where('teacher_id', $id)->latest()->first();
        try {
            if (empty($teacher->exit)) {
                $teacher->exit = $exitTeacher ;
                $teacher->save();
                return redirect()->route('/')
                ->with(['message' => 'Saida Registrada com sucesso!', 'class' => 'alert-success']);
            }

        } catch (Exception $e) {
            return redirect()->route('dashboard')
                ->with(['message' => 'Algo deu errado tente novamente mais tarde!', 'class' => 'alert-danger']);
        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Point::find($id);

        $user->update([
            'Prohibited' => $request->Prohibited,
            'exit' => $request->exit,
        ]);
        return redirect()->route('dashboard')->with('success', 'Professor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
