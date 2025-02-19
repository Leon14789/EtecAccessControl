<?php

namespace App\Http\Controllers;

use App\Models\Point;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pont = Point::create([
            'teacher_id' => $request->teacher_id,
            'Prohibited' => $request->Prohibited,
            'exit' => $request->exit,
        ]);
        $pont->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
        
        $register = Point::where('data', $date)->all();


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
