@extends('ecsl-2018::base')

@section('container')
@include('decima-cms::blog-css')
@include('decima-cms::blog-post')
<!-- Modal -->
<div class="modal fade" id="Contact" tabindex="-1" role="dialog" aria-labelledby="Body" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="Body">Detalles de Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="modal-body">
        <p>
          Lic. Juan Perez
        </p>
        <p>
          Telefono: (+503) 7456-7890 <br> Correo Electronico: <a href="mailto:name@example.com">name@example.com</a> <br> Horario: Lunes - Viernes: 9:00 AM a 5:00 PM <br>
        </p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- CARRUSEL-->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>

    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
      <!-- <div class="carousel-item active" style="background-image: url('img/BannerPrincipal11.png')"> -->

        <div class="carousel-caption  ">
          <h3 class="d-none d-lg-block font-weight-bold">X Encuentro Centroaméricano de Software Libre</h3>
          <h4 class="d-none d-md-block d-lg-none font-weight-bold">X Encuentro Centroaméricano de Software Libre</h4>
          <h6 class="d-md-none font-weight-bold">X Encuentro Centroaéricano de Software Libre</h6>
          <p class="font-italic font-weight-bold">El Salvador - 2018</p>
        </div>

      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second Slide</h3>
          <p>This is a description for the second slide.</p>
        </div>
      </div> -->
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Third Slide</h3>
          <p>This is a description for the third slide.</p>
        </div>
      </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</header>

<!--Acerca de-->
<section class="about-us section-padding">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="text-center text-white"><strong>X Encuentro Centroamericano de Software Libre</strong></h2>
      <p class="lead text-center text-white">El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado desde el año 2009 por y para la comunidad Software Libre Centroamérica (SLCA). El ECSL es una reunión anual de activistas y miembros de comunidades y grupos de
        usuarios que sirve como punto de encuentro y espacio de articulación, educación, coordinación e intercambio de ideas para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y desarrollo del Software Libre en
        la región.</p>
    </div>
  </div>
</section>

<!-- Page Content -->
<div class="container">

  <h1 class="my-4 text-center"></h1>

  <!-- Marketing Icons Section -->
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->



<!--Informacion General-->
<section class="about-us section-padding">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="display-5 text-center text-white">Información General</h2><br>
      <div class="row">
        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="logistica.html" class="text-white">
                  <i class="fa fa-user-circle-o main-icons" aria-hidden="true"></i> <h3>Participación</h3>
                </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="logistica.html" class="text-white">
                <i class="fa fa-bed main-icons" aria-hidden="true"></i><h3>Hospedaje</h3>
              </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="logistica.html" class="text-white">
                <i class="fa fa-university main-icons" aria-hidden="true"></i><h3>Sede</h3>
                </a>
        </div>

        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="logistica.html" class="text-white">
              <i class="fa fa-question-circle-o main-icons" aria-hidden="true"></i><h3>FAQ</h3>
            </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Page Content -->
<div class="container">

  <!-- Anuncio "Registrarme" -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block bg-dark" href="#">Registrarme</a>
    </div>
  </div>

  <hr>


  <!-- Portfolio Section -->
  <h2 class="text-center display-5">Patrocinadores</h2><br>

  <div class="row">

    <div class="col-lg-3 col-md-4 col-sm-6 col-12 portafolio-item">
      <a href="http://www.uca.edu.sv">
        <div class="card">
          <img class="card-img-top mx-auto  height-sponsors-img  " src="img/UCA.png" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">UCA El Salvador</h5>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-12 portafolio-item">
      <a href="http://www.uca.edu.sv">
        <div class="card">
          <img class="card-img-top mx-auto  height-sponsors-img  " src="img/UCA.png" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">UCA El Salvador</h5>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-12 portafolio-item">
      <a href="http://www.uca.edu.sv">
        <div class="card">
          <img class="card-img-top mx-auto  height-sponsors-img  " src="img/UCA.png" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">UCA El Salvador</h5>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-12 portafolio-item">
      <a href="http://www.uca.edu.sv">
        <div class="card">
          <img class="card-img-top mx-auto  height-sponsors-img  " src="img/UCA.png" alt="">
          <div class="card-body">
            <h5 class="card-title text-center">UCA El Salvador</h5>
          </div>
        </div>
      </a>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@include('decima-cms::blog-js')
@parent
@stop
