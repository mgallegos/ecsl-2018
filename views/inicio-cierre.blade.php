@extends('ecsl-2018::base')
@section ('global-js')
  var prev_id;
@stop
@section ('counter-js')

$(window).bind('scroll', function() {
    if ( Math.abs($('#facts').offset().top) + $('#facts').height() + $('#facts').offset().top >= $('#facts').outerHeight() ) {
      $('.counter').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({ countNum: $this.text()}).animate({
          countNum: countTo
        },

        {

          duration: 1000,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);

          }

        });
      });
    }
});

@stop

@section('container')


<!-- Header -->
<header class="masthead wow animated fadeInUp">
  <div class="container ">
      <div class="intro-heading text-uppercase"><strong>X Encuentro Centroamericano de Software Libre</strong></div>
      <div class="intro-lead-in font-weight-bold">El X Encuentro Centroamericano de Software Libre (ECSL) se realizó los días 12, 13 y 14 de julio del 2018 en la ciudad de San Salvador, El Salvador.</div>
  </div>
</header>

<section id="facts"  class="">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <header class="">
        <!-- <h2 class="display-5 text-center text-white shadow">Resumen del Evento</h2><br> -->
        <p class="lead text-center text-white wow animated fadeInUp">El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado desde el año 2009 por y para la comunidad  de Software Libre Centroamérica (SLCA). El ECSL es una reunión de activistas e integrantes de comunidades y grupos de
          usuarios/as que sirve como punto de encuentro y espacio de articulación, educación, coordinación e intercambio de ideas para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y desarrollo del Software Libre en
          la región.</p>
      </header>

      <div class="row counters">
        <div class="col-lg-3 col-6 text-center wow animated fadeInLeft">
          <span class="counter text-success" data-count="130">0</span>
          <p class="lead text-center text-white shadow">Participantes</p>
        </div>

        <div class="col-lg-3 col-6 text-center wow animated fadeInLeft">
          <span class="counter text-success" data-count="56">0</span>
          <p class="lead text-center text-white shadow">Ponencias</p>
        </div>

        <div class="col-lg-3 col-6 text-center wow animated fadeInRight">
          <span class="counter text-success" data-count="39">0</span>
          <p class="lead text-center text-white shadow">Instituciones</p>
        </div>

        <div class="col-lg-3 col-6 text-center wow animated fadeInRight">
          <span class="counter text-success" data-count="7">0</span>
          <p class="lead text-center text-white shadow">Paises</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- #facts -->

<!-- Page Content -->
<div class="container wow animated fadeInUp" data-wow-delay="0.5s">
  <h2 class="text-center display-5">Ponencias</h2><br>
  <div class="row">
    @for($i = 1; $i <= 3; $i++)
    <!--Ponencia 1-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card text-center" >
        <div class="card-header font-weight-bold">
          Taller "Desarrollo de videojuegos para la web"
        </div>

        <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" data-toggle="lightbox" data-gallery="youtubevideos">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" class="card-img-top img-fluid">
        </a>

        <div class="card-body">

              <!-- <img class="btn rounded-circle" src="https://s.gravatar.com/avatar/47dc454dc555e624caf972e9ecb3a67c?s=80"> -->


              <h5 class="card-title">Alvaro García</h5>
              <!-- <small><<a class="card-subtitle" href="mailto:alvarogarcia1010@gmail.com">alvarogarcia1010@gmail.com</a>></small> -->
              <h6 class="card-subtitle mb-2 text-muted">DecimaERP / El Salvador</h6>
        </div>
        <div class="card-footer">
          <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-success" data-toggle="lightbox">Ver video</a>
          <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-success">Más información</a>
        </div>
      </div>
    </div>
    @endfor
  </div>

  <!-- /.row -->
  <div class="row mb-4 wow animated fadeInUp" data-wow-delay="0.5s">
    <div class="col-md-8">
      <p class="text-center">
        El 10mo ECSL se llevó a cabo durante las fechas 12, 13, 14 de Julio del 2018. Ahora la sapa pasa a ser de nuestros hermanos guatemantecos en el 11vo ECSL en Guatemala.
      </p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-success btn-block" href="{{URL::to('cms/ponencias')}}">Ver todas las ponencias</a>
    </div>
  </div>

  <!-- <hr> -->
