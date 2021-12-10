@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')

<h1> Usuarios #{{ $user->id }} </h1>

<p>Nombre del usuario: {{ $user->nombre }}</p>
<p>Email del usuario: {{ $user->correo }}</p>
<img src="/files/{{ $user->archivo->foto}}" alt="">

<p>
    {{-- <a href="{{ url('/usuarios') }}"> Regresar a Lista </a> --}}
    <a href="{{ route('users.index') }}"> Regresar a Lista </a>
</p>

@endsection

