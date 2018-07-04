@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Agenda</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <!-- <li class="breadcrumb-item">Evento</li> -->
    <li class="breadcrumb-item active">Agenda</li>
  </ol>


<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="por-confirmar-tab" data-toggle="tab" href="#por-confirmar" role="tab" aria-controls="por-confirmar" aria-selected="true">Agenda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="julio-11-tab" data-toggle="tab" href="#julio-11" role="tab" aria-controls="julio-11" aria-selected="true">11 de Julio</a>
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
  <div class="tab-pane fade show active" id="por-confirmar" role="tabpanel" aria-labelledby="por-confirmar-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">Agenda</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">
              @foreach ($presentations as $index => $presentation)
                @if(empty($presentation['space_id']))
                  <div class="col-lg-3 col-sm-6">
                    <div>
                      <a href="#" onclick="showBlogPost($('#presentation-{{ $presentation['id'] }}'))">
                        <img class="rounded-circle" src="{{ $presentation['gravatar_url'] }}">
                      </a>
                    </div>
                    <p class="badge badge-warning my-2">Sin aula asignada</p>
                    <h6 class="font-weight-bold mb-2" style="text-transform: uppercase;"><a id='presentation-{{ $presentation['id'] }}' href="#" onclick="showBlogPost(this)" data-insight="{{ $presentation['id'] }}" data-title="{{ $presentation['name'] }}" data-name="{{ $presentation['firstname'] . ' ' . $presentation['lastname'] }}" data-avatar="{{ $presentation['gravatar_url'] }}" data-date="" data-content="{{ $presentation['description'] }}">{{ $presentation['name'] }}</a></h6>
                    <p class="font-weight-light font-italic">{{ $presentation['firstname'] . ' ' . $presentation['lastname'] }}</p>
                  </div>
                @endif
              @endforeach
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-11" role="tabpanel" aria-labelledby="julio-11-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">6:00 A.M. - 11:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2" style="text-transform: uppercase;">Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero" / Estaciones de autobús</p>
            <h5 class="font-weight-bold mb-2" style="text-transform: uppercase;">Recibimiento y traslado hacia hotel de participantes que lo solicitaron.</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">7:00 P.M. - 8:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">CENA</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-12" role="tabpanel" aria-labelledby="julio-12-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">7:00 A.M. - 8:00 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">DESAYUNO</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">8:00 A.M. - 8:50 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">EDIFICIO ICAS</p>
            <h5 class="font-weight-bold mb-2">REGISTRO Y ACREDITACIÓN</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">9:00 A.M. - 9:15 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">AUDITORIO "SEGUNDO MONTES, S.J."</p>
            <h5 class="font-weight-bold mb-2">APERTURA DEL X ENCUENTRO CENTROAMERICANO DE SOFTWARE LIBRE</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">9:15 A.M. - 10:00 A.M.</td>
        </tr>
        <tr>
          <td class="text-center py-4 table-info">
            <p class="badge badge-success my-2">AUDITORIO "SEGUNDO MONTES, S.J."</p>
            <h5 class="font-weight-bold mb-2" style="text-transform: uppercase;">PANEL "Software Libre: Desafíos actuales de las mujeres en tecnología"</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">10:10 A.M. - 11:10 A.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">11:20 A.M. - 12:20 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">12:20 P.M. - 1:20 P.M.</td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">LUGAR POR CONFIRMAR</p>
            <h5 class="font-weight-bold mb-2">ALMUERZO</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">1:30 P.M. - 2:30 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">2:40 P.M. - 3:40 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

          </div>
        </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">3:50 P.M. - 4:50 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">7:00 P.M. - 8:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">CENA</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-13" role="tabpanel" aria-labelledby="julio-13-tab">
    <table class="table table-striped">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">7:00 A.M. - 8:00 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">DESAYUNO</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">8:30 A.M. - 9:30 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">9:40 A.M. - 10:40 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">10:50 A.M. - 11:50 A.M.</td>
        </tr>
        <tr>
          <td class="text-center py-4 table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">12:00 P.M. - 1:20 P.M.</td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">LUGAR POR CONFIRMAR</p>
            <h5 class="font-weight-bold mb-2">ALMUERZO</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">1:30 P.M. - 2:30 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">2:40 P.M. - 3:40 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">3:50 P.M. - 4:50 P.M.</td>
        </tr>
        <tr>
          <td class="text-center table-info">
            <div class="row">

            </div>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">5:00 P.M. - 6:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">AUDITORIO "SEGUNDO MONTES, S.J."</p>
            <h5 class="font-weight-bold mb-2">CIERRE DEL X ENCUENTRO CENTROAMERICANO DE SOFTWARE LIBRE</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">7:00 P.M. - 8:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">CENA</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-14" role="tabpanel" aria-labelledby="julio-14-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">7:00 A.M. - 8:00 A.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2">CENTRO LOYOLA</p>
            <h5 class="font-weight-bold mb-2">DESAYUNO</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">9:00 A.M. - 9:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2" style="text-transform: uppercase;">Playa el Amatal</p>
            <h5 class="font-weight-bold mb-2" style="text-transform: uppercase;">Día social (opcional)</h5>
          </td>
        </tr>
        <tr>
          <td class="text-center font-weight-bold">8:00 A.M. - 8:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2" style="text-transform: uppercase;">Centro Loyola</p>
            <h5 class="font-weight-bold mb-2" style="text-transform: uppercase;">Traslado hacia Aeropuerto/Estaciones de autobús de participantes que lo solicitaron.</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tab-pane fade" id="julio-15" role="tabpanel" aria-labelledby="julio-15-tab">
    <table class="table table-striped table-bordered">
      <tbody>
        <tr>
          <td class="text-center font-weight-bold">8:00 A.M. - 8:00 P.M. </td>
        </tr>
        <tr>
          <td class="text-center py-4 table-success">
            <p class="badge badge-success my-2" style="text-transform: uppercase;">Centro Loyola</p>
            <h5 class="font-weight-bold mb-2" style="text-transform: uppercase;">Traslado hacia Aeropuerto/Estaciones de autobús de participantes que lo solicitaron.</h5>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- /.container -->
