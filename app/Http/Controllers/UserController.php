<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Users = User::all();
       return view('pages.user', compact('Users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user =  User::find($user->id);
        $user->update([
        'name' =>$request->name,
        'email' => $request->email,
        'password' => $request->password
      ]);
      return redirect()->route('dashboard')->with('success', 'Funcionario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id->delete();
      return redirect()->route('dashboard')->with('error', 'Funcionario Deletado com sucesso!');

    }
}
