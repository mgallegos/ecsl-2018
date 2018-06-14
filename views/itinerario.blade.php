@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Itinerario de Evento</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Itinerario de Evento</li>
  </ol>


<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="julio-11-tab" data-toggle="tab" href="#julio-11" role="tab" aria-controls="julio-11" aria-selected="false">11 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-12-tab" data-toggle="tab" href="#julio-12" role="tab" aria-controls="julio-12" aria-selected="true">12 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-13-tab" data-toggle="tab" href="#julio-13" role="tab" aria-controls="julio-13" aria-selected="false">13 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-14-tab" data-toggle="tab" href="#julio-14" role="tab" aria-controls="julio-14" aria-selected="false">14 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-15-tab" data-toggle="tab" href="#julio-15" role="tab" aria-controls="julio-15" aria-selected="false">15 de Julio</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="julio-11" role="tabpanel" aria-labelledby="julio-11-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class= "text-center" width ="150">Horario</th>
          <th scope="col" class= "text-center">Actividades (Bienvenida)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class= "text-center"  width ="250">8:00 A.M. - 8:00 P.M. </td>
          <td>Recibimiento en aeropuertos y estaciones de autobus y traslado hacia hotel de participantes que lo solicitaron.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-12" role="tabpanel" aria-labelledby="julio-12-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class= "text-center" width ="150">Horario</th>
          <th scope="col" class= "text-center">Actividades (Dia #1)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class= "text-center"  width ="250">9:00 A.M. - 9:30 A.M. </td>
          <td>Bienvenida y apertura del X Encuentro Centroamericano de Software Libre 2018.</td>
        </tr>
        <tr>
          <td class= "text-center" width ="250">9:30 A.M. - 10:00 A.M.</td>
          <td>Saludo de los panelistas</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" >10:10 A.M. - 12:00 M.D.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" >12:10 M.D. - 1:20 P.M.</td>
          <td>Receso para Almuerzo.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 1:30 P.M. - 2:30 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 2:40 P.M. - 3:40 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 3:50 P.M. - 4:50 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-13" role="tabpanel" aria-labelledby="julio-13-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class= "text-center" width ="150">Horario</th>
          <th scope="col" class= "text-center">Actividades (Día #2)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class= "text-center"  width ="250">8:30 A.M. - 9:30 A.M. </td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center" width ="250">9:40 A.M. - 10:40 A.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" >10:50 A.M. - 11:50 M.D.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" >12:10 M.D. - 1:20 P.M.</td>
          <td>Receso para Almuerzo.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 1:30 P.M. - 2:30 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 2:40 P.M. - 3:40 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 3:50 P.M. - 4:50 P.M.</td>
          <td>Charlas y Talleres simultaneos.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250" > 5:00 P.M. - 6:00 P.M.</td>
          <td>Cierre del X Encuentro Centroamericano de Software Libre 2018.</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-14" role="tabpanel" aria-labelledby="julio-14-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class= "text-center" width ="150">Horario</th>
          <th scope="col" class= "text-center">Actividades (Dia Social)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class= "text-center"  width ="250">8:00 A.M. - 8:00 P.M. </td>
          <td>Traslado hacia aeropuertos y estaciones de autobus de los participantes que lo solicitaron.</td>
        </tr>
        <tr>
          <td class= "text-center"  width ="250">8:00 A.M. - 4:00 P.M. </td>
          <td>Día social en la playa El Amatal (Opcional)</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-15" role="tabpanel" aria-labelledby="julio-15-tab">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class= "text-center" width ="150">Horario</th>
          <th scope="col" class= "text-center">Actividades (Despedida)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class= "text-center"  width ="250">8:00 A.M. - 8:00 P.M. </td>
          <td>Traslado hacia aeropuertos y estaciones de autobus de los participantes que lo solicitaron.</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<br><br>
</div>
<!-- /.container -->
@parent
@stop
