<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $user = User::create([
            'name' => $request->name,
            'win' => 0,
            'lose' => 0,
            'draw' => 0
        ]);
        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $resultado = $request->resultado;
        $user = User::findOrFail($id);
        $result = [];

        switch($resultado)
        {
            case "win" : 
                $win = $user->win;
                $result = $user->update(["win"=> $win+1]);
                break;
            case "lose" : 
                $lose = $user->lose;
                $result = $user->update(["lose"=> $lose+1]);
                break;
            case "draw" :
                $draw = $user->draw;
                $result = $user->update(["draw"=> $draw+1]);
        }

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
