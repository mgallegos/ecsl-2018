
<div class="card">
  <h4 class="card-header">{{ Lang::get('security/login.loginFormLegend') }}</h4>
  <div class="card-body">
    <!-- <h4 class="card-title">Special title treatment</h4> -->
    {!! Form::open(array('id'=>'login-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/login'))) !!}
      {!! Honeypot::generate('login-kwaai-name', 'login-kwaai-time') !!}
      <div class="form-group mg-hm">
        <!-- <label for="">&nbsp;</label> -->
        <div class="input-group">
          <span class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
          </span>
          {!! Form::text('login-email', null, array('id'=>'login-email', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => Lang::get('security/user-management.email'))) !!}
          </div>
      </div>
      <div class="form-group mg-hm">
        <div class="input-group">
          <span class="input-group-prepend">
            <div class="input-group-text"><i class="fa fa-key"></i></div>
          </span>
          {!! Form::password('login-password', array('id'=>'login-password', 'class'=>'form-control', 'data-mg-required'=>'', 'placeholder' => Lang::get('security/user-management.password'))) !!}
          </div>
      </div>
      {!! Form::button(Lang::get('security/login.loginButton'), array('id'=>'login-btn', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
    {!! Form::close() !!}
  </div>
</div>
