<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Solicitar transporte a su salida de El Salvador</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'trans-to-form', 'role' => 'form', 'onsubmit'=>'return false;')) !!}
      {!! Honeypot::generate('trans-to-kwaai-name', 'trans-to-kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para solicitar el traslado hacia el aeropuerto o terminal de autobus, si se dirige hacia el aeropuerto, tome en cuenta, en la hora solicitada, que el traslado tarda aproximadamente de 45 minutos a 1 hora.</h6>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <!--Pickup Datetime -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-pickup-datetime">Fecha</label>
                {!! Form::select('trans-to-date', array('2018-07-14' => '14 de julio del 2018','2018-07-15' => '15 de julio del 2018'), null, array('id'=>'trans-to-date', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                {!! Form::hidden('trans-to-id', null, array('id' => 'trans-to-id')) !!}
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
                  <input id="trans-to-hour" type="time" class="form-control", data-mg-required="">
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <!--Status -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-status">Lugar de salida</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-tasks"></i></div>
                  </span>
                  {!! Form::text('trans-to-origin', 'Centro Loyola', array('id'=>'trans-to-origin', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Point of Destination -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-destination">Destino</label>
                {!! Form::select('trans-to-destination', $lugares, null, array('id'=>'trans-to-destination', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <!--Transport Number-->
            <div class="col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-to-trans-toport-number">Empresa y número de vuelo/autobús</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-building-o"></i></div>
                  </span>
                  {!! Form::text('trans-to-transport-number', null, array('id'=>'trans-to-transport-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>

              <!-- Observation -->
              <div class="form-group mg-hm">
                <label for="trans-to-remark">Observaciones del viaje</label>
                  {!! Form::textareacustom('trans-to-remark', 3, 500, array('class' => 'form-control')) !!}
              </div>

              {!! Form::button('Enviar solicitud', array('id'=>'trans-to-enviar', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
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
          <label for="trans-to-status">Estado</label>
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-tasks"></i></div>
            </span>
            {!! Form::text('trans-to-status', $status, array('id'=>'trans-to-status', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
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
            {!! Form::text('trans-to-assigned-transport', null, array('id'=>'trans-to-assigned-transport', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
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
            {!! Form::text('trans-to-responsable-user-name', null, array('id'=>'trans-to-responsable-user-name', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
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
            {!! Form::text('trans-to-contact-phone', null, array('id'=>'trans-to-contact', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
