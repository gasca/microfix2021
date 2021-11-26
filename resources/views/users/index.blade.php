@extends('layout')
	@section('content')
	
<div class="d-flex justify-content-between align=-items-end mb-2">
	<h1 class="pb-1">{{$title}}</h1>
	<p> 
		<a href="{{route('users.create')}}" class="btn btn-primary">Nuevo Usuario</a>	
	</p>
</div>			
		

	
@if($users->isNotEmpty())

<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Primer Apellido</th>
      <th scope="col">Segundo Apellido</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->nombre}}</td>
      <td>{{$user->ap_paterno}}</td>
      <td>{{$user->ap_materno}}</td>
      <td>
      			
						
						<form action="{{ route('users.destroy', $user) }}" method="POST">
              @csrf
              @method('DELETE')
              {{-- {{csrf_field()}}
							{{method_field('DELETE')}} --}}

							<a href="{{ route('users.show', $user) }}"
               class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
            </a>
						<a href="{{ route('users.edit', $user) }}" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
              <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
            </svg></a>
							<button type="submit" class="btn btn-link"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
             </svg>
            </button>	
							
						</form>

      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
@else
	<p>No hay Usuarios Registrados</p>
@endif

@endsection

