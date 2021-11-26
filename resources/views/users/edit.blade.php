@extends('layout')

@section('title', "Modificar Usuario")

@section('content')

	<div class="card">
		<h4 class="card-header">Datos del Usuario</h4>
		<div class="card-body">
			
{{-- 
@if($errors->any())
	<div class="alert alert-danger">
			<h6>Por favor corrige los siguientes errores:</h6>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>	
				@endforeach		
				
		
			</ul> 
	</div>

@endif --}}


<form method="POST" action="{{url("/usuarios/{$user->id}")}}"> 
	{{-- <form method="POST" action="{{route('users.update', [$user->id]  }")}}"> --}}
	{{ method_field('PUT') }}
	{{csrf_field()}}
	
  <div class="form-group">

		<label for="name">Nombre</label>
		<input type="text" name="nombre" class="form-control"  placeholder="" value= "{{ old('nombre', $user->nombre) }}">
		@if($errors->has('nombre'))
			<p>{{ $errors->first('nombre') }}</p>
		@endif
  </div>
    <div class="form-group">

		<label for="name">Apellido Paterno</label>
		<input type="text" name="ap_paterno" class="form-control"  placeholder="" value= "{{ old('ap_paterno', $user->ap_paterno)  }}">
		@if($errors->has('ap_paterno'))
			<p>{{ $errors->first('ap_paterno') }}</p>
		@endif
  </div>

   <div class="form-group">

		<label for="name">Apellido Materno</label>
		<input type="text" name="ap_materno" class="form-control"  placeholder="" value= "{{ old('ap_materno', $user->ap_materno)  }}">
		@if($errors->has('ap_materno'))
			<p>{{ $errors->first('ap_materno') }}</p>
		@endif
  </div>

  <div class="form-group">

	<label for="name">Curp</label>
	<input type="text" name="curp" class="form-control"  placeholder="" value= "{{ old('curp', $user->curp)  }}">
	@if($errors->has('curp'))
		<p>{{ $errors->first('curp') }}</p>
	@endif
</div>

	

<div class="form-group">
	
		<label for="Direccion">Domicilio</label>	
		<input type="text" name="domicilio" class="form-control" placeholder=""   value= "{{ old('domicilio', $user->domicilio)  }}">
		@if($errors->has('domicilio'))
			<p>{{ $errors->first('domicilio') }}</p>
		@endif
	
  	</div>

  <div class="form-group">
	
		<?php	 $colonias = ['Encanto', 'Villa San Angel']; ?>
		<label for="Colonia">Colonia</label>	
		
		  <select class="form-control" name="colonia">

	 					@foreach($colonias as $colonia)

					@if ($user->colonia == $colonia)

				  		<option value="{{ $user->colonia }}" selected>{{$user->colonia}}</option>
				  	@else
						<option value={{$colonia}}>{{$colonia}}</option>
					@endif
			@endforeach
	    
	    </select>

		
  	</div>

    <div class="form-group">

	
<?php 
				$ciudades = ['Celaya', 'Irapuato', 'Juventino Rosas'];
 ?>
	    	
	
		<label for="Ciudad">Ciudad</label>	
		
		  <select class="form-control" name="ciudad">
				@foreach($ciudades as $ciudad)

					@if ($user->ciudad == $ciudad)
				  		<option value="{{ $user->ciudad }}" selected>{{$user->ciudad}}</option>
				  	@else
						<option value={{$ciudad}}>{{$ciudad}}</option>
					@endif
			@endforeach
	    
	    </select>

		
  	</div>


  		<div class="form-group">
	
		<label for="CP">Codigo Postal</label>	
		<input type="text" name="codigo_postal" class="form-control" placeholder=""   value= "{{ old('codigo_postal', $user->codigo_postal)  }}">
		@if($errors->has('codigo_postal'))
			<p>{{ $errors->first('codigo_postal') }}</p>
		@endif
	
  		</div>
   <div class="form-group">
	
		<label for="phone">Telefono para llamarle</label>	
		<input type="input" name="telefono" class="form-control"  placeholder="" value= "{{ old('telefono', $user->telefono)  }}" >
		@if($errors->has('telefono'))
			<p>{{ $errors->first('telefono') }}</p>
		@endif
		
  	</div>
  	 



  	<div class="form-group">
	
		<label for="correo">Correo</label>	
		<input type="text" name="correo" class="form-control" placeholder="" value= "{{ old('correo', $user->correo)  }}">
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

  	
	<button type="submit" class="btn btn-primary">Actualizar Usuario</button>	
	 {{-- <a href="{{ url('/usuarios') }}"> Regresar a Lista </a> --}}
    <a href="{{ action('UserController@index') }}" class="btn btn-link"> Regresar a Lista </a>



</form>
	

@endsection




		</div>
	</div>


