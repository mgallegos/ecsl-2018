@extends('ecsl-2018::base')

@section('container')
<!-- Contenido -->
<div class="container">

<br><br>
<!-- Barra de Ubicacion -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Eventos Anteriores
    </li>
  </ol>


  <div class="row">
    <!--ECSL 2017-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card ">
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
    <!--ECSL 2016-->
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
    <!--ECSL 2015-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="https://ecsl2015.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">VII ECSL 2015 <br> San Pedro Sula, Honduras</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2015.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=zbNrq0QyLXE&feature=youtu.be" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <!--ECSL 2014-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="http://ecsl2014.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2014.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">VI ECSL 2014 <br> Chitré, Panamá</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2014.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <a href="https://www.youtube.com/watch?v=zbNrq0QyLXE&feature=youtu.be" class="btn btn-secondary" data-toggle="lightbox">Ver video</a>
        </div>
      </div>
    </div>
    <!--ECSL 2013-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="http://ecsl2013.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2013.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">V ECSL 2013 <br> San Ignacio, Belize</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2013.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <!--ECSL 2012-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="https://ecsl2012.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2012.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">IV ECSL 2012 <br> Ciudad de Guatemala, Guatemala</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2012.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <!--ECSL 2011-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="https://ecsl2011.softwarelibre.ca/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2011.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">III ECSL 2011 <br> Suchitoto, El Salvador</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://ecsl2011.softwarelibre.ca/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>
    <!--ECSL 2010-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <a href="https://www.youtube.com/watch?v=LBDMKwzgOWs" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2010.jpg" class="card-img-top img-fluid">
        </a>
        <!-- <a href="http://encuentro.softwarelibre.ca/eventos/ii-ecsl-2010/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2010.jpg" class="card-img-top img-fluid">
        </a> -->
        <div class="card-body">
          <h5 class="card-title text-center">II ECSL 2010 <br> Puntarenas, Costa Rica</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://encuentro.softwarelibre.ca/eventos/ii-ecsl-2010/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <a href="https://www.youtube.com/watch?v=LBDMKwzgOWs" class="btn btn-secondary" data-toggle="lightbox">Ver video</a>
        </div>
      </div>
    </div>
    <!--ECSL 2009-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="http://i3.ytimg.com/vi/gY9b9RMMqCU/mqdefault.jpg" class="card-img-top img-fluid">
        </a> -->
        <a href="http://encuentro.softwarelibre.ca/eventos/i-ecsl-2009/" target="_blank">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/ecsl_2009.jpg" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <h5 class="card-title text-center">I ECSL 2009 <br> Estelí, Nicaragua</h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <a href="http://encuentro.softwarelibre.ca/eventos/i-ecsl-2009/" target="_blank" class="btn btn-secondary">Ver sitio web</a>
          <!-- <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a> -->
        </div>
      </div>
    </div>

<!-- /.row -->
</div>

<!-- /.container -->
</div>
@parent
@stop
