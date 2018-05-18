<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Solicitar transporte a su llegada a El Salvador</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'trans-from-form', 'role' => 'form', 'onsubmit'=>'return false;')) !!}
      {!! Honeypot::generate('trans-from-kwaai-name', 'trans-from-kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para solicitar el traslado hacia el hotel a su llegada.</h6>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <!--Pickup Datetime -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-from-pickup-datetime">Fecha</label>
                {!! Form::select('trans-from-date', array('2018-07-11' => '11 de julio del 2018','2018-07-12' => '12 de julio del 2018'), null, array('id'=>'trans-from-date', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                {!! Form::hidden('trans-from-id', null, array('id' => 'trans-from-id')) !!}
              </div>
            </div>

            <!--Hora-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-from-hour">Hora</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                  </span>
                  <input id="trans-from-hour" type="time" class="form-control", data-mg-required="">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Point of Origin -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-from-origin">Lugar de llegada</label>
                {!! Form::select('trans-from-origin', $places, null, array('id'=>'trans-from-origin', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-status">Destino</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tasks"></i></div>
                  </span>
                  {!! Form::text('trans-from-destination', 'Centro Loyola', array('id'=>'trans-from-destination', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
            <!--Transport Number-->
            <div class="col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-from-transport-number">Empresa y número de vuelo/autobús</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-building-o"></i></div>
                  </span>
                  {!! Form::text('trans-from-transport-number', null, array('id'=>'trans-from-transport-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
              <!-- Observation -->
              <div class="form-group mg-hm">
                <label for="trans-from-remark">Observaciones del viaje</label>
                  {!! Form::textareacustom('trans-from-remark', 3, 500, array('class' => 'form-control')) !!}
              </div>
              {!! Form::button('Enviar solicitud', array('id'=>'trans-from-enviar', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
<div class="card mb-3">
  <h4 class="card-header">Información de su solicitud</h4>
  <div class="card-body">
    <div class="row">
      <!--Status -->
      <div class="col-lg-6 col-md-12">
        <div class="form-group mg-hm">
          <label for="trans-from-status">Estado</label>
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-tasks"></i></div>
            </span>
            {!! Form::text('trans-from-status', $status, array('id'=>'trans-from-status', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
          </div>
        </div>
      </div>

      <!--Assigned Transport -->
      <div class="col-lg-6 col-md-12">
        <div class="form-group mg-hm">
          <label for="trans-from-assigned-trans-fromport">Transporte asignado</label>
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-car"></i></div>
            </span>
            {!! Form::text('trans-from-assigned-transport', null, array('id'=>'trans-from-assigned-transport', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--Responsable User Name-->
      <div class="col-lg-6 col-md-12">
        <div class="form-group mg-hm">
          <label for="trans-from-dependant">Persona a cargo</label>
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-user"></i></div>
            </span>
            {!! Form::text('trans-from-responsable-user-name', null, array('id'=>'trans-from-responsable-user-name', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
          </div>
        </div>
      </div>

      <!--Contact -->
      <div class="col-lg-6 col-md-12">
        <div class="form-group mg-hm">
          <label for="trans-from-contact">Número de contacto</label>
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-phone"></i></div>
            </span>
            {!! Form::text('trans-from-contact-phone', null, array('id'=>'trans-from-contact', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
