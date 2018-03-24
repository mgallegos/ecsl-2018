<div class="card form-container-followed-by-grid-section">
  <h4 class="card-header">Solicitar transporte</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'trans-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <!--Pickup Datetime -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-pickup-datetime">Fecha y Hora</label>
                {!! Form::datetime('trans-pickup-datetime', array('class' => 'form-control', 'data-mg-required' => '', 'data-default-value' => ''),null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>

            <!--Transport Number-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-transport-number">Empresa y número de vuelo/autobús</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-building-o"></i></div>
                  </span>
                  {!! Form::text('trans-transport-number', null, array('id'=>'trans-transport-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Point of Origin -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-origin">Origen</label>
                {!! Form::select('trans-origin', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'transportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <!--Point of Destination -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-destination">Destino</label>
                {!! Form::select('trans-destination', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'transportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>
          </div>

          <div class="row">
            <!--Status -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-status">Estado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tasks"></i></div>
                  </span>
                  {!! Form::text('trans-status', null, array('id'=>'trans-status', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Assigned Transport -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-assigned-transport">Transporte asignado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-car"></i></div>
                  </span>
                  {!! Form::text('trans-assigned-transport', null, array('id'=>'trans-assigned-transport', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Responsable User Name-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-dependant">Persona a cargo</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('trans-responsable-user-name', null, array('id'=>'trans-responsable-user-name', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-contact">Número de contacto</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('trans-contact', null, array('id'=>'trans-contact', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <!-- Observation -->
          <div class="form-group mg-hm">
            <label for="trans-remark">Observaciones del viaje</label>
              {!! Form::textareacustom('trans-remark', 3, 500, array('class' => 'form-control')) !!}
          </div>

        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
<div class="section-header btn-toolbar toolbar-preceded-by-form-section" role="toolbar" style="background-color: rgba(0,0,0,.03)">
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
</div>
