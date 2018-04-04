<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Solicitar transporte hacia aeropuerto</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'trans-to-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para poder solicitar el traslado al finalizar el ECSL-2018.</h6>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <!--Pickup Datetime -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-pickup-datetime">Fecha y Hora</label>
                {!! Form::datetime('trans-to-pickup-datetime', array('class' => 'form-control', 'data-mg-required' => '', 'data-default-value' => ''),null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>

            <!--Transport Number-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-trans-toport-number">Empresa y número de vuelo/autobús</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-building-o"></i></div>
                  </span>
                  {!! Form::text('trans-to-trans-toport-number', null, array('id'=>'trans-to-trans-toport-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Point of Origin -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-origin">Origen</label>
                {!! Form::select('trans-to-origin', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'trans-toportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-to-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <!--Point of Destination -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-destination">Destino</label>
                {!! Form::select('trans-to-destination', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'trans-toportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-to-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>
          </div>

          <div class="row">
            <!--Status -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-status">Estado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tasks"></i></div>
                  </span>
                  {!! Form::text('trans-to-status', null, array('id'=>'trans-to-status', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Assigned Transport -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-assigned-trans-toport">Transporte asignado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-car"></i></div>
                  </span>
                  {!! Form::text('trans-to-assigned-trans-toport', null, array('id'=>'trans-to-assigned-trans-toport', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Responsable User Name-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-dependant">Persona a cargo</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('trans-to-responsable-user-name', null, array('id'=>'trans-to-responsable-user-name', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-contact">Número de contacto</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('trans-to-contact', null, array('id'=>'trans-to-contact', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <!-- Observation -->
          <div class="form-group mg-hm">
            <label for="trans-to-remark">Observaciones del viaje</label>
              {!! Form::textareacustom('trans-to-remark', 3, 500, array('class' => 'form-control')) !!}
          </div>

        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>


<!-- <div class="section-header btn-toolbar toolbar-preceded-by-form-section" role="toolbar" style="background-color: rgba(0,0,0,.03)">
  <div id="lqp-btn-group-1" class="btn-group mr-2" role="group">
  	{!! Form::button('<i class="fa fa-save"></i> Save', array('id' => 'lqp-btn-save', 'class' => 'btn btn-outline-secondary lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Save book')) !!}
  	{!! Form::button('<i class="fa fa-refresh"></i> Refresh', array('id' => 'lqp-btn-refresh', 'class' => 'btn btn-outline-secondary lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Refresh grid data')) !!}
  </div>
  <div id="lqp-btn-group-2" class="btn-group" role="group">
  	{!! Form::button('<i class="fa fa-edit"></i> Edit', array('id' => 'lqp-btn-edit', 'class' => 'btn btn-outline-secondary lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Edit book')) !!}
  	{!! Form::button('<i class="fa fa-minus"></i> Delete', array('id' => 'lqp-btn-delete', 'class' => 'btn btn-outline-secondary lqp-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Delete book')) !!}
  </div>
</div>
<div class="app-mg-grid app-responsive-grid mb-3">
{!!
GridRender::setGridId("BookGrid1")
  ->enablefilterToolbar(true, false)
  ->hideXlsExporter()
  ->hideCsvExporter()
  ->setGridOption('url', URL::to('/cms/open-source-development/laravel-jqgrid/grid3'))
  ->setGridOption('rowNum', 10)
  ->setGridOption('rownumbers', true)
  ->setGridOption('width', 1000)
  ->setGridOption('height', 'auto')
  ->setGridOption('rowList',array(10,20,30))
  //->setGridOption('caption','Books')
  ->setGridOption('viewrecords',true)
  //->setGridEvent('onSelectRow', 'onSelectRowEvent2')
  //->setGridEvent('onSelectRow', 'onBeforeRequest')
  ->addColumn(array('index' => 'id', 'hidden' => true))
  ->addColumn(array('label' => 'Name', 'index'=>'name'))
  ->addColumn(array('label' => 'Description','index' => 'description'))
  ->addColumn(array('label' => 'Author','index' => 'author'))
  ->renderGrid()
!!}
</div> -->
