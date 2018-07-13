@extends('ecsl-2018::base')

@section('container')
<style>
#chartGenero, #chartNacionalidad, #chartInstitucion {
  width: 100%;
  height: 500px;
}
</style>
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Estadísticas</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item">Evento</li>
    <li class="breadcrumb-item active">Estadísticas</li>
  </ol>

  <h3 class="font-weight-bold text-center">Género de participantes</h3>
  <!-- HTML -->
  <div id="chartGenero"></div>

  <h3 class="font-weight-bold text-center">Nacionalidad de participantes</h3>
  <!-- HTML -->
  <div id="chartNacionalidad"></div>

  <h3 class="font-weight-bold text-center mt-4">Instituciones representadas</h3>
  <!-- HTML -->
  <div id="chartInstitucion"></div>

</div>
<!-- /.container -->
@parent
@stop
