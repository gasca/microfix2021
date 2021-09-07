@extends('layout')

@section('title', "Crear Usuario")

@section('content')

	<div class="card" class="mb-2">
		<h4 class="card-header">Datos del Solicitante</h4>
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

<form method="POST" action="{{url('/usuarios/crear')}}">
	
	{{csrf_field()}}

  <div class="form-group">

		<label for="name">Nombre</label>
		<input type="text" name="nombre" class="form-control"  placeholder="" value= "{{ old('nombre')  }}">
		@if($errors->has('nombre'))
			<p>{{ $errors->first('nombre') }}</p>
		@endif
  </div>
    <div class="form-group">

		<label for="name">Apellido Paterno</label>
		<input type="text" name="ap_paterno" class="form-control"  placeholder="" value= "{{ old('ap_paterno')  }}">
		@if($errors->has('ap_paterno'))
			<p>{{ $errors->first('ap_paterno') }}</p>
		@endif
  </div>

   <div class="form-group">

		<label for="name">Apellido Materno</label>
		<input type="text" name="ap_materno" class="form-control"  placeholder="" value= "{{ old('ap_materno')  }}">
		@if($errors->has('ap_materno'))
			<p>{{ $errors->first('ap_materno') }}</p>
		@endif
  </div>

	

<div class="form-group">
	
		<label for="Direccion">Domicilio</label>	
		<input type="text" name="domicilio" class="form-control" placeholder=""   value= "{{ old('domicilio')  }}">
		@if($errors->has('domicilio'))
			<p>{{ $errors->first('domicilio') }}</p>
		@endif
	
  	</div>

  <div class="form-group">
	
		<label for="Colonia">Colonia</label>	
		
		  <select class="form-control" name="colonia">
	 	  <option value="Villa San Angel">Villa San Angel</option>
	      <option value="Encanto">Encanto</option>
	    
	    </select>

		
  	</div>
		<div class="form-group">
	
		<label for="CP">Codigo Postal</label>	
		<input type="text" name="codigo_postal" class="form-control" placeholder=""   value= "{{ old('domicilio')  }}">
		@if($errors->has('codigo_postal'))
			<p>{{ $errors->first('codigo_postal') }}</p>
		@endif
	
  		</div>

    <div class="form-group">
	
		<label for="Ciudad">Ciudad</label>	
		
		  <select class="form-control" name="ciudad">
	 	  <option value="Celaya">Celaya</option>
	      <option value="Irapuato">Irapuato</option>
	    
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




	

