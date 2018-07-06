<?php $prefix = 'pay-'; $appInfo = array('id' => 'payment-management');?>
@include('decima-file::file-uploader')
<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Realizar pago</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pay-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=> URL::to('cms/public/registration'))) !!}
      {!! Form::hidden('pay-id', null, array('id' => 'pay-id')) !!}
      <!-- <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para solicitar el traslado hacia el hotel a su llegada.</h6>
      </div> -->
      <div class="row">
        <div class="col-md-12 card-payment-deck">
          @if(!empty($token) && !empty($transactionStatusMessage))
            <!-- <div class="alert alert-success" role="alert">
              {!! $transactionStatusMessage !!}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
          @endif
          @if(isset($payment['status']) && $payment['status'] == 'X')
            <div class="alert alert-success" role="alert">
              Su pago fue procesado exitosamente, el número de referencia de su pago es: {{ $payment['approval_number']}},
              con fecha y hora: {{ !empty($payment['record_datetime'])?\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $payment['record_datetime'])->format(Lang::get('form.phpDateFormat')):'' }}.
              Descargue <a id="pay-generate-invoice" href="#">aquí</a> el comprobante de su pago.
              <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
        	@endif
          @if(!empty($token) && empty($transactionStatusMessage))
            <div class="alert alert-info" role="alert">
              El pago no fue completado, por favor inténtelo nuevamente.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        	@endif
          <label>Elija la opción de pago</label>
          @include('ecsl-2018::paquetes-participacion')
          <div class="form-group mg-hm mt-4">
            <label for="pay-form-type">Forma de pago</label>
            <div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment-form" id="pay-online-payment-form" style="margin-top:2.4rem;" data-type="G" checked>
                <label class="form-check-label" for="pay-online-payment-form">Pago en línea <img src="https://storage.googleapis.com/decimaerp/organizations/15/pagadito.png" class="img-fluid"></label>
              </div>
              <div id="pay-bank-transfer-slsv-payment-form-row" class="form-check">
                <input class="form-check-input" type="radio" name="payment-form" id="pay-bank-transfer-slsv-payment-form" data-type="H">
                <label class="form-check-label" for="pay-bank-transfer-slsv-payment-form">Transferencia/Depósito bancario</label>
              </div>
              <div id="pay-bank-transfer-cr-payment-form-row" class="form-check">
                <input class="form-check-input" type="radio" name="payment-form" id="pay-bank-transfer-cr-payment-form" data-type="I">
                <label class="form-check-label" for="pay-bank-transfer-cr-payment-form">Transferencia/Depósito bancario en BNCR</label>
              </div>
            </div>
          </div>
          <div id="pay-payment-amount-row" class="row" style="display:none;">
            <div class="col-md-5">
              <div class="form-group mg-hm">
                <label for="pay-payment-amount">Paquete ECSL 2018 (en US$)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text">US<i class="fa fa-usd"></i></div>
                  </span>
                  {!! Form::text('pay-type-amount-label', '0.00', array('id'=>'pay-type-amount-label', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>
          <div id="pay-payment-commission-row" class="row" style="display:none;">
            <div class="col-md-5">
              <div class="form-group mg-hm">
                <label for="pay-payment-amount">Comisión por pago en línea (en US$)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text">US<i class="fa fa-usd"></i></div>
                  </span>
                  {!! Form::text('pay-commission-amount-label', '0.00', array('id'=>'pay-commission-amount-label', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group mg-hm">
                <label for="pay-payment-amount">Monto a pagar (en US$)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text">US<i class="fa fa-usd"></i></div>
                  </span>
                  {!! Form::text('pay-amount-label', '0.00', array('id'=>'pay-amount-label', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
              <div id="pay-amount-cr-label-row" class="form-group mg-hm" style="display:none;">
                <label for="pay-payment-amount">Monto a pagar (en CRC₡)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text">CRC₡</i></div>
                  </span>
                  {!! Form::text('pay-amount-cr-label', '0.00', array('id'=>'pay-amount-cr-label', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
          </div>
          <div id="pay-bank-sv-information" style="display:none;">
            <label>A continuación se detalla la información bancaria para que pueda realizar el depósito/transferencia, una vez realizada, adjunte el comprobante que le entregó el banco poder verificar la operación:</label>
            <ul>
              <li><strong>Nombre del banco:</strong> Banco de América Central</li>
              <li><strong>Dirección del banco:</strong> 55 Av. Entre Calle Roosevelt y Avenida Olimpica, San Salvador, El Salvador</li>
              <li><strong>Cuenta a nombre de:</strong> Moisés Oswaldo Larín y Carlos Juan Martín Pérez</li>
              <li><strong>Número de cuenta:</strong> 113967442</li>
              <li><strong>SWIFT:</strong> BAMCSVSS</li>
            </ul>
            <label>Información del banco intermediario para transferencias internacionales:</label>
            <ul>
              <li><strong>Nombre del banco intermediario:</strong> CITIBANK NA NEW YORK</li>
              <li><strong>Dirección del banco intermediario:</strong> 111 Wall Street, New York N.Y.</li>
              <li><strong>ABA del banco intermediario:</strong> 021000089</li>
              <li><strong>SWIFT del banco intermediario:</strong> CITIUS33</li>
              <li><strong>Número de cuenta entre bancos:</strong> 36148605</li>
            </ul>
          </div>
          <div id="pay-bank-cr-information" style="display:none;">
            <label>A continuación se detalla la información bancaria para que pueda realizar el depósito/transferencia, una vez realizada, adjunte el comprobante que le entregó el banco poder verificar la operación:</label>
            <ul>
              <li><strong>Nombre del banco:</strong> Banco Nacional de Costa Rica</li>
              <li><strong>Cuenta a nombre de:</strong> Carlos Juan Martín Pérez</li>
              <li><strong>Número de cuenta:</strong> 200-01-114-020530-0</li>
            </ul>
          </div>
          <div id="pay-bank-files" class="mb-3" style="display:none;">
            @include('decima-file::file-cms-viewer')
          </div>
          {!! Form::button('Realizar pago', array('id'=>'pay-btn-pay', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
{!! Form::open(array('id' => 'pay-op-form', 'url' => URL::to('cms/dashboard/payment'), 'role'  =>  'form')) !!}
	{!! Form::hidden('payment_type_id', 0, array('id' => 'pay-op-payment-type-id')) !!}
	{!! Form::hidden('payment_form_type', 'G', array('id' => 'pay-op-payment-form-type')) !!}
	{!! Form::hidden('payment_type_amount', 0, array('id' => 'pay-op-payment-type-amount')) !!}
	{!! Form::hidden('payment_commission_amount', 0, array('id' => 'pay-op-payment-commission-amount')) !!}
	{!! Form::hidden('amount', 0, array('id' => 'pay-op-amount')) !!}
	{!! Form::hidden('type', null, array('id' => 'pay-op-type')) !!}
	{!! Form::hidden('description', null, array('id' => 'pay-op-description')) !!}
{!! Form::close() !!}
{!! Form::open(array('id' => 'pay-inv-form', 'url' => URL::to('cms/dashboard/generate-invoice'), 'role'  =>  'form', 'target' => '_blank')) !!}
  {!! Form::hidden('order_id', $payment['order_id'], array('id' => 'pay-fac-order-id')) !!}
{!! Form::close() !!}
