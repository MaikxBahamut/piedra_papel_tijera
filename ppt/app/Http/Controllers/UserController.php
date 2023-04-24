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
        $usuarios=User::all();
        return view('user',["users"=>$usuarios]);
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
    static public function update(string $resultado, User $user)
    {
        //
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

    public function seleccionarUsuario(Request $request)
    {
        // Obtiene el ID del usuario seleccionado del formulario
        $userId = $request->input('user');

        // Redirige a la vista de partida con el ID del usuario seleccionado
        return redirect()->route('choose', ['userId' => $userId]);
    }

    static public function comprobarUsuario(int $id,string $pssw)
    {
        $usuario = User::findOrFail($id);

        if (hash("sha256",$pssw) == $usuario->password){
            return $usuario;
        }else {
            return null;
        }
    }

    public function clasificacion()
    {
        $usuarios = User::all()->sortByDesc('win');
        return view ('clasificacion',["users" => $usuarios]);
    }

}
