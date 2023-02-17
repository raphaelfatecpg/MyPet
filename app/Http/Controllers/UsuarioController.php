<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Usuario as UsuarioResource;

class UsuarioController extends Controller
{
    Public function apiFind(Usuario $usuario){
    	return new UsuarioResource($usuario);
    }

    public function apiAll(){
    	return UsuarioResource::collection(Usuario::all());
    }

    public function apiStore(Request $request){
    	try{
    		$usuario = Usuario::create($request->all());
    		return response()->json($usuario,201);//model criado 201
    	}
    	catch(\Exception $ex){
    		return response()->json(null,400);
    	}
    }

    public function apiUpdate(Request $request, Usuario $usuario){
    	//404 model nao existe
    	try{
    		$usuario->update($request->all());
    		return response()->json($funcionario,200);//200 atualizado
    	}
    	catch(\Exception $ex){
    		return response()->json(null,400);//bad reques dados invalidos
    	}
    }

    public function apiDelete(Usuario $usuario){
    	//404 se model nao existe
    	try{
    		$usuario->delete();
    		return response()->(null,204); //funcionou
    	}
    	catch(\Exception $ex){
    		return response()->json(null,400);//bad request
    	}
    }
}






