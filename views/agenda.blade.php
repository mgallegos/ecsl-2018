@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Agenda del Evento</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Agenda del Evento</li>
  </ol>


<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="julio-12-tab" data-toggle="tab" href="#julio-12" role="tab" aria-controls="julio-12" aria-selected="true">12 de Julio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-13-tab" data-toggle="tab" href="#julio-13" role="tab" aria-controls="julio-13" aria-selected="false">13 de Julio</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="julio-12" role="tabpanel" aria-labelledby="julio-12-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class= "text-center">8:30 A.M. - 8:50 A.M. </td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Edificio ICAS</p>
            <h5 class="font-weight-bold mb-2">REGISTRO Y ACREDITACION</h5>
          </td>
        </tr>
        <tr>
          <td class= "text-center">9:00 A.M. - 9:30 A.M. </td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Auditorio "Segundo Montes, S.J."</p>
            <h5 class="font-weight-bold mb-2">APERTURA DEL X ENCUENTRO CENTROAMERICANO DE SOFTWARE LIBRE</h5>
          </td>
        </tr>
        <tr>
          <td class= "text-center">9:30 A.M. - 10:00 A.M.</td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Auditorio "Segundo Montes, S.J."</p>
            <h5 class="font-weight-bold mb-2">DISCURSO DE PANELISTAS</h5>
          </td>
        </tr>
        <tr>
          <td class= "text-center">10:10 A.M. - 12:00 M.D.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h6 class="font-weight-bold mb-2">DESARROLLO WEB</h6>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center" >12:10 M.D. - 1:20 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Por Confirmar</p>
            <h5 class="font-weight-bold mb-2">ALMUERZO</h5>
          </td>
        </tr>
        <tr>
          <td class= "text-center" > 1:30 P.M. - 2:30 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center" > 2:40 P.M. - 3:40 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center" > 3:50 P.M. - 4:50 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
      </tbody>

    </table>
  </div>
  <div class="tab-pane fade" id="julio-13" role="tabpanel" aria-labelledby="julio-13-tab">
    <table class="table table-striped">
      <tbody>
        <tr>
          <td class= "text-center">8:30 A.M. - 9:30 A.M. </td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h6 class="font-weight-bold mb-2">DESARROLLO WEB</h6>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
          </td>
        </tr>
        <tr>
          <td class= "text-center">9:40 A.M. - 10:40 A.M. </td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h6 class="font-weight-bold mb-2">DESARROLLO WEB</h6>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
          </td>
        </tr>
        <tr>
          <td class= "text-center">10:50 A.M. - 11:50 A.M.</td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h6 class="font-weight-bold mb-2">DESARROLLO WEB</h6>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
          </td>
        </tr>
        <tr>
          <td class= "text-center" >12:10 M.D. - 1:20 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Por Confirmar</p>
            <h5 class="font-weight-bold mb-2">ALMUERZO</h5>
          </td>
        </tr>
        <tr>
          <td class= "text-center" > 1:30 P.M. - 2:30 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center" > 2:40 P.M. - 3:40 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center" > 3:50 P.M. - 4:50 P.M.</td>
        </tr>
        <tr>
          <td class= "text-center table-info">
            <div class="row">
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
              <div class="col-md-3">
                <p class="badge badge-success my-2">ICAS-32A</p>
                <h5 class="font-weight-bold mb-2">DESARROLLO WEB</h5>
                <p class="font-weight-light font-italic">Alvaro Garcia</p>
              </div>
          </div>
        </td>
        </tr>
        <tr>
          <td class= "text-center">5:00 P.M. - 6:00 P.M. </td>
        </tr>
        <tr>
          <td class= "text-center py-4 table-success">
            <p class="badge badge-success my-2">Auditorio "Segundo Montes, S.J."</p>
            <h5 class="font-weight-bold mb-2">CIERRE DEL X ENCUENTRO CENTROAMERICANO DE SOFTWARE LIBRE</h5>
          </td>
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
