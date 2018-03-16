
<div class="card mb-3">
  <h4 class="card-header">Formulario de registro</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'reg-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario de registro para que pueda realizar el pago y proponer una o más ponencias.</h6>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <!--Firstname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-firstname">Nombre</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('reg-firstname', null, array('id'=>'reg-firstname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                  {!! Form::hidden('reg-id', null, array('id' => 'reg-id')) !!}
                  {!! Form::hidden('reg-insight', null, array('id' => 'reg-insight')) !!}
                </div>
              </div>
            </div>

            <!--Lastname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-lastname">Apellido</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('reg-lastname', null, array('id'=>'reg-lastname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Password -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-password">Contraseña</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                  </span>
                  {!! Form::password('reg-password', array('id'=>'reg-password', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>

            <!-- Password Confirmation -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-password-confirmation">Confirmar contraseña</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                  </span>
                  {!! Form::password('reg-password-confirmation', array('id'=>'reg-password-confirmation', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- E-mail -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-email">Correo electrónico</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                  </span>
                  {!! Form::text('reg-email', null, array('id'=>'reg-email', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-contact">Número de contacto</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('reg-contact', null, array('id'=>'reg-contact', 'class'=>'form-control')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Address -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-address">Dirección en su país</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-home"></i></div>
                  </span>
                  {!! Form::text('reg-address', null, array('id'=>'reg-address', 'class'=>'form-control', 'data-mg-required'=>'' )) !!}
                </div>
              </div>
            </div>

            <!-- Country -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-country">País</label>
                {!! Form::autocomplete('reg-country', array('El Salvador', 'Guatemala'), array('class' => 'form-control'), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Passport Number-->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-passport-number">Pasaporte</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                  </span>
                  {!! Form::text('passport-number', null, array('id'=>'passport-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>

            <!-- Tshirt Size -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-tshirt-size">Talla de Camiseta</label>
                {!! Form::autocomplete('reg-tshirt-size', array('S','M', 'L', 'XL', 'XXL'), array('class' => 'form-control'), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>
          </div>


          <div class="row">
            <!-- Gender -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-gender">Género</label>
                {!! Form::autocomplete('reg-gender', array('Masculino','Femenino', 'Otro'), array('class' => 'form-control'), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
                <!-- {!! Form::select('reg-gender', array('' => '', 'M' => 'Masculino', 'F' => 'Femenino'), null, array('id'=>'gender', 'class'=>'form-control', 'data-mg-required'=>'')) !!} -->
            </div>
            </div>

            <!-- Birthdate -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-birthdate">Fecha de Nacimiento:</label>
                {!! Form::date('reg-birthdate', array('class' => 'form-control'), null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>
          </div>

          <hr>

          <div class="form-group mg-hm">
            <label for="institution">Represento a la institución</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-university"></i></div>
              </span>
              {!! Form::text('institution', null, array('id'=>'institution', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            </div>
          </div>
          <div class="form-group mg-hm">
            <label for="email">Utilizo las siguientes distibuciones Linux:</label>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-debian-linux-user' class="form-check-input" type="checkbox" value=""> Debian
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-ubuntu-linux-user' class="form-check-input" type="checkbox" value=""> Ubuntu
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-mint-linux-user' class="form-check-input" type="checkbox" value=""> Linux Mint
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-arch-linux-user' class="form-check-input" type="checkbox" value=""> Arch Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-slackware-linux-user' class="form-check-input" type="checkbox" value=""> Slackware
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-opensuse-linux-user' class="form-check-input" type="checkbox" value=""> openSUSE
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-knoppix-linux-user' class="form-check-input" type="checkbox" value=""> Knoppix
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-centos-linux-user' class="form-check-input" type="checkbox" value=""> CentOS
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-damn-small-linux-user' class="form-check-input" type="checkbox" value=""> Damn Small Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-dream-linux-user' class="form-check-input" type="checkbox" value=""> Dream Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-elementary-os-linux-user' class="form-check-input" type="checkbox" value=""> Elementary OS
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-fedora-linux-user' class="form-check-input" type="checkbox" value=""> Fedora
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-gentoo-linux-user' class="form-check-input" type="checkbox" value=""> Gentoo
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-antergos-linux-user' class="form-check-input" type="checkbox" value=""> Antergos
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="other-distribution" class="col-sm-3 col-form-label">Especificar distribución</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="other-distribution">
            </div>
          </div>

          <div id='participation-row' class="form-group mg-hm alert alert-warning">
            <label>Opciones de privacidad</label>
            <div class="row">
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-photo-visible' class="form-check-input" type="checkbox" value="" checked> Deseo que mi <a href="https://gravatar.com" target="_blank">gravatar</a> se muestre en la sección de participantes y ponentes (si aplica) del sitio web
                  </label>
                </div>
              </div>
              <!-- <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-attending' class="form-check-input" type="checkbox" value=""> Asistir al evento
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-speaker' class="form-check-input" type="checkbox" value=""> Participar como ponente
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-volunteer' class="form-check-input" type="checkbox" value=""> Colaborar como voluntario
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-organizer' class="form-check-input" type="checkbox" value=""> Colaborar en la organización
                  </label>
                </div>
              </div> -->
            </div>
          </div>


          {!! Form::button('Registrarse', array('id'=>'reg-btn-register', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
