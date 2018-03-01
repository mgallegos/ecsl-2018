@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Encabezado de pagina -->
  <h1 class="mt-4 mb-3">Preguntas Frecuentes</h1>

  <!-- Barra de Ubicacion -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">FAQ</li>
  </ol>


  <!-- Preguntas Frecuentes -->
  <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
    <!-- Pregunta #1 -->
    <div class="card">
      <div class="card-header" role="tab" id="One">
        <h5 class="mb-0">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Qué es ECSL?</a>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="One">
        <div class="card-body">
          El Encuentro Centroamericano de Software Libre, es un evento organizado por la comunidad Software Libre Centroamérica
          (SLCA) y se trata de un espacio de articulación, coordinación e intercambio de ideas entre las comunidades de Software
          Libre que integran la SLCA para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y
          desarrollo del Software Libre en la región.
        </div>
      </div>
    </div>

    <!-- Pregunta #2 -->
    <div class="card">
      <div class="card-header" role="tab" id="Two">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">¿En qué fecha se realizará el ECSL?</a>
        </h5>
      </div>

      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="Two">
        <div class="card-body">
          El Encuentro Centroamericano de Software Libre 2018 se realizará...
        </div>
      </div>
    </div>

    <!-- Pregunta #3 -->
    <div class="card">
      <div class="card-header" role="tab" id="Three">
        <h5 class="mb-0">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThee" aria-expanded="false" aria-controls="collapseOne">¿Cuales serán los temas a tratar en el evento?</a>
        </h5>
      </div>

      <div id="collapseThee" class="collapse" role="tabpanel" aria-labelledby="Thee">
        <div class="card-body">
          Holas...
        </div>
      </div>
    </div>


  </div>

</div>
<!-- /.container -->
@parent
@stop
