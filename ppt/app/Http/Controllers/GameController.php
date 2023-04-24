<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class GameController extends Controller
{
   static public function comprobarResultado(string $movUser, string $movCpu) : string
   {
    if ($movUser == $movCpu) return "draw";
    if ($movUser == "scissors"){
        if ($movCpu == "rock") return "lose";
        return "win";
    }
    if ($movUser == "rock") {
        if ($movCpu == "paper") return "lose";
        return "win";
    }
    if ($movUser == "paper") {
        if ($movCpu == "scissors") return "lose";
        return "win";
    }
   }

   static public function partida(Request $request, int $idUsuario)
   {
        $movimientos = ["scissors","rock","paper"];
        $movCpu = $movimientos[rand(0,2)];
        $movUser=$request->move;
        $user = User::findOrFail($idUsuario);

        $resultado = self::comprobarResultado($movUser,$movCpu);


        return view('resultado',["resultado" => $resultado, "movCpu" => $movCpu, "movUser" => $movUser, "user"=> $user]);
   }
   static public function vista(Request $request){
    $user = User::findOrFail($request->user);
    return view('choose',['usuario'=>$user]);
   }

}
