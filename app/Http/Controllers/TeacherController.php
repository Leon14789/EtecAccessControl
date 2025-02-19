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
        //
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

        ]);

       $teacher->save();

       $vehicle = Vehicle::create([
           'teacher_id' => $teacher->id,
            'vehicle' => $request->vehicle,
            'plate' => $request->plate,
       ]);
       $vehicle->save();

      
        return view('pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
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
