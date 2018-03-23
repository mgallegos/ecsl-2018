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
  <div class="col-xl-3 col-lg-4 col-12 mb-3">
    <!-- <h2 class="my-4">Opciones</h2> -->
    <ul class="list-group dashboard-list-group">
      <a id="dash-login" href="#" class="list-group-item {{ !empty($login)?'active':'' }}">Iniciar sesión</a>
      <a id="dash-registro" href="#" class="list-group-item {{ !empty($registro)?'active':'' }}">Registrarse</a>
      <a id="dash-pago" href="#" class="list-group-item disabled" disabled="disabled">Realizar pago</a>
      <a id="dash-transporte" href="#" class="list-group-item">Solicitar transporte <i class="fa fa-plane"></i> <-> <i class="fa fa-bed"></i></a>
      <a id="dash-ponencias" href="#" class="list-group-item">Administrar mis ponencias</a>
      <a id="dash-carta" href="#" class="list-group-item disabled" disabled="disabled">Generar carta de invitación</a>
      <a id="dash-comprobante" href="#" class="list-group-item disabled" disabled="disabled">Descargar comprob. de pago</a>
      <!-- <li class="list-group-item">Mis contactos</li> -->
      <!-- <li class="list-group-item">Vestibulum at eros</li> -->
    </ul>
  </div>
  <div class="col-xl-9 col-lg-8 col-12 dashboard-elements">
    <div id="dash-login-container" style="{{ empty($login)?'display:none;':'' }}">
      @include('ecsl-2018::dashboard/login')
    </div>
    <div id="dash-registro-container" style="{{ empty($registro)?'display:none;':'' }}">
      @include('ecsl-2018::dashboard/registro')
    </div>
    <div id="dash-pago-container">
    </div>
    <div id="dash-transporte-container" style="display:none;">
      @include('ecsl-2018::dashboard/transporte')
    </div>
    <div id="dash-ponencias-container" style="display:none;">
      @include('ecsl-2018::dashboard/ponencia')
    </div>
  </div>
</div>
@parent
@stop
