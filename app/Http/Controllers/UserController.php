<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\SaveFileRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use App\Models\Usuario;
use App\Models\Archivo;

class UserController extends Controller
{


public function microfix(){

    return view('welcome');
}

    public function portal(){
       $title = 'Listado de usuarios';
       $users = Usuario::all();
        return view('welcome');
                            } 

    public function index(){
	   $title = 'Listado de usuarios';
       $users = Usuario::all();
		return view('users.index', compact('title','users'));
                            } 

    public function show($id){
	    $user = Usuario::with('archivo')->findOrFail($id);//lo mismo que lo anterior
        return view('users.show', compact('user'));
                            } 

     public function create(){
		 return view('users.create');
                            } 


    public function store(SaveUserRequest $reuser, SaveFileRequest $refile ){
      
      
        $usuario = Usuario::create($reuser->validated());
        $usuario->archivo()->create($refile->validated());
        $usuario->archivo->foto = $refile->file('foto')->store('images', 'public');
        $usuario->archivo->save();
        $usuario->save();
        


        //    $archivo = Archivo::create($refile->validated());//Agregar un request para archivo
            // $archivo->foto = $refile->file('foto')->store('images', 'public');
            // $archivo->save();
        
        //return $request->file('foto')->store('images', 'public');// public representa la ubicacion de la carpeta public donde estan las imagenes 3, intermedio


              
               return redirect()->route('users.index');

    }

    public function edit(Usuario $user){

            $ciudades =
            [
                'Irapuato', 'Celaya'. 'Juventino Rosas'
            ];



        return view('users.edit', [
            'user' => $user,
             $ciudades


        ]);

    }



    public function update(Usuario $user, SaveUserRequest $request){
       
        $user->update($request->validated());

        return redirect()->route('users.show', ['user' => $user]);

    }

    public function destroy(Usuario $user){

        $user->delete();


        return redirect()->route('users.index');
    }






}
