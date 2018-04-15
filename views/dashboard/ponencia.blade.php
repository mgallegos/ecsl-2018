<div class="card form-container-followed-by-grid-section">
  <h4 class="card-header">Administrar ponencias</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pon-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para poder proponer una o más ponencias.</h6>
      </div>
      <div class="row">
        <!--Name-->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-name">Nombre</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user"></i></div>
              </span>
              {!! Form::text('pon-name', null, array('id'=>'pon-name', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              {!! Form::hidden('pon-id', null, array('id' => 'pon-id')) !!}
              {!! Form::hidden('pon-insight', null, array('id' => 'pon-insight')) !!}
            </div>
          </div>
        </div>
        <!--Type -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-type">Tipo</label>
            {!! Form::select('pon-type', array('Charla' => 'Charla','Taller' => 'Taller','Mesa de trabajo' => 'Mesa de trabajo','Panel' => 'Panel'), null, array('id'=>'pon-type', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <!--Duration -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-duration">Duración</label>
            {!! Form::select('pon-duration', array('1' => '50 minutos','TwoHours' => '1 Hora y 50 minutos'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
        <!--Eje tematico -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-type">Eje temático</label>
            {!! Form::select('pon-topic', array('1' => 'Eje 1', '2' => 'Eje 2'), null, array('id'=>'pon-topic', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Description -->
          <div class="form-group mg-hm">
            <label for="pon-description">Descripción</label>
              {!! Form::textareacustom('pon-description', 3, 1000, array('class' => 'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <!--Is Approved -->
        <div class="col-md-12">
          <h4>Información de su solicitud</h4>
          <hr style="border-top: 2px solid rgba(0,0,0,.1);"/>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-is-approved">Estado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-tasks"></i></div>
              </span>
              {!! Form::text('pon-is-approved', 'En revisión', array('id'=>'pon-is-approved', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-space">Espacio asignado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-map-o"></i></div>
              </span>
              {!! Form::text('pon-space', null, array('id'=>'pon-space', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
        <!--Scheduled Hour -->
        <div class="col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-scheduled-hour">Hora y día asignado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
              </span>
              {!! Form::text('pon-scheduled-hour', null, array('id'=>'pon-scheduled-hour', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
<div class="section-header btn-toolbar toolbar-preceded-by-form-section" role="toolbar" style="background-color: rgba(0,0,0,.03)">
  <div id="pon-btn-group-1" class="btn-group mr-2" role="group">
  	{!! Form::button('<i class="fa fa-save"></i> Enviar', array('id' => 'pon-btn-save', 'class' => 'btn btn-outline-secondary pon-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Save book')) !!}
  	{!! Form::button('<i class="fa fa-refresh"></i> Actualizar', array('id' => 'pon-btn-refresh', 'class' => 'btn btn-outline-secondary pon-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'data-original-title' => 'Refresh grid data')) !!}
  </div>
  <div id="pon-btn-group-2" class="btn-group" role="group">
  	<!-- {!! Form::button('<i class="fa fa-edit"></i> Edit', array('id' => 'pon-btn-edit', 'class' => 'btn btn-outline-secondary pon-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Edit book')) !!} -->
  	{!! Form::button('<i class="fa fa-minus"></i> Eliminar', array('id' => 'pon-btn-delete', 'class' => 'btn btn-outline-secondary pon-tooltip', 'data-container' => 'body', 'data-toggle' => 'tooltip', 'disabled' => '', 'data-original-title' => 'Delete book')) !!}
  </div>
</div>
<div class="app-mg-grid app-responsive-grid mb-3">
{!!
GridRender::setGridId("pon-grid")
  ->enablefilterToolbar(true, false)
  ->hideXlsExporter()
  ->hideCsvExporter()
  ->setGridOption('url', URL::to('/cms/presentaciones'))
  ->setGridOption('rowNum', 10)
  ->setGridOption('rownumbers', true)
  ->setGridOption('width', 1000)
  ->setGridOption('height', 'auto')
  ->setGridOption('rowList',array(10,20,30))
  ->setGridOption('multiselect',false)
  ->setGridOption('viewrecords',true)
  //->setGridEvent('onSelectRow', 'onSelectRowEvent2')
  //->setGridEvent('onSelectRow', 'onBeforeRequest')
  ->addColumn(array('index' => 'id', 'hidden' => true))
  ->addColumn(array('label' => 'Nombre', 'index'=>'name'))
  ->addColumn(array('label' => 'Tipo', 'index'=>'name'))
  ->addColumn(array('label' => 'Duración', 'index'=>'name'))
  ->addColumn(array('label' => 'Descripción','index' => 'description'))
  ->renderGrid()
!!}
</div>
