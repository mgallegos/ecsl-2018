@extends('ecsl-2018::base')

@section('container')
<?php $fileInvertOrder = true; $fileShowUploadButton = true; $fileButtonClass = 'btn-dark'; $fileCustomUrl = URL::to('/cms/dashboard/upload');?>
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
        <a id="dash-login" href="#" class="list-group-item {{ !empty($login)?'active':'' }} {{ $loggedUserDisabledCssClass }}" {{ $loggedUserDisabledInputAttribute }} data-guest-user="{{ $loggedUserDisabledCssClass }}">Iniciar sesión</a>
        <a id="dash-pass" href="#" class="list-group-item {{ !empty($rememberToken)?'active':'' }} {{ $loggedUserDisabledCssClass }}" {{ $loggedUserDisabledInputAttribute }} data-guest-user="{{ $loggedUserDisabledCssClass }}">Recuperar contraseña</a>
        <a id="dash-registro" href="#" class="list-group-item {{ !empty($registro)?'active':'' }}">{{ $registroLabel }}</a>
        <a id="dash-pago" href="#" class="list-group-item {{ !empty($pago)?'active':'' }} {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Realizar pago</a>
        <a id="dash-transporte-from" href="#" class="list-group-item {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Solicitar transporte a su llegada <i class="fa fa-plane"></i> / <i class="fa fa-bus"></i></a>
        <a id="dash-transporte-to" href="#" class="list-group-item {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Solicitar transporte a su salida <i class="fa fa-plane"></i> / <i class="fa fa-bus"></i></a>
        <a id="dash-ponencias" href="#" class="list-group-item {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Administrar mis ponencias</a>
        <a id="dash-contactos" href="#" class="list-group-item {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Ver mis contactos</a>
        <a id="dash-carta" href="#" class="list-group-item {{ $guestUserDisabledCssClass }}" {{ $guestUserDisabledInputAttribute }} data-guest-user="{{ $guestUserDisabledCssClass }}">Generar carta de invitación</a>
        <!-- <a id="dash-comprobante" href="#" class="list-group-item disabled" disabled="disabled">Descargar comprob. de pago</a> -->
        <!-- <li class="list-group-item">Mis contactos</li> -->
        <!-- <li class="list-group-item">Vestibulum at eros</li> -->
      </ul>
    </div>
    <div class="col-xl-9 col-lg-8 col-12 dashboard-elements">
      <div id="dash-login-container" style="{{ empty($login)?'display:none;':'' }}">
        @include('ecsl-2018::dashboard/login')
      </div>
      <div id="dash-pass-container" style="{{ empty($rememberToken)?'display:none;':'' }}">
        @include('ecsl-2018::dashboard/recordar-contrasena')
      </div>
      <div id="dash-registro-container" style="{{ empty($registro)?'display:none;':'' }}">
        @include('ecsl-2018::dashboard/registro')
      </div>
      <div id="dash-pago-container" style="{{ empty($pago)?'display:none;':'' }}">
        @include('ecsl-2018::dashboard/pago')
      </div>
      <div id="dash-transporte-from-container" style="display:none;">
        @include('ecsl-2018::dashboard/transporte-from')
      </div>
      <div id="dash-transporte-to-container" style="display:none;">
        @include('ecsl-2018::dashboard/transporte-to')
      </div>
      <div id="dash-ponencias-container" style="display:none;">
        @include('ecsl-2018::dashboard/ponencia')
      </div>
      <div id="dash-contactos-container" style="display:none;">
        @include('ecsl-2018::dashboard/contactos')
      </div>
    </div>
  </div>
  {!! Form::open(array('id' => 'dash-form', 'url' => URL::to('cms/dashboard/generate-invitation-letter'), 'role'  =>  'form', 'target' => '_blank')) !!}
  {!! Form::close() !!}
</div>
@parent
@stop