<div id='blog-post-modal' class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="padding: 0.5rem;">
        <!-- <img id='blog-post-header-image' src="{{isset($ogImage)?$ogImage:'http://placehold.it/900x300'}}" class="img-responsive img-fluid" style="display:inline;"> -->
        <h2 id='blog-post-title' class="modal-title"></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 11px;top: 5px;">
          <span aria-hidden="true">
            &times;
          </span>
        </button>
      </div>
		 	<div class="modal-body">
        <div>
          <div class="row">
          <div class="col-md-7">
            <h5 style="color:grey;font-size: 20px;">
              <img id='blog-post-author-image' class="img-circle" src="" onerror="this.src='http://www.decimaerp.com/assets/kwaai/images/anonymous.png'" style="width: 40px;"></img>
              <span>·</span>
              <span id='blog-post-author'></span>
              <!-- <span>·</span> -->
              <span id='blog-post-date'></span>
            </h5>
          </div>
          <div class="col-md-5 share-buttons">
            <div style="display:  inline-block;">
              <div id='fb-share' class="fb-share-button" data-href="" data-layout="button_count"></div>
            </div>
            <div style="display:inline-block;">
              <div id="twitter-container" class="twitter-share-button"></div>
            </div>
          </div>
          </div>
        </div>
        <div id='blog-post-content'  class="text-justify">
          Este es un texto de ejemplo!!!
        </div>
        <!-- Comments -->
        <div id='fb-comments' class="fb-comments" data-href="" data-numposts="10" width="100%"></div>
      </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-dark" data-dismiss="modal"><i class="fa fa-undo"></i> Regresar</button>
			</div>
    </div>
  </div>
</div>
@parent
@stop
