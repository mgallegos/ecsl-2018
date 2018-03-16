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
  <div class="col-md-3 col-12 mb-3">
    <!-- <h2 class="my-4">Opciones</h2> -->
    <ul class="list-group">
      <a id="dash-login" href="#" class="list-group-item {{ !empty($login)?'active':'' }}">Iniciar sesión</a>
      <a id="dash-registro" href="#" class="list-group-item {{ !empty($registro)?'active':'' }}">Registrarse</a>
      <a id="dash-pago" href="#" class="list-group-item disabled" disabled="disabled">Realizar pago</a>
      <a id="dash-transporte" href="#" class="list-group-item disabled" disabled="disabled">Solicitar transporte <i class="fa fa-plane"></i> <-> <i class="fa fa-bed"></i></a>
      <a id="dash-ponencias" href="#" class="list-group-item disabled" disabled="disabled">Administrar mis ponencias</a>
      <a id="dash-carta" href="#" class="list-group-item disabled" disabled="disabled">Generar comprob. de pago</a>
      <a id="dash-carta" href="#" class="list-group-item disabled" disabled="disabled">Generar carta de invitación</a>
      <!-- <li class="list-group-item">Mis contactos</li> -->
      <!-- <li class="list-group-item">Vestibulum at eros</li> -->
    </ul>
  </div>
  <div class="col-md-9 col-12">
    <div id="dash-login-container" class="dashboard-element" style="{{ empty($login)?'display:none;':'' }}">
      @include('ecsl-2018::dashboard/login')
    </div>
    <div id="dash-registro-container" class="dashboard-element" style="{{ empty($registro)?'display:none;':'' }}">
      @include('ecsl-2018::dashboard/registro')
    </div>
    <div id="dash-pago-container" class="dashboard-element">
    </div>
    <div id="dash-transporte-container" class="dashboard-element">
    </div>
    <div id="dash-ponencias-container" class="dashboard-element">
    </div>
  </div>
</div>
@parent
@stop
