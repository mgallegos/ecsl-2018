@extends('ecsl-2018::base')

@section('container')
<!-- CARRUSEL-->
<header>
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <!-- <li data-target="#carouselIndicators" data-slide-to="2"></li> -->
    </ol>

    <div class="carousel-inner" role="listbox">
      <!-- Slide One-->
      <div class="carousel-item active" style="background-image: url('https://storage.googleapis.com/decimaerp/organizations/15/carousel2.jpg')"></div>

      <!-- Slide Two-->
      <div class="carousel-item" style="background-image: url('https://storage.googleapis.com/decimaerp/organizations/15/carousel3.jpg')"></div>

    </div>



    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</header>

<!--Acerca de-->
<section class="">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="text-center text-white"><strong>X Encuentro Centroamericano de Software Libre</strong></h2>
      <h4 class="text-center text-white font-weight-bold">12, 13 y 14 de julio del 2018</h4>
      <p class="lead text-center text-white">El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado desde el año 2009 por y para la comunidad  de Software Libre Centroamérica (SLCA). El ECSL es una reunión de activistas e integrantes de comunidades y grupos de
        usuarios/as que sirve como punto de encuentro y espacio de articulación, educación, coordinación e intercambio de ideas para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y desarrollo del Software Libre en
        la región.</p>
      <!-- <div id="btn-registration" class="text-center" style="margin:0 auto;">
        <a class="btn btn-lg btn-secondary" href="{{ URL::to('/registro') }}">Registrarse</a>
      </div> -->
    </div>
  </div>
</section>

<!-- Page Content -->
<div class="container">
  <h2 class="text-center display-5">Galeria del evento</h2><br>
  <div class="collage">
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/comedor.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/comedor.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/comedor.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/comedor.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/habitaciones2.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid collage-img">
        </a>
        <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid collage-img">
        </a>
  </div>

  <br><br>
  <!-- /.row -->
  <div class="row mb-4">
    <div class="col-md-8">
      <p class="text-center">El 10mo ECSL se llevó a cabo durante las fechas 12, 13, 14 de Julio del 2018. Ahora la sapa pasa a ser de nuestros hermanos guatemantecos en el 11vo ECSL en Guatemala.
</p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-secondary btn-block disabled" href="{{URL::to('cms/eventos-anteriores')}}">Ir a ECSL-Guatemala-2019</a>
    </div>
  </div>

  <!-- <hr> -->
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
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_slsv.png">
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
              Ministerio de Salud
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

    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="https://uls.edu.sv/sitioweb/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_luterana.jpg">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="https://uls.edu.sv/sitioweb/" target="_blank" class="card-logo-title">
              Universidad Luterana Salvadoreña
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="http://delfos-cloud.com/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_delfos_cloud.jpg">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://delfos-cloud.com/" target="_blank" class="card-logo-title">
              Delfos Cloud
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo card-header-logo-padding">
          <a href="http://www.ieproes.edu.sv/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_ieproes.jpg">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.ieproes.edu.sv/" target="_blank" class="card-logo-title">
              IEPROES
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="https://www.pagadito.com/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_pagadito.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="https://www.pagadito.com/" target="_blank" class="card-logo-title">
              Pagadito
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="https://es-la.facebook.com/LabCTsv/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_labCT.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="https://es-la.facebook.com/LabCTsv/" target="_blank" class="card-logo-title">
              LabCT
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="http://hackerspace.teubi.co/" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_hackerspace.png">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://hackerspace.teubi.co/" target="_blank" class="card-logo-title">
              Hacker space
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="http://www.sv" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_svnet.jpg">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="http://www.sv" target="_blank" class="card-logo-title">
              SVNet
            </a>
          </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card card-logo">
        <div class="card-header-logo">
          <a href="https://www.gridshield.com" target="_blank">
            <img class="card-img-top img-fluid" src="https://storage.googleapis.com/decimaerp/organizations/15/logo_gridshield.jpg">
          </a>
        </div>
        <div class="card-body">
          <h6 class="card-title text-center">
            <a href="https://www.gridshield.com" target="_blank" class="card-logo-title">
              Gridshield
            </a>
          </h6>
        </div>
      </div>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@parent
@stop
