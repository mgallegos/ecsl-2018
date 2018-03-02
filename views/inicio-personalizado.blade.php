@extends('ecsl-2018::base')

@section('container')
@include('decima-cms::blog-css')
@include('decima-cms::blog-post')

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
      <div class="carousel-item active" style="background-image: url('https://storage.googleapis.com/decimaerp/organizations/15/carousel1.jpg')">
      <!-- <div class="carousel-item active" style="background-image: url('img/BannerPrincipal11.png')"> -->

        <div class="carousel-caption">
          <h3 class="d-none d-lg-block font-weight-bold">X Encuentro Centroaméricano de Software Libre</h3>
          <h3 class="d-none d-lg-block font-weight-bold">12 y 13 de julio del 2018</h3>
          <h4 class="d-none d-md-block d-lg-none font-weight-bold">X Encuentro Centroaméricano de Software Libre</h4>
          <h4 class="d-none d-md-block d-lg-none font-weight-bold">12 y 13 de julio del 2018</h4>
          <h6 class="d-md-none font-weight-bold">X Encuentro Centroaéricano de Software Libre</h6>
          <h6 class="d-md-none font-weight-bold">12 y 13 de julio del 2018</h6>
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
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="http://ecsl2017.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 id="ecsl-2017-card-title" class="card-title text-center">IX ECSL 2017 <br> San José, Costa Rica</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2017.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">VIII ECSL 2016 <br> Managua, Nicagarua</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://encuentro.softwarelibre.ca/2016/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="https://ecsl2017.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">VII ECSL 2015 <br> San Pedro Sula, Honduras</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2015.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <!-- <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <h4 class="card-header">Card Title</h4>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div> -->

  </div>
  <!-- /.row -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p class="text-center">Conoce los países y lugares en los que el Encuentro Centroamericano de Software Libre se ha venido realizando desde al año 2009 y no pierdas la oportunidad de participar en la décima edición del evento El Salvador 2018!</p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block" href="{{URL::to('cms/eventos-anteriores')}}">Ver todos los eventos anteriores</a>
    </div>
  </div>

  <hr>
</div>
<!-- /.container -->



<!--Informacion General-->
<section class="about-us section-padding">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="display-5 text-center text-white">Información General</h2><br>
      <div class="row">
        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                  <i class="fa fa-user-circle-o main-icons" aria-hidden="true"></i> <h3>Participación</h3>
                </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                <i class="fa fa-bed main-icons" aria-hidden="true"></i><h3>Hospedaje</h3>
              </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                <i class="fa fa-university main-icons" aria-hidden="true"></i><h3>Sede</h3>
                </a>
        </div>

        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/faq')}}" class="text-white">
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

  <!-- <div class="row mb-4">
    <div class="col-md-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block bg-dark" href="#">Registrarme</a>
    </div>
  </div>

  <hr> -->


  <!-- Portfolio Section -->
  <h2 class="text-center display-5">Patrocinadores</h2><br>

  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo card-header-logo-padding">
          <a href="http://www.uca.edu.sv" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_uca.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.uca.edu.sv" target="_blank" class="card-logo-title">
              Universidad Centroamericana José Simeón Cañas
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo card-header-logo-padding">
          <a href="http://www.slsv.org/" target="_blank">
            <img class="card-img-top img-fluid" src="http://www.slsv.org/sites/default/files/color/business-4a3de5b4/logo.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.slsv.org/" target="_blank" class="card-logo-title">
              Comunidad Salvadoreña de Software Libre
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo mt-2">
          <a href="http://www.salud.gob.sv/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_minsal.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.salud.gob.sv/" target="_blank" class="card-logo-title">
              Comunidad Salvadoreña de Software Libre
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="http://www.decimaerp.com/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_decimaerp_.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.decimaerp.com/" target="_blank" class="card-logo-title">
              DecimaERP
            </a>
          </h6>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@include('decima-cms::blog-js')
@parent
@stop
