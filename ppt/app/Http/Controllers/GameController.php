<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   static public function partida(int $idUsuario, string $movUser)
   {
        $movimientos = ["scissors","rock","paper"];
        $movCpu = $movimientos[rand(0,2)];

        $resultado = self::comprobarResultado($movUser,$movCpu);


        return ["result" => $resultado, "movCPU" => $movCpu, "movUser" => $movUser];
   }
   static public function vista(){
    return view('choose');
   }

}
