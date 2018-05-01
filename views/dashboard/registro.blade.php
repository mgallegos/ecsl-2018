<div class="card mb-3">
  <h4 class="card-header">Registrarse</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'reg-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <!-- <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para poder realizar el pago y proponer una o más ponencias.</h6>
      </div> -->
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <!--Firstname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-firstname">Nombres</label>
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
                <label for="reg-lastname">Apellidos</label>
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
                <label for="reg-contact">Teléfono de contacto</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('reg-contact-phone', null, array('id'=>'reg-contact-phone', 'class'=>'form-control')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Emergency Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-emergency-contact">En caso de emergencia contactar a</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('reg-emergency-contact-name', null, array('id'=>'emergency-contact-name', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>

            <!-- Phone Number Emergency Contact -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-number-emergency">Teléfono de contacto de emergencia</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('reg-emergency-contact-number', null, array('id' => 'reg-emergency-contact-number', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-passport-number">Pasaporte</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                  </span>
                  {!! Form::text('reg-passport', null, array('id'=>'reg-passport', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
            <!-- Country -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-country">País</label>
                @if (!Agent::isMobile())
                  {!! Form::autocomplete('reg-country', array('Argentina','Belize','Bolivia','Brazil','Chile','Cuba','Costa Rica','Colombia','Ecuador','Estados Unidos de América','El Salvador','French Guiana','Guyana','Guatemala','Honduras','Mexico','Nicaragua','Panama','Paraguay','Peru','Suriname','Uruguay','Venezuela'), array('class' => 'form-control', 'data-mg-required'=>''), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
            		@else
                  {!! Form::select('reg-country', array('Argentina','Belize','Bolivia','Brazil','Chile','Cuba','Costa Rica','Colombia','Ecuador','Estados Unidos de América','El Salvador','French Guiana','Guyana','Guatemala','Honduras','Mexico','Nicaragua','Panama','Paraguay','Peru','Suriname','Uruguay','Venezuela'), null, array('id'=>'reg-country', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            		@endif
              </div>
            </div>
          </div>

          <!-- Address -->
<!--
          <div class="form-group mg-hm">
            <label for="reg-address">Dirección en su país</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-home"></i></div>
              </span>
              {!! Form::text('reg-address', null, array('id'=>'reg-address', 'class'=>'form-control')) !!}
            </div>
          </div> -->


          <div class="row">
            <!-- Tshirt Size -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-tshirt-size">Talla de camiseta</label>
                @if (!Agent::isMobile())
                  {!! Form::autocomplete('reg-shirt-size', array('S','M', 'L', 'XL', 'XXL'), array('class' => 'form-control', 'data-mg-required'=>''), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
            		@else
                  {!! Form::select('reg-shirt-size', array('S','M', 'L', 'XL', 'XXL'), null, array('id'=>'reg-shirt-size', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            		@endif
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-birthdate">Fecha de nacimiento</label>
                {!! Form::date('reg-birth-date', array('class' => 'form-control', 'data-mg-required'=>''), null, 'btn-outline-secondary', '4') !!}
              </div>
            </div>
          </div>


          <div class="row">
            <!-- Gender -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-gender">Sexo</label>
                @if (!Agent::isMobile())
                  {!! Form::autocomplete('reg-gender', array('Mujer','Hombre', 'Deseo especificarlo', 'Prefiero no decirlo'), array('class' => 'form-control', 'data-mg-required'=>''), null, null, null, null, null, null, 'btn-outline-secondary', '4') !!}
            		@else
                  {!! Form::select('reg-gender', array('Mujer' => 'Mujer', 'Hombre' => 'Hombre', 'Deseo especificarlo' => 'Deseo especificarlo', 'Prefiero no decirlo' => 'Prefiero no decirlo'), null, array('id'=>'reg-gender', 'class'=>'form-control')) !!}
            		@endif
            </div>
            </div>

            <!-- Gender -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-birthdate">Mi sexo está mejor representado como</label>
                {!! Form::text('reg-custom-gender', null, array('id'=>'reg-custom-gender', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
              </div>
            </div>
          </div>

          <!-- <hr> -->

          <div class="form-group mg-hm">
            <label for="institution">Institución que representa</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-university"></i></div>
              </span>
              {!! Form::text('institution', null, array('id'=>'institution', 'class'=>'form-control')) !!}
            </div>
          </div>

          <!-- <hr> -->

          <div class="row">
            <!-- Health Condition -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-health-condition">Enfermedades / Alergias</label>
                  {!! Form::textareacustom('reg-health-condition', 4, 500, array('class' => 'form-control')) !!}
                </div>
            </div>

            <!-- Special Needs -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="reg-special-needs">Necesidades específicas</label>
                  {!! Form::textareacustom('reg-specific-needs', 4, 500, array('class' => 'form-control')) !!}
              </div>
            </div>
          </div>

          <!-- Previous ECSL -->
          <div class="form-group mg-hm">
            <label>Encuentros anteriores en los que he participado</label>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2009' class="form-check-input" type="checkbox" value=""> Nicaragua 2009
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2010' class="form-check-input" type="checkbox" value=""> Costa Rica 2010
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2011' class="form-check-input" type="checkbox" value=""> El Salvador 2011
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2012' class="form-check-input" type="checkbox" value=""> Guatemala 2012
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2013' class="form-check-input" type="checkbox" value=""> Belize 2013
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2014' class="form-check-input" type="checkbox" value=""> Panamá 2014
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2015' class="form-check-input" type="checkbox" value=""> Honduras 2015
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2016' class="form-check-input" type="checkbox" value=""> Nicaragua 2016
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='participated-in-ecsl2017' class="form-check-input" type="checkbox" value=""> Costa Rica 2017
                  </label>
                </div>
              </div>
            </div>
          </div>

          <!-- Linux Distros -->
          <div class="form-group mg-hm">
            <label for="email">Distibuciones Linux que utiliza:</label>
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
                    <input id='is-opensuse-linux-user' class="form-check-input" type="checkbox" value=""> OpenSUSE
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
                    <input id='is-damn-linux-user' class="form-check-input" type="checkbox" value=""> Damn Small Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-dream-linux-user' class="form-check-input" type="checkbox" value=""> Dream Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-elementary-linux-user' class="form-check-input" type="checkbox" value=""> Elementary OS
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
          <!-- Other Distribution -->
          <div class="form-group row">
            <label for="reg-other-distribution" class="col-sm-3 col-form-label">Especificar distribución</label>
            <div class="col-sm-9">
              {!! Form::text('reg-custom-distribution', null, array('id'=>'reg-custom-distribution', 'class'=>'form-control')) !!}
            </div>
          </div>

          <div class="form-group mg-hm alert alert-success">
            <label><strong>Opción alimenticia alternativa</strong></label>
            <hr style="margin-top:0;margin-bottom: .5rem;"/>
            <div class="row">
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-vegetarian' class="form-check-input" type="checkbox" value=""> Deseo optar por la opción vegetariana en todas las comidas del evento (disponible para los paquetes parcial y completo).
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group mg-hm alert alert-success">
            <label><strong>Competencia de seguidores en línea</strong></label>
            <hr style="margin-top:0;margin-bottom: .5rem;"/>
            <div class="row">
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-interested-in-competition' class="form-check-input" type="checkbox" value=""> Estoy interesado en participar en la competencia de seguidores en línea y me gustaría recibir información adicional.
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group mg-hm alert alert-warning">
            <label><strong>Privacidad</strong></label>
            <hr style="margin-top:0;margin-bottom: .5rem;"/>
            <div class="row">
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-gender-visible' class="form-check-input" type="checkbox" value="" checked> Autorizo que el sexo que especifiqué forme parte de las estadísticas del evento.
                  </label>
                  <label class="form-check-label">
                    <input id='is-general-information-visible' class="form-check-input" type="checkbox" value="" checked> Autorizo que mi país, edad, institución que represento, eventos anteriores que he participado y distribuciones Linux de mi preferencia, formen parte de las estadísticas del evento.
                  </label>
                  <label class="form-check-label">
                    <input id='is-photo-visible' class="form-check-input" type="checkbox" value="" checked> Autorizo que mi <a href="https://gravatar.com" target="_blank">gravatar</a> se muestre en la sección de participantes y ponentes (si aplica) del sitio web.
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
