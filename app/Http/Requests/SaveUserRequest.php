<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
{
/*  esta clase es importante para las validaciones para el usuario*/



    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       // dd($this->user);
        return [
                    'nombre' => 'required',
                    'ap_paterno' => 'required',
                    'ap_materno' => 'required',
                    'curp' => [
                        'required', 
                        Rule::unique('Usuario')->ignore($this->curp)
                       // Rule::unique('Usuario')->ignore($user->id)],
                    ], 
                    'domicilio' => 'required',
                    'colonia' => 'required',
                    'ciudad' => 'required',
                    'codigo_postal' => 'required',
                    'telefono' => 'required',
                     'correo' => ['required', 
                     Rule::unique('Usuario')->ignore($this->correo)
                    ],
                    'contrasena' => 'required',
            
        ];
    }

    public function messages(){

        return [

            //mensajes de validacion de campos
                 'nombre.required'  =>  'Se solicita el nombre',
                 'ap_paterno.required'  => 'Obligatorio el apellido paterno' ,
                 'ap_materno.required'  =>  'Obligatorio el apellido materno',
                 'domicilio.required'  =>  'Obligatorio domicilio',
                 'colonia.required'  =>  'Obligatorio la colonia',
                 'ciudad.required'  =>  'Obligatorio la ciudad',
                 'codigo_postal.required'  =>  'Obligatorio el codigo postal',
                 'telefono.required'  =>  'Obligatorio el telefono',
                 'correo.required'  =>  'Obligatorio el correo',
                 'contrasena.required'  =>  'Obligatorio la contraseña',
                 'curp.required' => 'Es obligatorio la curp',
           // para parametros que solamente sean unicos

                 'correo.unique'    =>'El correo ya existe',
                 'curp.unique'    =>'La curp ya existe',


        ];

    }


}
