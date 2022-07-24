 {{-- @extends('layout') --}}
 @section('title', "- Microfix -")

 <!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Empresa de reparación de computadoras, smartphone, tablets.">
    <meta name="author" content="Microfix">
    <meta name="generator" content="Jekyll v3.8.6">




    <title>@yield('title')</title>


<!-- index-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




  {{-- <link href="{{ asset('css/estilo.css') }}" rel="stylesheet"/>--}}

        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/fuentes.css">
        <link rel="stylesheet" href="css/estilo.css" >
        <link rel="stylesheet" href="css/tarjetas.css" >
        <link rel="stylesheet" href="css/piepagina.css">


</head>

        <body>

                    @include('partials.nav')
                    @include('partials.section')
                    @include('partials.footer')
        </body>

</html>

