<div class="card">
  <h4 class="card-header">Recordar contraseña</h4>
  <div class="card-body">
    @if(empty($rememberToken))
      {!! Form::open(array('id'=>'pass-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/dashboard/password-reminder'))) !!}
        {!! Honeypot::generate('pass-kwaai-name', 'pass-kwaai-time') !!}
        <div class="form-group mg-hm">
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
            </span>
            {!! Form::text('pass-email', null, array('id'=>'pass-email', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => 'Digite aqui su correo electrónico')) !!}
            </div>
        </div>
        {!! Form::button('Enviar', array('id'=>'pass-btn', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
      {!! Form::close() !!}
    @else
      {!! Form::open(array('id'=>'pass-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/dashboard/password-reset'))) !!}
        {!! Honeypot::generate('pass-kwaai-name', 'pass-kwaai-time') !!}
        <div class="form-group mg-hm">
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
            </span>
            {!! Form::text('pass-email', null, array('id'=>'pass-email', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => 'Digite aqui su correo electrónico')) !!}
            {!! Form::hidden('pass-token', $rememberToken, array('id' => 'pass-token')) !!}
            </div>
        </div>
        <div class="form-group mg-hm">
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-key"></i></div>
            </span>
            {!! Form::password('pass-password', array('id'=>'pass-password', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => 'Digite aqui su nueva contraseña')) !!}
            </div>
        </div>
        <div class="form-group mg-hm">
          <div class="input-group">
            <span class="input-group-prepend">
              <div class="input-group-text"><i class="fa fa-key"></i></div>
            </span>
            {!! Form::password('pass-confirm-password', array('id'=>'pass-confirm-password', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => 'Digite su contraseña nuevamente para confirmarla. ')) !!}
            </div>
        </div>
        {!! Form::button('Enviar', array('id'=>'pass-btn', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
      {!! Form::close() !!}
    @endif
  </div>
</div>
