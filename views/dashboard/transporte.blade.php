<div class="card mb-3">
  <h4 class="card-header">Solicitar transporte</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'trans-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <!--Firstname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-firstname">Nombre</label>
                {!! Form::datetime('trans-date', array('class' => 'form-control', 'data-mg-required' => '', 'data-default-value' => '')) !!}
              </div>
            </div>

            <!--Company-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-company">Empresa y numero de vuelo/autobus</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-building-o"></i></div>
                  </span>
                  {!! Form::text('trans-company', null, array('id'=>'trans-company', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Point of Origin -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-point-of-origin">Origen</label>
                {!! Form::select('trans-point-of-origin', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'transportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
              </div>
            </div>

            <!--Point of Destination -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-point-of-destination">Destino</label>
                {!! Form::select('trans-point-of-destination', array('hotel' => 'Centro Loyola','aeropuerto' => 'Aeropuerto Internacional de El Salvador "Monseñor Oscar Arnulfo Romero"', 'puertoBus' => 'Puerto Bus', 'ticaBus1' => 'Tica Bus Terminal San Benito','ticaBus2' => 'Tica Bus Terminal San Carlos', 'platinum' => 'Terminal Platinum Centro', 'transportesElSol' => 'Transportes El Sol Terminal San Benito'), null, array('id'=>'trans-duration', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
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

            <!--Transport -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-transport">Transporte asignado</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-car"></i></div>
                  </span>
                  {!! Form::text('trans-transport', null, array('id'=>'trans-transport', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!--Dependant-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-dependant">Persona a cargo</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('trans-dependant', null, array('id'=>'trans-dependant', 'class'=>'form-control', 'data-mg-required'=>'', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>

            <!--Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="trans-contact">Numero de contacto</label>
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
            <label for="trans-observation">Observaciones del viaje</label>
              {!! Form::textareacustom('trans-observation', 3, 500, array('class' => 'form-control')) !!}
          </div>

        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