</div>
<!-- /.container -->

<!--Fotografias-->
<section class="about-us section-padding wow animated fadeInUp" data-wow-delay="0.5s">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="text-center display-5 text-white shadow">Fotografías</h2><br>
      <div class="collage">
        @php ($galeria = array(33,70,44,1,18,24,29,45,36,57,82))
        @foreach ($galeria as $i)
          @if ($i < 10)
            <a href="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00'.$i.'.jpg'}}" data-toggle="lightbox" data-gallery="gallery-one">
                <img src="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00'.$i.'.jpg'}}" class="img-fluid collage-img">
            </a>

          @else
            <a href="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0'.$i.'.jpg'}}" data-toggle="lightbox" data-gallery="gallery-one">
                <img src="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0'.$i.'.jpg'}} " class="img-fluid collage-img">
            </a>
          @endif
        @endforeach
      </div>
      <br><br>
      <!-- /.row -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p class="text-center text-white">
            El 10mo ECSL se llevó a cabo durante las fechas 12, 13, 14 de Julio del 2018. Ahora la sapa pasa a ser de nuestros hermanos guatemantecos en el 11vo ECSL en Guatemala.
          </p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-success btn-block " href="{{URL::to('cms/fotografias')}}">Ver todas las fotografías</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Participantes -->
<div class="container">
  <h2 class="text-center display-5 wow animated fadeInUp" data-wow-delay="0.5s">Estadísticas</h2><br>
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.5s">
      <a href="https://storage.googleapis.com/decimaerp/organizations/15/estadisticaGenero.jpg" data-toggle="lightbox" data-gallery="estadistica">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/estadisticaGenero.jpg" class="img-fluid">
      </a>
    </div>
    <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.5s">
      <a href="https://storage.googleapis.com/decimaerp/organizations/15/estadisticaInsitucion1.png" data-toggle="lightbox" data-gallery="estadistica">
          <img src="https://storage.googleapis.com/decimaerp/organizations/15/estadisticaInsitucion1.png" class="img-fluid">
      </a>
    </div>
  </div>
  <br><br>
  <!-- /.row -->
  <div class="row mb-4 wow animated fadeInUp" data-wow-delay="0.5s">
    <div class="col-md-8">
      <p class="text-center">
        El 10mo ECSL se llevó a cabo durante las fechas 12, 13, 14 de Julio del 2018. Ahora la sapa pasa a ser de nuestros hermanos guatemantecos en el 11vo ECSL en Guatemala.
      </p>
    </div>
    <div class="col-md-4">
      <a class="btn btn-lg btn-success btn-block " href="{{URL::to('cms/estadisticas')}}">Ver estadísticas</a>
    </div>
  </div>
</div>


<!--Estadisticas-->
<section class="about-us section-padding wow animated fadeInUp" data-wow-delay="0.5s">
  <div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container">
      <h2 class="text-center display-5 text-white shadow">Participantes</h2><br>
      @foreach ($participants as $index => $participant)
      <img class="rounded-circle" data-toggle="tooltip" data-placement="top" data-html="true" title="<p class='font-weight-normal mb-0' style='font-size:10px;'>{{ $participant['firstname'] . ' ' . $participant['lastname'] }}<br>{{$usersData[$participant['id']]['country'] }}</p>" src="{{ $participant['gravatar_url'] }}" style="margin-top: 10px;">
      @endforeach
      <br><br>
    </div>
  </div>
</section>

<!-- Patrocinadores -->
<div class="container wow animated fadeInUp" data-wow-delay="0.5s">

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
@parent
@stop
