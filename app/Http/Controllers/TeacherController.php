<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Vehicle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller

{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      

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

        $teacher = Teacher::create([
            'name' => $request->name,
            'vehicle' => $request->vehicle,
            'plate' => $request->plate,

        ]);

       $teacher->save();


      
        return view('dashboard');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
