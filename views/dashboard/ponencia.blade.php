<?php $prefix = 'pon-'; $appInfo = array('id' => 'presentation-management');?>
@include('decima-file::file-uploader')
<div class="card form-container-followed-by-grid-section">
  <h4 class="card-header">Administrar mis ponencias</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pon-form', 'role' => 'form', 'onsubmit'=>'return false;')) !!}
      {!! Honeypot::generate('fc-kwaai-name', 'fc-kwaai-time') !!}
      <div id="pon-alert-black" class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para proponer una o más ponencias, una vez enviada, siempre podrá realizar modificaciones a sus ponencias haciendo clic al registro correspondiente en la tabla.</h6>
      </div>
      <div class="row">
        <!--Name-->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-name">Título</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-user"></i></div>
              </span>
              {!! Form::text('pon-name', null, array('id'=>'pon-name', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              {!! Form::hidden('pon-id', null, array('id' => 'pon-id')) !!}
              {!! Form::hidden('pon-eje', null, array('id' => 'pon-eje')) !!}
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
            {!! Form::select('pon-duration', array('1' => '50 minutos', '2' => '1 Hora y 50 minutos'), null, array('id'=>'pon-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
        <!--Eje tematico -->
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-topic">Eje temático</label>
            {!! Form::select('pon-subtopic-id', $topics, null, array('id'=>'pon-subtopic-id', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Description -->
          <div class="form-group mg-hm">
            <label for="pon-description">Descripción</label>
              {!! Form::textareacustom('pon-description', 3, 1500, array('class' => 'form-control', 'data-mg-required'=>'')) !!}
          </div>
          @include('decima-file::file-cms-viewer')
        </div>
      </div>
      <div class="row mt-2">
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
              {!! Form::text('pon-is-approved', null, array('id'=>'pon-is-approved', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="form-group mg-hm">
            <label for="pon-space">Aula asignada</label>
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
<div id="pon-btn-toolbar" class="section-header btn-toolbar toolbar-preceded-by-form-section" role="toolbar" style="background-color: rgba(0,0,0,.03)">
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
GridRender::setGridId('pon-grid')
  //->enablefilterToolbar(true, false)
  ->hideXlsExporter()
  ->hideCsvExporter()
  ->setGridOption('url', URL::to('/cms/presentaciones'))
  ->setGridOption('rowNum', 10)
  ->setGridOption('rownumbers', true)
  ->setGridOption('width', 1000)
  ->setGridOption('height', 'auto')
  ->setGridOption('rowList',array())
  ->setGridOption('multiselect', false)
  ->setGridOption('viewrecords', false)
  ->setGridOption('postData', array('_token' => Session::token(), 'filters'=>"{'groupOp':'AND','rules':[{'field':'user_id','op':'eq','data':'" . (empty($cmsLoggedUser)?-1:$cmsLoggedUser['user_id']) ."'}]}"))
  ->setGridEvent('onSelectRow', 'ponOnSelectRowEvent')
  ->addColumn(array('index' => 'p.id', 'name' => 'pon_id', 'hidden' => true))
  ->addColumn(array('index' => 'p.is_approved', 'name' => 'pon_is_approved', 'hidden' => true))
  ->addColumn(array('index' => 'st.id', 'name' => 'pon_subtopic_id', 'hidden' => true))
  ->addColumn(array('label' => 'Título', 'index'=>'p.name', 'name' => 'pon_name', 'width' => 60))
  ->addColumn(array('label' => 'Tipo', 'index'=>'p.type', 'name'=>'pon_type', 'width' => 40 ))
  ->addColumn(array('label' => 'Duración (horas)', 'index'=>'p.duration', 'name'=>'pon_duration', 'width' => 35, 'align' => 'center'))
  ->addColumn(array('label' => 'Eje temático','index' => 'st.name', 'name'=>'pon_subtopic_label', 'width' => 100))
  ->addColumn(array('label' => 'Descripción','index' => 'p.description', 'name'=>'pon_description'))
  ->renderGrid()
!!}
</div>
<div id='pon-modal-delete' class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm pon-btn-delete">
    <div class="modal-content">
			<div class="modal-body" style="padding: 20px 20px 0px 20px;">
				<p id="pon-delete-message">¿Está seguro(a) que desea eliminar la presentación seleccionada?</p>
      </div>
			<div class="modal-footer mx-auto">
				<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">{{ Lang::get('form.no') }}</button>
				<button id="pon-btn-modal-delete" type="button" class="btn btn-outline-primary">{{ Lang::get('form.yes') }}</button>
			</div>
    </div>
  </div>
</div>
