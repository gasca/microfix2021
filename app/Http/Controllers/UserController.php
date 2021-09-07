<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use App\Models\Usuario;

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
	    $user = Usuario::findOrFail($id);//lo mismo que lo anterior
        return view('users.show', compact('user'));
                            } 

     public function create(){
		 return view('users.create');
                            } 


    public function store(){

            $data = request()->validate(
                [
                    'nombre' => 'required',
                    'ap_paterno' => 'required',
                    'ap_materno' => 'required',
                    'domicilio' => 'required',
                    'colonia' => 'required',
                    'ciudad' => 'required',
                    'codigo_postal' => 'required',
                    'telefono' => 'required',
                    'correo' => ['required','email','unique:usuario,correo'],
                    'contrasena' => 'required',
                    
            

                ]);

            Usuario::create([
                'nombre' => $data['nombre'],
                'ap_paterno' => $data['ap_paterno'],
                'ap_materno' => $data['ap_materno'],
                'domicilio' => $data['domicilio'],
                'colonia' => $data['colonia'],
                'ciudad' => $data['ciudad'],
                'codigo_postal' => $data['codigo_postal'],
                'telefono' => $data['telefono'],
                'correo' => $data['correo'],
                'contrasena' => $data['contrasena'],


                

            ]);

            return redirect()->route('users.index');

    }

    public function edit(Usuario $user){

        return view('users.edit', ['user' => $user]);

    }



    public function update(Usuario $user){
        $data = request()->validate([
                    'nombre' => 'required',
                    'correo' => [
                        'required',
                         'email',
                         Rule::unique('Usuario')->ignore($user->id)],
                         'contrasena' => '',
        ]);

        if($data['contrasena'] != null )
        {

              $data['contrasena'] = bcrypt($data['contrasena']);
        }
        else
        {

            unset($data['contrasena']);
        }


        $user->update($data);


        return redirect()->route('users.show', ['user' => $user]);

    }

    public function destroy(Usuario $user){

        $user->delete();


        return redirect()->route('users.index');
    }






}
