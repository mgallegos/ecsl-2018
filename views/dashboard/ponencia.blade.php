<div class="card mb-3">
  <h4 class="card-header">Administrar ponencias</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pon-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
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
            {!! Form::select('pon-type', array('Charla' => 'Charla','Taller' => 'Taller'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <!--Duration -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-duration">Duración</label>
            {!! Form::select('pon-duration', array('OneHour' => '1 Hora','TwoHours' => '2 Horas'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
        <!--Space -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-space">Espacio asignado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-map-o"></i></div>
              </span>
              {!! Form::text('pon-space', null, array('id'=>'pon-space', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!--Scheduled Hour -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-scheduled-hour">Hora y día asignado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
              </span>
              {!! Form::text('pon-scheduled-hour', null, array('id'=>'pon-scheduled-hour', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
        <!--Is Approved -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-is-approved">Estado</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-tasks"></i></div>
              </span>
              {!! Form::text('pon-is-approved', null, array('id'=>'pon-is-approved', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- Description -->
      <div class="form-group mg-hm">
        <label for="pon-description">Descripción</label>
          {!! Form::textareacustom('pon-description', 3, 500, array('class' => 'form-control')) !!}
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
GridRender::setGridId("BookGrid0")
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
