<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Empresa de reparación de computadoras, smartphone, tablets.">
    <meta name="author" content="Microfix">
    <meta name="generator" content="Jekyll v3.8.6">

       


    <title>@yield('title')</title>

     

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sticky-footer-navbar/"> 

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


<!-- index-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c"> 


  <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style> 
    <!-- Custom styles for this template -->
  {{--   <link href="{{ asset('css/style.css') }}" rel="stylesheet"/> --}}

     
    <link rel="stylesheet" href="css/carusell.css" >
    <link rel="stylesheet" href="css/media.css"> 
    <link rel="stylesheet" href="css/style.css" >   

</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
        <!-- <img id="logo" src="img/logohcolor.png" alt="">  -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Computadoras</a></li>
            <li><a class="dropdown-item" href="#">Accesorios para computadoras</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Camaras</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reparame
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Computadoras</a></li>
            <li><a class="dropdown-item" href="#">Laptop</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Smartphone(Celulares)</a></li>
            <li><a class="dropdown-item" href="#">Tablets</a></li>
          </ul>
        </li>
           <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Computadoras</a></li>
            <li><a class="dropdown-item" href="#">Laptop</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Smartphone(Celulares)</a></li>
            <li><a class="dropdown-item" href="#">Tablets</a></li>
          </ul>
        </li>

    
    
            <li class="nav-item">
              <a class="nav-link" href="#">Ubicanos</a>
            </li>
                 
               

        
      </ul>
     
    </div>
  </div>
</nav>  



    <!-- Begin page content -->
    <main role="main" class="flex-shrink-11">
        <div class="container">
            <div class="row mt-5">
        <div class="col-11">
            @yield('content')



        </div>


</div>


        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            
            <span class="text-muted">
                <a href="https://facebook.com/MicrofixIrapuato"  target="_blank" >
                    <img src="img/icon/facebook.png" alt="">
                    facebook/MicrofixIrapuato                
                </a></span>
            <span class="text-muted">
                <a href="https://api.whatsapp.com/send?phone=524623353961&text=Hola!%20Quiero%20Información!" target="_blank" >
                    <img src="img/icon/whatsapp.png" alt="">
                    462-335-39-61
                </a></span>
        </div>
    </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
    

</body>

</html>
