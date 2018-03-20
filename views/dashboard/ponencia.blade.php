<div class="card mb-3">
  <h4 class="card-header">Administrar ponencias</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pon-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <!--Firstname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-firstname">Nombre</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('pon-firstname', null, array('id'=>'pon-firstname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                  {!! Form::hidden('pon-id', null, array('id' => 'pon-id')) !!}
                  {!! Form::hidden('pon-insight', null, array('id' => 'pon-insight')) !!}
                </div>
              </div>
            </div>

            <!--Lastname -->
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="pon-lastname">Apellido</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('pon-lastname', null, array('id'=>'pon-lastname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
