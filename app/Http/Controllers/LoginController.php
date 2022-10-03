<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request){

        $input = $request->all();

        $usuario['nombre']=$input['nombre'];
        $usuario['correo']=$input['correo'];
        $usuario['contraseña']=$input['contraseña'];
        

        Login::create($usuario);
        $registro=true;

        return view('login',compact('registro'));


    }
    public function ingresar(Request $request){
        $input = $request->all();
     
        $correo=$input['correo'];
        $clave=$input['contraseña'];
        $validate=false;
        
        $usuarios=Login::orderBy('nombre','desc')->get();

        foreach($usuarios as $user){
            if($user->correo ==$correo && $user->contraseña == $clave ){
                $validate=true;
                $nombre = $user->nombre;
            }
        }

        if($validate){
            return view('index',compact('nombre'));
        }else{
            $error=true;
            return view('login',compact('error'));
        }
        
    }
}
