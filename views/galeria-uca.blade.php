@extends('ecsl-2018::base')

@section('container')

<div class="container">
  <br>
  <!-- Barra de Ubicacion -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Galeria UCA</li>
  </ol>

  <div class="row ">
    <div class="col-md-12">
        <div class="row mb-4">
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-2 px-1">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid">
            </a>
        </div>

        <div class="row mb-4">
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-4">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/costarica_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-4">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/nicaragua_thumbnail.jpg" class="img-fluid">
            </a>
            <a href="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" data-toggle="lightbox" data-gallery="gallery-uca" class="col-sm-4">
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/honduras_thumbnail.jpg" class="img-fluid">
            </a>
        </div>
        <div class="mb-5">
          @include('ecsl-2018::paquetes-participacion')
        </div>

    </div>
  </div>
</div>

@parent
@stop
