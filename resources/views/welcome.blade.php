 @extends('layout')
 @section('title', "- Microfix -")

 @section('content')

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/microfixuno.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
        <div class="container">
          <div class="carousel-caption text-left">
          <h1>Actualiza tus dispositivos para este regreso a clases </h1>
           {{--    <p>¿Tu computadora es lenta, se traba o no abre los programas? 
                Necesitas limpieza y restauración de programas  </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Contactanos</a></p> --}}
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/microfixcuatro.jpg"  class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
        <div class="container">
          <div class="carousel-caption">
        <h1>Diseño Web Frontend y Backend.</h1>
           {{--      <p>Deseas un diseño web e imagen para tus redes sociales<br> 
                 Creamos tu sitio web y las vinculamos a tus redes sociales</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer Más</a></p> --}}
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/propuestaeditada.jpg"  class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></img>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Actualiza tus dispositivos para este regreso a clases  </h1>
            {{-- <p>¿𝑻𝒖 𝒄𝒐𝒎𝒑𝒖𝒕𝒂𝒅𝒐𝒓𝒂 𝒆𝒔 𝒍𝒆𝒏𝒕𝒂, 𝒔𝒆 𝒕𝒓𝒂𝒃𝒂 𝒐 𝒏𝒐 𝒂𝒃𝒓𝒆 𝒍𝒐𝒔 𝒑𝒓𝒐𝒈𝒓𝒂𝒎𝒂𝒔? 
              Necesitas limpieza y restauración de programas  <br> 
            ☑️𝑷𝒂𝒒𝒖𝒆𝒕𝒆𝒓í𝒂 𝑶𝒇𝒇𝒊𝒄𝒆 𝑾𝒐𝒓𝒅, 𝑬𝒙𝒄𝒆𝒍, 𝑷𝒐𝒘𝒆𝒓 𝒑𝒐𝒊𝒏𝒕<br> 
            ☑️𝑰𝒏𝒔𝒕𝒂𝒍𝒂𝒄𝒊ó𝒏 𝒅𝒆 𝑨𝒏𝒕𝒊𝒗𝒊𝒓𝒖𝒔, 𝒁𝒐𝒐𝒎, 𝑴𝒊𝒄𝒓𝒐𝒔𝒐𝒇𝒕 𝑻𝒆𝒂𝒎𝒔
            ➡️𝑴𝒂𝒏𝒕𝒆𝒏𝒊𝒎𝒊𝒆𝒏𝒕𝒐 </p> --}}
           {{--  <p><a class="btn btn-lg btn-primary" href="#" role="button">Contactanos</a></p> --}}
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/circuito.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>Microfix Hardware</h2>
        <p>Reparamos tu equipo o actualizamos tu equipo a nivel de hardware, es decir mejoramos tu memoria ram, disco duro, etc. Se dañó tu pantalla de laptop, Smartphone o necesitas cambiar tu pila nosotros te cotizamos.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Más Detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/sentado.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>Microfix Software</h2>
        <p>Hacemos tu equipo más rápido a nivel de software. Es lento tu equipo al iniciar o necesitas actualizar tu sistema operativo nosotros lo hacemos. Te conseguimos el software para trabajar o te proponemos de acuerdo a tus necesidades.</p>
        <p><a class="btn btn-secondary" href="#" role="button">Más Detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/darkmac.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>Microfix Web - Social Media</h2>
        <p>Necesitas desarrollar un sitio web creamos tu diseño a nivel frontend en tecnología de vanguardia. Buscas un desarrollo con bases de datos para la administración de tu negocio a nivel backend..</p>
        <p><a class="btn btn-secondary" href="#" role="button">Más Detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES 

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

     /END THE FEATURETTES -->

  </div><!-- /.container -->

  @endsection