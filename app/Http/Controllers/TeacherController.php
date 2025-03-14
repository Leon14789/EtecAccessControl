<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller

{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $teachers = Teacher::all();
       
      return view('pages.indexTeachers', compact('teachers') );

    }

    public function create(): View
    {
        return view('pages.registerTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'vehicle' => ['required', 'string', 'max:255'],
            
        ]);

        try {
            
            $teacher = Teacher::create([
                'name' => $request->name,
                'vehicle' => $request->vehicle,
                'plate' => $request->plate,
            ]);

            
            $teacher->save();

        return redirect()->route('dashboard')->with('success', 'Professor registrado com sucesso!');
    } catch (\Exception $e) {
        return redirect()->route('dashboard')->with('error', 'Erro ao registrar o professor: ' . $e->getMessage());
    }
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
 
        if ($teacher) {
            return response()->json([
                'vehicle' => $teacher->vehicle,
                'plate' => $teacher->plate
            ]);
        } else {
            return response()->json([
                'error' => 'Professor não encontrado'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
      $teacher =  Teacher::find($teacher->id);


       
      $teacher->update([
        'name' =>$request->name,
        'vehicle' => $request->vehicle,
        'plate' => $request->plate
      ]);
      return redirect()->route('dashboard')->with('success', 'Professor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('dashboard')->with('error', 'Professor Deletado com sucesso!');

    }
}
