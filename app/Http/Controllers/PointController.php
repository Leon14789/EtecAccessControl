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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
