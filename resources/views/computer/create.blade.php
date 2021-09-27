@extends('layout')

@section('title', "Registrar Equipo")

@section('content')

	<div class="card" class="mb-2">
		<h4 class="card-header">Datos de la Computadora</h4>
		<div class="card-body">
			

@if($errors->any())
	<div class="alert alert-danger">
			<h6>Por favor corrige los siguientes errores:</h6>

		 	<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>	
				@endforeach		
				
		
			</ul> 

	</div>

@endif

<form method="POST" action="{{url('/computadora/crear')}}">
	
	{{csrf_field()}}

  <div class="form-group">

		<label for="name">Marca</label>
		<input type="text" name="marca" class="form-control"  placeholder="" value= "{{ old('marca')  }}">
		@if($errors->has('marca'))
			<p>{{ $errors->first('marca') }}</p>
		@endif
  </div>
    <div class="form-group">

		<label for="name">Modelo</label>
		<input type="text" name="modelo" class="form-control"  placeholder="" value= "{{ old('modelo')  }}">
		@if($errors->has('modelo'))
			<p>{{ $errors->first('modelo') }}</p>
		@endif
  </div>

   <div class="form-group">

		<label for="name">SN</label>
		<input type="text" name="SN" class="form-control"  placeholder="" value= "{{ old('SN')  }}">
		@if($errors->has('SN'))
			<p>{{ $errors->first('SN') }}</p>
		@endif
  </div>

	

<div class="form-group">
	
		<label for="Direccion">Memoria Ram</label>	
		<input type="text" name="Memoria_Ram" class="form-control" placeholder=""   value= "{{ old('Memoria_Ram')  }}">
		@if($errors->has('Memoria_Ram'))
			<p>{{ $errors->first('Memoria_Ram') }}</p>
		@endif
	
  	</div>

  <div class="form-group">
	
		<label for="Colonia">Disco Duro HDD</label>	
		
		  <select class="form-control" name="Disco_Duro_HDD">
	 	  <option value="240">240</option>
	      <option value="480">480</option>
	    
	    </select>

		
  	</div>
		<div class="form-group">
	
		<label for="CP">Disco Duro SDD</label>	
		<input type="text" name="Disco_Duro_HDD" class="form-control" placeholder=""   value= "{{ old('Disco_Duro_HDD')  }}">
		@if($errors->has('Disco_Duro_HDD'))
			<p>{{ $errors->first('Disco_Duro_HDD') }}</p>
		@endif
	
  		</div>

    <div class="form-group">
	
		<label for="Ciudad">Sistema Operativo</label>	
		
		  <select class="form-control" name="Sistema_Operativo">
	 	  <option value="Windwos 10">Windows 10</option>
    
	    </select>

		
  	</div>
   <div class="form-group">
	
		<label for="phone">Telefono para llamarle</label>	
		<input type="input" name="telefono" class="form-control"  placeholder="" value= "{{ old('telefono')  }}" >
		@if($errors->has('telefono'))
			<p>{{ $errors->first('telefono') }}</p>
		@endif
		
  	</div>
  	 



  	<div class="form-group">
	
		<label for="correo">Correo</label>	
		<input type="text" name="correo" class="form-control" placeholder="" value= "{{ old('correo')  }}">
		@if($errors->has('correo'))
			<p>{{ $errors->first('correo') }}</p>
		@endif
	
  	</div>



  <div class="form-group">
	
		<label for="password">Contraseña</label>	
		<input type="password" name="contrasena" class="form-control" placeholder="Mayor a 6 Caracteres">
		@if($errors->has('contrasena'))
			<p>{{ $errors->first('contrasena') }}</p>
		@endif
	   
  </div>

  	
	<button type="submit" class="btn btn-primary">Crear Usuario</button>	
	 {{-- <a href="{{ url('/usuarios') }}"> Regresar a Lista </a> --}}
    <a href="{{ action('UserController@index') }}" class="btn btn-link"> Regresar a Lista </a>



</form>
	
		</div>
	</div>

@endsection




	

