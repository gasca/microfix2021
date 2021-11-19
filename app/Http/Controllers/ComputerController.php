<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use App\Models\Usuario;
use App\Models\Computadora;
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
                    'Marca' => 'required',
                    'Modelo' => 'required',
                    'SN' => 'required',
                    'Memoria_Ram' => 'required',
                    'Disco_Duro_SSD' => 'required',
                    'Disco_Duro_HDD' => 'required',
                    'Sistema_Operativo' => 'required',
                    'Tipo_Equipo' => 'required',
                    'Manipulacion' => 'required',
                   // 'contrasena' => 'required',
                   //  'radiosd' =>'',
                   //  'radiosdiag' =>'',
                   //  'radioservicio' =>'',
                     
                    
            

                ]);

           $computer = Computadora::create([
                'Marca' => $data['Marca'],
                'Modelo' => $data['Modelo'],
                'SN' => $data['SN'],
                'Memoria_Ram' => $data['Memoria_Ram'],
                'Disco_Duro_SSD' => $data['Disco_Duro_HDD'],
                'Sistema_Operativo' => $data['Sistema_Operativo'],
                'Tipo_Equipo' => $data['Tipo_Equipo'],
                'Estatus_Equipo' => 'Registro',
                'Manipulacion' => $data['Manipulacion'],
                //'contrasena' => $data['contrasena'],


                

            ]);

/*
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
                /* 'Fecha_Entrada' => Carbon::now(),*/
                //'Fecha_Entrada' => $now->format('Y-m-d H:i:s'),
           
        /*    ]);

*/


            return redirect()->route('users.index');

    }
}
