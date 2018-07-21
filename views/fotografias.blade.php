@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Galeria de fotos</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <!-- <li class="breadcrumb-item">Evento</li> -->
    <li class="breadcrumb-item active">Fotografias</li>
  </ol>

  <div class="collage">
    @for ($i = 1; $i < 93; $i++)
      @if ($i < 10)
        <a href="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00'.$i.'.jpg'}}" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00'.$i.'.jpg'}}" class="img-fluid collage-img">
        </a>
      @else
        <a href="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0'.$i.'.jpg'}}" data-toggle="lightbox" data-gallery="gallery-one">
            <img src="{{'https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0'.$i.'.jpg'}} " class="img-fluid collage-img">
        </a>
      @endif
    @endfor
    <a href="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018.jpg" data-toggle="lightbox" data-gallery="gallery-one">
        <img src="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018.jpg" class="img-fluid collage-img">
    </a>
    <a href="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018_1.jpg" data-toggle="lightbox" data-gallery="gallery-one">
        <img src="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018_1.jpg" class="img-fluid collage-img">
    </a>

  </div>

<br><br>
</div>
<!-- /.container -->
@parent
@stop
