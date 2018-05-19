@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Intinerario de Evento</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Intinerario de Evento</li>
  </ol>

  <div class="card-deck">

    <!-- Dia #1-->
    <div class="card card border-dark">
      <h3 class="card-header text-center">12 de Julio</h3>
      <div class="card-body m-0 px-0 pb-0">
        <h2 class="text-center font-weight-bold mb-4">Dia #1</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Actividad #1</li>
          <li class="list-group-item">Actividad #2</li>
          <li class="list-group-item">Actividad #3</li>
          <li class="list-group-item">Actividad #4</li>
          <li class="list-group-item">Actividad #5</li>
        </ul>
      </div>
    </div>

    <!-- Dia #2-->
    <div class="card card border-primary">
      <h3 class="card-header text-center">13 de Julio</h3>
      <div class="card-body m-0 px-0 pb-0">
        <h2 class="text-center font-weight-bold mb-4">Dia #2</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Actividad #1</li>
          <li class="list-group-item">Actividad #2</li>
          <li class="list-group-item">Actividad #3</li>
          <li class="list-group-item">Actividad #4</li>
          <li class="list-group-item">Actividad #5</li>
        </ul>
      </div>
    </div>

    <!-- Dia #2-->
    <div class="card card border-success">
      <h3 class="card-header text-center">14 de Julio</h3>
      <div class="card-body m-0 px-0 pb-0">
        <h2 class="text-center font-weight-bold mb-4">Dia #3</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Actividad #1</li>
          <li class="list-group-item">Actividad #2</li>
          <li class="list-group-item">Actividad #3</li>
          <li class="list-group-item">Actividad #4</li>
          <li class="list-group-item">Actividad #5</li>
        </ul>
      </div>
    </div>

  </div>

<br><br>

<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="uno-tab" data-toggle="tab" href="#uno" role="tab" aria-controls="uno" aria-selected="true">12 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="dos-tab" data-toggle="tab" href="#dos" role="tab" aria-controls="dos" aria-selected="false">13 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tres-tab" data-toggle="tab" href="#tres" role="tab" aria-controls="tres" aria-selected="false">14 de Julio</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="uno" role="tabpanel" aria-labelledby="uno-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Actividades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Actividad #1</td>
        </tr>
        <tr>
          <td>Actividad #2</td>
        </tr>
        <tr>
          <td>Actividad #3</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="dos" role="tabpanel" aria-labelledby="dos-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Actividades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Actividad #1</td>
        </tr>
        <tr>
          <td>Actividad #2</td>
        </tr>
        <tr>
          <td>Actividad #3</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="tres" role="tabpanel" aria-labelledby="tres-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Actividades</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Actividad #1</td>
        </tr>
        <tr>
          <td>Actividad #2</td>
        </tr>
        <tr>
          <td>Actividad #3</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<br><br>

<div class="row bg-light font-weight-bold text-center align-middle" >
  <div class="col-md-12 border p-3">12 de Julio</div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #1</div>
  <div class="col-11 align-middle border-top border-right py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #2</div>
  <div class="col-11 align-middle border-top border-right  py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2"> #3</div>
  <div class="col-11 align-middle border-top border-right py-2 mb-0">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row bg-light font-weight-bold text-center align-middle" >
  <div class="col-md-12 border p-3">13 de Julio</div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #1</div>
  <div class="col-11 align-middle border-top border-right py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #2</div>
  <div class="col-11 align-middle border-top border-right  py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2"> #3</div>
  <div class="col-11 align-middle border-top border-right py-2 mb-0">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row bg-light font-weight-bold text-center align-middle" >
  <div class="col-md-12 border p-3">14 de Julio</div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #1</div>
  <div class="col-11 align-middle border-top border-right py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2 mb-0"> #2</div>
  <div class="col-11 align-middle border-top border-right  py-2">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>
<div class="row">
  <div class="col-1 align-middle text-center border-top border-right py-2"> #3</div>
  <div class="col-11 align-middle border-top border-right py-2 mb-0">
    <p class="text-justify mb-0">Descripcion de Actividad</p>
  </div>
</div>

<br><br>
</div>
<!-- /.container -->
@parent
@stop
