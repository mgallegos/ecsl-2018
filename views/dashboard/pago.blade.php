<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Realizar pago</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pay-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      {!! Form::hidden('pay-id', null, array('id' => 'pay-id')) !!}
      {!! Form::hidden('pay-participation-type', null, array('id' => 'pay-participation-type')) !!}
      {!! Form::hidden('pay-insight', null, array('id' => 'pay-insight')) !!}
      <!-- <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para solicitar el traslado hacia el hotel a su llegada.</h6>
      </div> -->
      <div class="row">
        <div class="col-md-12 card-payment-deck">
          <label>Elija su tipo de participación</label>
          @include('ecsl-2018::paquetes-participacion')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group mg-hm mt-4">
                <label for="pay-payment-amount">Monto a pagar (en USD $)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-usd"></i></div>
                  </span>
                  {!! Form::text('pay-payment-amount', null, array('id'=>'pay-payment-amount', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="form-group mg-hm">
            <label for="pay-form-type">Forma de pago</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="payment-form" id="online-payment-form" checked>
                <!-- <label class="form-check-label" for="online-payment-form">Pago en línea</label> -->
                <img src="https://storage.googleapis.com/decimaerp/organizations/15/pagadito.png" class="img-fluid">
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="payment-form" id="transfer-payment-form">
                <label class="form-check-label" for="transfer-payment-form">Transferencia bancaria</label>
              </div>
            </div>
          </div>
          {!! Form::button('Realizar pago', array('id'=>'pay-btn-pay', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
