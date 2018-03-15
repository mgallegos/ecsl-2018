@extends('ecsl-2018::base')

@section('container')
<style>
</style>

<div class="container">

<br>
<!-- Barra de Ubicacion -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
  </li>
  <li class="breadcrumb-item active">Dashboard
  </li>
</ol>

<div class="row">
  <div class="col-md-3 col-12">
    <!-- <h2 class="my-4">Opciones</h2> -->
    <ul class="list-group">
      <a href="#" class="list-group-item active">Inicio de sesión / Registro</a>
      <a href="#" class="list-group-item disabled" disabled="disabled">Realizar pago</a>
      <a href="#" class="list-group-item disabled" disabled="disabled">Solicitar transporte <i class="fa fa-plane"></i> <-> <i class="fa fa-bed"></i></a>
      <a href="#" class="list-group-item disabled" disabled="disabled">Administrar mis ponencias</a>
      <a href="#" class="list-group-item disabled" disabled="disabled">Generar carta de invitación</a>
      <!-- <li class="list-group-item">Mis contactos</li> -->
      <!-- <li class="list-group-item">Vestibulum at eros</li> -->
    </ul>
  </div>
  <div class="col-md-9 col-12">
    <div id='login'>
      @include('ecsl-2018::login')
      @include('ecsl-2018::registro')
    </div>
  </div>
</div>
@parent
@stop
