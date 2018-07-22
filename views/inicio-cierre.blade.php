@extends('ecsl-2018::base')

@section('container')


<!-- Header -->
<header class="masthead">
  <div class="container ">
      <div class="intro-heading text-uppercase"><strong>X Encuentro Centroamericano de Software Libre</strong></div>
      <div class="intro-lead-in font-weight-bold">El X Encuentro Centroamericano de Software Libre (ECSL) fue realizado los dias 12, 13 y 14 de julio del 2018 en la ciudad de San Salvador, El Salvador.</div>
  </div>
</header>

<!--Acerca de-->
<section class="">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="display-5 text-center text-white shadow">Resumen del Evento</h2><br>
      <div class="row">
        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                  <i class="fa fa-users main-icons" aria-hidden="true"></i> <h3>Participantes</h3>
                </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                <i class="fa fa-picture-o main-icons" aria-hidden="true"></i><h3>Galeria</h3>
              </a>
        </div>


        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/logistica')}}" class="text-white">
                <i class="fa fa-video-camera main-icons" aria-hidden="true"></i><h3>Ponencias</h3>
                </a>
        </div>

        <div class="col-12 col-sm-6 text-center col-md-3">
          <a href="{{URL::to('cms/estadisticas')}}" class="text-white">
              <i class="fa fa-bar-chart main-icons" aria-hidden="true"></i><h3>Estadísticas</h3>
            </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Page Content -->
<div class="container">
  <h2 class="text-center display-5">Ponencias</h2><br>
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
          <h5 class="card-title text-center">VIII ECSL 2016 <br> Managua, Nicaragua</h5>
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
        <a href="http://ecsl2015.softwarelibre.ca/" target="_blank">
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

<!--Resumen del evento-->
<section class="about-us section-padding">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="text-center display-5 text-white shadow">Galeria del evento</h2><br>
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
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@parent
@stop
