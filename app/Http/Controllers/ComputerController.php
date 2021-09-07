<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use App\Models\Usuario;
use App\Models\Equipo;
use App\Models\Reporte;
use App\Models\Evidencia;
use Carbon\Carbon;


class ComputerController extends Controller
{
    

    function create(){
         return view('computer.create');
      
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
                   // 'contrasena' => 'required',
                     'radiosd' =>'',
                     'radiosdiag' =>'',
                     'radioservicio' =>'',
                     
                    
            

                ]);

           $user = Usuario::create([
                'nombre' => $data['nombre'],
                'ap_paterno' => $data['ap_paterno'],
                'ap_materno' => $data['ap_materno'],
                'domicilio' => $data['domicilio'],
                'colonia' => $data['colonia'],
                'ciudad' => $data['ciudad'],
                'codigo_postal' => $data['codigo_postal'],
                'telefono' => $data['telefono'],
                'correo' => $data['correo'],
                //'contrasena' => $data['contrasena'],


                

            ]);


           $equipo = Equipo::Create([

            	'Descripcion'=>$data['radiosd'],
            ]);

            $now = new \DateTime();
            Reporte::Create([

                'user_id'=> $user->id,
                'equipo_id' => $equipo->id, 
            	'Accion' => $data['radiosdiag'],	
            	'status' => 'registro',
            	'Servicio_a_Domicilio' => $data['radioservicio'],
                 'Fecha_Entrada' => Carbon::now(),
                //'Fecha_Entrada' => $now->format('Y-m-d H:i:s'),
           
            ]);




            return redirect()->route('users.index');

    }
}
