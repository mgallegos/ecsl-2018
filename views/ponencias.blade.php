@extends('ecsl-2018::base')

@section('container')
<!-- Contenido -->
<div class="container">

<br>
<!-- Barra de Ubicacion -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Ponencias
    </li>
  </ol>


  <div class="row">
    @for($i = 1; $i <= 3; $i++)
    <!--Ponencia 1-->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card text-center">
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
          <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary" data-toggle="lightbox">Ver video</a>
          <a href="https://www.youtube.com/watch?v=gY9b9RMMqCU" class="btn btn-secondary">Más información</a>
        </div>
      </div>
    </div>
    @endfor

<!-- /.row -->
</div>

<!-- /.container -->
</div>
@parent
@stop
