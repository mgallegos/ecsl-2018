@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <div class="d-block d-lg-none">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Logística</h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{URL::to('cms/ecsl')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
      </li>
      <li class="breadcrumb-item active">Logística</li>
    </ol>
  </div>

  <!-- Content Row -->
  <div id="rowContainer" class="row">

    <!-- Sidebar Column -->
    <div id="colSide" class="col-lg-3 m-2 p-0 border rounded side-bar"> <!--m-2 p-0-->
      <div id="sideLogistica">
        <!-- Participacion -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0">
            <div class="btn w-100" id="headingParticipation" data-toggle="collapse" data-target="#collapseParticipation" aria-expanded="true">
              <div class="row">
                <div class="col-8 text-left">
                  <p class="font-weight-bold text-primary m-0">Participación</p>
                </div>
                <div class="col-4 text-right">
                  <i class="fa fa-chevron-down text-secondary "></i>
                </div>
              </div>
            </div>

          </div>

          <div id="collapseParticipation" class="collapse {{ !Agent::isMobile()?'show':'' }}" aria-labelledby="headingParticipation" data-parent="#sideLogistica">
            <div class="card-body p-0">
              <div class="list-group list-group-flush m-0">
                <a href="#participacion" class="list-group-item list-group-item-action py-2">Reseña</a>
                <a href="#dinamica-del-evento" class="list-group-item list-group-item-action py-2">Dinámica del evento</a>
                <a href="#cuota-de-participacion" class="list-group-item list-group-item-action py-2">Cuota de participación</a>
                <a href="#paquete-en-swag" class="list-group-item list-group-item-action py-2">Paquetes en Swag</a>
                <a href="#forma-de-pago" class="list-group-item list-group-item-action py-2">Forma de pago</a>
                <a href="#formas-de-participacion" class="list-group-item list-group-item-action py-2">Formas de participación</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Hospedaje -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top">
            <div class="btn w-100" id="headingHospedaje" data-toggle="collapse" data-target="#collapseHospedaje" aria-expanded="false">
              <div class="row ">
                <div class="col-9 text-center">
                  <p class="font-weight-bold text-primary my-0 text-left">Hospedaje</p>
                </div>
                <div class="col-3 text-right">
                  <i class="fa fa-chevron-down text-secondary "></i>
                </div>
              </div>
            </div>

          </div>

          <div id="collapseHospedaje" class="collapse" aria-labelledby="headingHospedaje" data-parent="#sideLogistica">
            <div class="card-body p-0">
              <div class="list-group list-group-flush m-0">
                <a href="#hospedaje-oficial" class="list-group-item list-group-item-action py-2">Hospedaje Oficial</a>
                <a href="#hospedaje-alternativo" class="list-group-item list-group-item-action py-2">Hospedajes Alternativos</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Sede Oficial -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top">
            <a href="#sede-oficial" class="btn w-100 rounded-0">
              <div class="font-weight-bold text-primary text-left" data-target="#collapseHospedaje" aria-expanded="false">
                Sede Oficial</div>
            </a>
          </div>

        </div>

        <!-- Opcion de Viaje -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0">
            <div class="btn w-100" id="headingTravelInfo" data-toggle="collapse" data-target="#collapseTravelInfo" aria-expanded="false">
              <div class="row ">
                <div class="col-9 text-center">
                  <p class="font-weight-bold text-primary my-0 text-left">Información de Viaje</p>
                </div>
                <div class="col-3 text-right">
                  <i class="fa fa-chevron-down text-secondary "></i>
                </div>
              </div>
            </div>

          </div>

          <div id="collapseTravelInfo" class="collapse" aria-labelledby="headingTravelInfo" data-parent="#sideLogistica">
            <div class="card-body p-0">
              <div class="list-group list-group-flush m-0">
                <a href="#aereo" class="list-group-item list-group-item-action py-2">Aéreo</a>
                <a href="#terrestre" class="list-group-item list-group-item-action py-2">Terrestre</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Movilizacion -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top">
            <div class="btn w-100" id="headingMovilizacion" data-toggle="collapse" data-target="#collapseMovilizacion" aria-expanded="false">
              <div class="row ">
                <div class="col-8 text-left">
                  <p class="font-weight-bold text-primary my-0">Movilización</p>
                </div>
                <div class="col-4 text-right">
                  <i class="fa fa-chevron-down text-secondary "></i>
                </div>
              </div>
            </div>
          </div>


          <div id="collapseMovilizacion" class="collapse" aria-labelledby="headingMovilizacion" data-parent="#sideLogistica">
            <div class="card-body p-0">
              <div class="list-group list-group-flush m-0">
                <a href="#servicio-de-autobuses" class="list-group-item list-group-item-action py-2">Servicio de Autobuses</a>
                <a href="#servicio-de-taxis" class="list-group-item list-group-item-action py-2">Servicio de taxis</a>
                <a href="#servicio-de-UBER" class="list-group-item list-group-item-action py-2">Servicio UBER</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Informacion de El Salvador-->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top">
            <div class="btn w-100" id="headingInfoESA" data-toggle="collapse" data-target="#collapseInfoESA" aria-expanded="false">
              <div class="row ">
                <div class="col-8 text-left">
                  <p class="font-weight-bold text-primary my-0">Acerca de El Salvador</p>
                </div>
                <div class="col-4 text-right">
                  <i class="fa fa-chevron-down text-secondary"></i>
                </div>
              </div>
            </div>
          </div>


          <div id="collapseInfoESA" class="collapse" aria-labelledby="headingInfoESA" data-parent="#sideLogistica">
            <div class="card-body p-0">
              <div class="list-group list-group-flush m-0">
                <a href="#moneda-local" class="list-group-item list-group-item-action py-1">Moneda Local</a>
                <a href="#electricidad" class="list-group-item list-group-item-action py-1">Electricidad</a>
                <a href="#hospitales" class="list-group-item list-group-item-action py-1">Hospitales</a>
                <a href="#telefonia" class="list-group-item list-group-item-action py-1">Telefonía</a>
                <a href="#gastronomia" class="list-group-item list-group-item-action py-1">Gastronomía</a>
                <a href="#condiciones-del-clima" class="list-group-item list-group-item-action py-1">Condiciones del Clima</a>
                <a href="#fumado" class="list-group-item list-group-item-action py-1">Fumado y Tabaco</a>
                <a href="#alcohol" class="list-group-item list-group-item-action py-1">Alcohol</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Opciones de Tiempo Libre-->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top ">
            <a href="#free-time" class="btn w-100 rounded-0">
              <div class="font-weight-bold text-primary text-left"  aria-expanded="false">
                Tiempo Libre</div>
            </a>
          </div>

        </div>

        <!-- Recomendaciones de Seguridad -->
        <div class="card border-0">
          <div class="card-header bg-white p-0 m-0 border-top ">
            <a href="#recomendaciones" class="btn w-100 rounded-0">
              <div class="font-weight-bold text-primary text-left" aria-expanded="False">
                Recomendaciones</div>
            </a>
          </div>

        </div>

      </div>
    </div>

    <!-- Content Column -->
    <div id="colContent" class="col-lg-9 mb-4 offset-lg-3"> <!--offset-lg-3 mb-4-->
      <div data-spy="scroll" data-target="#sideLogistica" data-offset="0">

        <div class="d-none d-lg-block">
          <!-- Page Heading/Breadcrumbs -->
          <h1 class="mt-4 mb-3">Logística</h1>

          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{URL::to('cms/ecsl')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
            </li>
            <li class="breadcrumb-item active">Logística</li>
          </ol>
        </div>

        <div id="participacion" class="right-block">
          <h3 class="font-weight-bold">Participación</h3>
          <p class="text-justify">El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado por la Comunidad Software Libre Centroamérica (SLCA). Reúne a representantes de comunidades de los siete países de la región, donde se intercambian experiencias,
            se comparte conocimiento, se promueven proyectos gestionados por las comunidades locales, se establecen objetivos comunes y se plantean estrategias para promover la filosofía, la cultura, el desarrollo y el uso del Software Libre y de Código
            Abierto. que se realiza desde el año 2009.
            <br><br> A la fecha, se ha realizado en Nicaragua (2009), Costa Rica (2010), El Salvador (2011), Guatemala (2012), Belize (2013), Panamá (2014), Honduras (2015), Nicaragua (2016) y Costa Rica (2017). En su decima edición, se realizará en
            la ciudad de San Salvador, El Salvador los días 12 y 13 de julio del 2018.
            <br><br> Es un evento abierto para todo el público interesado en el aprender y compartir sobre diversas temáticas acerca de tecnologías libres pero principalmente sobre Software Libre, está es una celebración donde te encontraras con entusiastas,
            estudiantes y profesionales; un espacio para relacionarte y hacer nuevas amistades y contactos que compartirán contigo la pasión por liberar el conocimiento para el beneficio de las personas.</p>

        </div>

        <div id="dinamica-del-evento" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Dinámica del Evento</h4>
          <p class="text-justify">La agenda de actividades se extiende hasta los horarios nocturnos, por lo que es indispensable que quienes se inscriban sean mayores de edad o estén acompañados de sus tutores legales.</p>

          <p class="font-weight-bold">Para participar es requerido completar el proceso de registro.</p>

          <p class="text-justify">El ECSL es un evento sin fines de lucro y es por medio de las cuotas de participación que se financian los equipos, herramientas, materiales, alimentación entre otras necesidades que requiere el poder realizarlo, también se cuenta con el aporte
            que realizan diversas entidades patrocinadoras.</p>

        </div>



        <div id="cuota-de-participacion" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Cuota de Participación</h4>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card">
                <h3 class="card-header text-center">Básico</h3>
                <div class="card-body">
                  <h2 class="text-center font-weight-bold">$ 10.00</h2>
                  <div class="font-italic text-center">Incluye:</div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Ingreso al evento</li>
                  <li class="list-group-item">Swag Completo</li>
                  <li class="list-group-item">Diploma de participación</li>
                </ul>
              </div>
            </div>

            <div class="col-md-4 mb-4">
              <div class="card">
                <h3 class="card-header text-center">Básico Plus</h3>
                <div class="card-body m-0 px-0">
                  <h2 class="text-center font-weight-bold">$ 40.00</h2>
                  <div class="font-italic text-center">Incluye:</div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item ">Ingreso al evento</li>
                  <li class="list-group-item ">Swag Completo</li>
                  <li class="list-group-item ">Diploma de participación</li>
                  <li class="list-group-item ">Almuerzos</li>

                </ul>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card">
                <h3 class="card-header text-center">Completo</h3>
                <div class="card-body m-0 px-0">
                  <h2 class="text-center font-weight-bold">$ 150.00</h2>
                  <div class="font-italic text-center">Incluye:</div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item ">Ingreso al evento</li>
                  <li class="list-group-item ">Swag Completo</li>
                  <li class="list-group-item ">Diploma de participación</li>
                  <li class="list-group-item ">Comida [Tres Tiempos]</li>
                  <li class="list-group-item ">Hospedaje</li>
                  <li class="list-group-item ">Transporte</li>
                </ul>
              </div>
            </div>
          </div>
          <p class="text-justify">La organización brindará información sobre hoteles cercanos a la sede para quienes la requieran, como una cortesía. Sin embargo, no se hará responsable de traslados ni depósitos de garantía que deban realizar quienes elijan la cuota parcial.</p>
          <!-- /.row -->
        </div>

        <div id="paquete-en-swag" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Paquetes en Swag</h4>
          <div class="row">

            <div class="col-md-6 mb-4">
              <div class="card">
                <h3 class="card-header text-center">Básico</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item ">Camiseta.</li>
                  <li class="list-group-item ">Gafete con NFC.</li>
                </ul>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="card">
                <h3 class="card-header text-center">Completo</h3>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item ">Camiseta.</li>
                  <li class="list-group-item ">Gafete con NFC.</li>
                  <li class="list-group-item ">Sticker en vinil del evento.</li>
                  <li class="list-group-item ">Recuerdo de evento (Artesania nacional).</li>
                </ul>
              </div>


            </div>
          </div>
        </div>

        <div id="forma-de-pago" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Forma de Pago</h4>
          <p>Proximamente se estará informando sobre los medios oficiales de pago de la cuota de inscripción al evento.</p>
        </div>

        <div id="formas-de-participacion" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Formas de Participación</h4>
          <p>Proximamente se estará informando sobre los medios oficiales de participación en el ECSL con mayor detalle..</p>
        </div>

        <hr>

        <div id="hospedaje-oficial" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Hospedaje Oficial (Centro Loyola)</h4>
          <p class="text-justify">El Centro Loyola es el lugar donde se hospedaran los participantes que adquirieron su paquete completo de participación al ECSL está ubicado en Calle Teotl No.35, Colonia Altos de Guadalupe, Antiguo Cuscatlán, La Libertad, El Salvador a 20
            minutos caminando de la Universidad Centroamericana “José Simeon Cañas” (UCA) sede del ECSL 2018.
            <br><br> Estas son algunas de las características del alojamiento:
            <ul>
              <li>Acceso a internet por medio de red wifi.</li>
              <li>Habitaciones y baños compartidos.</li>
              <li>Espacios comunes para socializar.</li>
              <li>Ubicación en una zona tranquila y segura.</li>
            </ul>

          </p>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3084.2521595938847!2d-89.23823788762095!3d13.671825544234894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6331cfc77882f9%3A0xdbc6907706f0e897!2sCentro+de+Retiro+San+Ignacio+de+Loyola!5e1!3m2!1sen!2sus!4v1516681227179"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <br>
          <p>
            Si desea más detalles, puede utilizar esta información de contacto:<br><br> Teléfono: (+503) 2227-3803 <br> Correo electrónico: <a href="mailto:cloyolasj@gmail.com">cloyolasj@gmail.com </a>.<br> Sitio web: <a target="_blank" href="http://centroloyolasj.blogspot.com/">Centro Loyola El Salvador</a>              <br> Fans Page: <a target="_blank" href="https://www.facebook.com/Centro-Loyola-El-Salvador-499360376842971/">Centro Loyola El Salvador</a> <br>
          </p>
        </div>

        <div id="hospedaje-alternativo" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Hospedajes Alternativos</h4>
          <!-- <p class="text-justify">Si desea reservar un lugar de alojamiento por su cuenta, se le recomienda las siguientes alternativas:</p> -->
          <p>Proximamente se estará informando sobre hoteles alternativos.</p>
        </div>

        <hr>

        <div id="sede-oficial" class="right-block">
          <h3 class="font-weight-bold">Sede Oficial (UCA)</h3>
          <p class="text-justify">El evento se llevará a cabo en el Edificio ICAS de la Universidad Centroamericana “José Simeon Cañas” (UCA) los días 12 y 13 de Julio del 2018, su ubicación es en El Bulevar Los Próceres, Antiguo Cuscatlán, La Libertad, El Salvador, Centroamérica.
            <br><br> La Universidad Centroamericana “José Simeon Cañas” (UCA) cuenta con un campus de 148,351.20 metros cuadrados, aproximadamente 21 manzanas.</p>

          <p>
            Si desea más detalles, puede utilizar esta información de contacto:<br><br> Teléfono: (+503) 2210-6600 <br> Correo electrónico: <a href="direccion.comunicaciones@uca.edu.sv">direccion.comunicaciones@uca.edu.sv</a>.<br> Sitio web: <a target="_blank" href="http://www.uca.edu.sv/">Universidad Centroamericana “José Simeon Cañas”</a>              <br> Fans Page: <a target="_blank" href="https://www.facebook.com/UCA.ElSalvador">UCA El Salvador</a> <br>
          </p>

        </div>

        <hr>

        <div id="aereo" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Aérea</h4>
          <p class="text-justify">La forma más rápida para llegar a El Salvador es por avión. El Salvador cuenta con el aeropuerto Internacional Monseñor Romero que se encuentra a 45 minutos de la sede del evento en cualquier automovil.
            <br><br> Del aeropuerto puede tomar un taxi hacia el Centro Loyola. Los taxis en El Salvador no cuentan con taxímetro y la tarifa se negocia con el taxista antes de abordar el vehículo. También puede optar por el servicio de UBER para dirigirse
            hacia el lugar de hospedaje.</p>

          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d248225.3098415193!2d-89.14756444999999!3d13.564982550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x8f7cb68084f5c48f%3A0xaff9539ed52e360d!2sAeropuerto+Internacional+de+El+Salvador!3m2!1d13.445137899999999!2d-89.0570357!4m5!1s0x8f6331cd305c735b%3A0x3d2a75b3761d4ded!2sUniversidad+Centroamericana+Jos%C3%A9+Sime%C3%B3n+Ca%C3%B1as%2C+Bulevar+Los+Proceres%2C+San+Salvador!3m2!1d13.6810526!2d-89.2357263!5e0!3m2!1ses!2ssv!4v1516678435332"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

        <br>
        <div id="terrestre" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Terrestre</h4>
          <p class="text-justify">Llegar a San Salvador por tierra es la opción más viable para las personas que vienen de los países centroamericanos, aconsejamos verificar precios y asegúrese de consultar las promociones y descuentos especiales directamente con cada empresa
            de transporte.</p>

          <ul>
            <li class="text-justify">
              <p class="font-weight-bold mb-0">Platinum:</p>
              <p class="">Tiene un servicio de transporte con atención de primera clase hacia San Salvador, El Salvador y tiene sus puertos de salida en Guatemala, Honduras y Nicaragua posee rutas clase Platinum, King y Quality los precios van desde $69.00 USD.
                Más información en el <a target="_blank" href="http://www.platinumcentroamerica.com/">sitio web de Platinum.</a></p>
            </li>

            <li class="text-justify">
              <p class="font-weight-bold mb-0">TicaBus:</p>
              <p class="">Tiene servicio de transporte de mediano costo hacia San Salvador, El Salvador y tiene puertos de salida en Guatemala, Honduras, NIcaragua y Costa Rica posee rutas turistica y ejecutiva los precio van desde $72.00 USD. hasta $131.00 USD.
                Más información en el <a target="_blank" href="http://ticabus.com/ ">sitio web de Ticabus.</a></p>
            </li>

            <li class="text-justify">
              <p class="font-weight-bold mb-0">Transportes del Sol:</p>
              <p class="">Tes una de las opciones más económicas para viajar a San Salvador, El Salvador poseen cuota diferencial entre adultos y menores de edad sus puertos de salida están ubicados unicamente en Guatemala, Nicaragua y Costa Rica; los precio van
                desde $50.00 USD. hasta $120.00 USD. <a target="_blank" href="http://www.transportedelsol.com/">sitio web de Transportes del Sol.</a></p>
            </li>
          </ul>

        </div>
        <hr>
        <div id="movilizacion" class="right-block">
          <h3 class="font-weight-bold">Movilizacion</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d9220.383720812502!2d-89.24185015400008!3d13.67637323291067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x8f6331cfc77882f9%3A0xdbc6907706f0e897!2sCentro+de+Retiro+San+Ignacio+de+Loyola%2C+Santa+Tecla!3m2!1d13.671825799999999!2d-89.2360495!4m5!1s0x8f6331cd305c735b%3A0x3d2a75b3761d4ded!2sUniversidad+Centroamericana+Jos%C3%A9+Sime%C3%B3n+Ca%C3%B1as%2C+Bulevar+Los+Proceres%2C+San+Salvador!3m2!1d13.6810526!2d-89.2357263!5e0!3m2!1ses!2ssv!4v1519789042093"
              width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <p class="text-justify">Para movilizarse del lugar de hospedaje hacia la sede del ECSL-2018 existen varias opciones que se describen a continuación:</p>
        </div>

        <div id="servicio-de-autobuses" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Servicio de Autobuses</h4>
          <p class="text-justify">En El Salvador es posible llegar prácticamente a cualquier lugar utilizando el servicio de autobuses.
            <br><br> La rutas que llegan a la Universidad Centroamericana “José Simeón Cañas” (UCA):
            <ul>
              <li>Ruta 44</li>
              <li>Por completar...</li>
              <li>Por completar...</li>
            </ul>
          </p>
        </div>

        <div id="servicio-de-taxis" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Servicio de taxis</h4>
          <p class="text-justify">Los taxis no cuentan con taxímetro, la tarifa se negocia con el taxista antes de abordar el vehículo. El costo promedio para desplazarse desde la Universidad Centroamericana “José Simeón Cañas” (UCA) sede del evento y el Centro Loyola es de
            $ 5.00 dólares.
            <br><br> Cabe destacar que a la salida hacia la calle “La Sultana” de la Universidad Centroamericana “José Simeón Cañas” (UCA) se ubica un punto de taxis de los cuales puede hacer uso en el horario que usted desee.
          </p>
        </div>

        <div id="servicio-de-UBER" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Servicio UBER</h4>
          <p class="text-justify">También puede optar por el servicio <a target="_blank" href="https://www.uber.com/es-ES/cities/san-salvador/">Uber</a>, para lo cual previamente debe instalar la respectiva app y configurar una cuenta. En El Salvador se ofrece la opción de UberX (4 personas).
            Puede pagar el servicio con tarjeta de débito/crédito o con dinero en efectivo en dólares.</p>
          <p>
            Para consultar estimación de tarifas, puede dirigirse a <a target="_blank" href="https://www.uber.com/es-ES/fare-estimate/">este enlace.</a>
          </p>
        </div>

        <hr>
        <h3 class="font-weight-bold">Información General de El Salvador</h3>

        <div id="moneda-local" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Moneda local</h4>
          <p class="text-justify">
            En El Salvador circulan los dólares estadounidenses de las siguientes denominaciones:
            <br><br>
            Monedas: $0.01, $0.05, $0.10, $0.25 y $1.00.
            <br>
            Billetes: $1, $5, $10, $20, $50, $100.
            <br><br>
            Nota: En algunos comercios pequeños del país no aceptan billetes de $50 y $100.
            Sin embargo puede cambiarlos en cualquier banco o institución financiera.
            <br><br>
            La mayoría de los cajeros automáticos o ATMs aceptan Visa, MasterCard y Maestro.
            Al cruzar la calle en una de las salidas de la sede del evento se encuentra un kiosco con cajeros automáticos
            disponibles las 24 horas.
            <br><br>
            Los impuestos de venta (13%) no siempre están incluidos en los precios que están a la vista
            (revise el I.V.A. en el comprobante). En muchos bares y restaurantes se acostumbra a incluir el 10%
            de propina, que según ley es voluntaria.
          </p>

        </div>

        <div id="electricidad" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Electricidad</h4>
          <p class="text-justify">
            La electricidad en El Salvador es de 110 V, 60 Hz, para corriente de hasta 15 A.
            Lo enchufes de energía usualmente son NEMA 5-15 (conectados a tierra) o más comúnmente NEMA 1-15
            (sin conexión a tierra). Es similar a los EE.UU. pero recuerde que aún es común encontrar enchufes
            sin conexión a tierra.
          </p>

        </div>

        <div id="hospitales" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Hospitales</h4>
          <p class="text-justify">
          Hospitales Nacionales:
            <ul>
              <li>Hospital Nacional San Rafael</li>
              <li>Hospital Nacional Rosales</li>
            </ul>
          Hospitales Privados:
            <ul>
              <li>Hospital de Diagnostico</li>
              <li>Hospital de La Mujer</li>
              <li>Hospital Médico Quirúrgico</li>
            </ul>
          Cabe mencionar que dentro de las instalaciones de la Universidad Centroamericana
          “José Simeón Cañas”, sede del evento, se encuentra una clínica asistencial y servicio
          de ambulancia en caso de emergencias.
          </p>
        </div>

        <div id="telefonia" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Telefonía</h4>
          <p class="text-justify">
            El codigo postal que le corresponde a El Salvador es +503.
            <br>
            Las compañías de telefonía e internet móvil que operan en El Salvador son:
          </p>

          <ul>
            <li class="text-justify">
              <p class="font-weight-bold mb-0">Claro El Salvador:</p>
              <p class="">
                Más información en el <a target="_blank" href="http://www.claro.com.sv/personas/">sitio web de Claro.</a>
              </p>
            </li>

            <li class="text-justify">
              <p class="font-weight-bold mb-0">Tigo El Salvador</p>
              <p class="">
                Más información en el <a target="_blank" href="https://www.tigo.com.sv/">sitio web de Tigo.</a>
              </p>
            </li>

            <li class="text-justify">
              <p class="font-weight-bold mb-0">Digicel El Salvador</p>
              <p class="">
                Más información en el <a target="_blank" href="https://www.digicelgroup.com/sv/es/mobile.html">sitio web de Digicel.</a>
              </p>
            </li>

            <li class="text-justify">
              <p class="font-weight-bold mb-0">Movistar El Salvador</p>
              <p class="">
                Más información en el <a target="_blank" href="https://www.movistar.com.sv/">sitio web de Movistar.</a>
              </p>
            </li>
          </ul>
        </div>

        <div id="gastronomia" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Gastronomía</h4>
          <p class="text-justify">
            La gastronomía de El Salvador se basa en productos como el arroz, frijoles, maíz, carnes,
            ricas frutas y verduras, productos lacteos, además de pescados y mariscos.
            </p>
          <p class="text-justify">
           Entre sus platos típicos hay que destacar la pupusa, que es una tortilla de maíz rellena de queso,
           frijoles o chicharrones, etre otros ingredientes. Frijoles con arroz, sopa de frijoles, tamales de
           queso, pollo o gallina, las riguas, la yuca frita y en las bebidas los atoles que forman ya una
           tradición en el paladar de los salvadoreños.
          </p>
        </div>

        <div id="condiciones-del-clima" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Condiciones del Clima</h4>
          <p class="text-justify">
            A lo largo del año las temperaturas se mantienen entre los 18° y 35°. Tiene dos estaciones:
            la seca (noviembre-abril) y la lluviosa (mayo-octubre).bPuedes consultar las condiciones del
            clima de El Salvador en los siguientes enlaces:
            <ul>
              <li>
                <a target="_blank" href="http://www.snet.gob.sv/ver/meteorologia/pronostico/48+horas/">SNET El Salvador</a>
              </li>
              <li>
                <a target="_blank" href="https://weather.com/es-SV/tiempo/hoy/l/13.73,-89.16">Weather.com</a>
              </li>
            </ul>
          </p>
        </div>

        <div id="fumado" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Fumado y Tabaco</h4>
          <p class="text-justify">
            La Universidad Centroamericana “José Simeón Cañas es una zona libre de tabaco, por ende los
            salones de conferencia de la sede son áreas de no fumado. Usted puede fumar fuera de la sede.
          </p>
          <p class="text-justify">
            En general, se permite fumar dentro de los restaurantes y bares, con algunas pocas excepciones.
            En ese caso, habrá un letrero visible de advertencia en la pared o la entrada.
          </p>
        </div>

        <div id="alcohol" class="right-block">
          <h4 class="display-6 font-italic font-weight-bold">Alcohol</h4>
          <p class="text-justify">
            La edad mínima que la ley establece para la compra de alcohol es 18 años. Es probable que se pida
            identificación al momento de realizar la compra en restaurantes, bares, supermercados u otros
            establecimientos. El límite legal de concentración de alcohol en la sangre para conducir un vehículo
            es de 0.03 %.
          </p>
          <p class="text-justify">
            El precio promedio de una lata de cerveza es de $1.00 dólar  en supermercados y de $1.25 -2.25
            dólares en restaurantes y bares. El vino es por lo general, más caro.
          </p>
        </div>

        <div id="free-time" class="right-block">
          <h3 class="font-weight-bold">Opciones de Tiempo Libre</h3>
          <p class="text-justify">

            <ul>
              <li class="text-justify">
                <p class="font-weight-bold mb-0">Multiplaza.</p>
                  <p class="">
                    Es uno de los más recientes centros comerciales. Se localiza en una zona muy céntrica y
                    cuenta con una estructura arquitectónica atractiva. Está dividida en tres niveles en los
                    que encontrarás tiendas de todo tipo como joyerías, zapaterías, tiendas de ropa,
                    foodcourt, cine, bancos y muchas opciones de entretenimiento. Además, puedes disfrutar de
                    promociones y eventos especiales. Cuenta con un amplio parqueo y seguridad. Se localiza
                    sobre carretera Panamericana.
                    Más información en el <a target="_blank" href="http://www.multiplaza.com/m/multiplaza-san-salvador">sitio web de Multiplaza.</a>
                  </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">La Gran Via</p>
                <p class="">
                  Es otra opción para visitar. Es de fácil acceso, con un buen ambiente, mucho estilo y opciones
                  de entretenimiento. Bajo su concepto de Life Style Center, busca ofrecer a sus visitantes un
                  espacio seguro, elegante y muy moderno. Cuenta con un espacio abierto para que puedas disfrutar
                  de tomar un café al aire libre o caminar. Encontrarás un área solo de tiendas exclusivas, bancos,
                  foodcourt y cine. Su parqueo es muy amplio. Dispone de cámara de vigilancia y servicio de seguridad.
                  Más información en el <a target="_blank" href="http://www.lagranvia.com.sv/">sitio web de La Gran Via.</a>
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Centro Comercial Metrocentro</p>
                <p class="">
                  Se localiza justo en el centro de San Salvador. Cuenta con una variedad de tiendas y
                  establecimientos de servicios. Está dividida en 12 etapas y tiene alrededor de 500 locales.
                  Encontrarás almacenes, foodcourt con establecimientos de comida rápida, cafés, zapaterías,
                  tiendas de ropa, bancos, cajeros automáticos y otros. Tiene una capacidad de parqueo para un
                  promedio de 2 mil 285 vehículos. En su infraestructura disponen de salas de cine y otros
                  atractivos. Visítalos en Boulevard De Los Héroes, San Salvador.
                  Más información en el <a target="_blank" href="http://metrocentro.com/m/metrocentro-san-salvador">sitio web de Metrocentro.</a>
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Centro Comercial Galerias</p>
                <p class="">
                  Fue inaugurado en 1996 y desde la fecha se ha caracterizado por ser uno de los lugares más
                  visitados. Cuenta con una gran variedad de establecimientos. Su construcción cuenta con
                  características coloniales que hacen del lugar un espacio único. Tiene un centro financiero
                  y una plaza de comida gourmet. Otro de sus atractivos es La Casona, que fue una casa construida
                  en 1950 y fue restaurada para que fuera parte de la construcción del centro comercial.

                  Más información en el <a target="_blank" href="http://www.galerias.com.sv/">sitio web de Galerias.</a>
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Plaza Futura</p>
                <p class="">
                  Situada en el en el corazón del complejo financiero World Trade Center, corresponde a una atractiva
                  explanada aterrazada de 3.000mt2 con locales comerciales y exclusivos restaurantes de gastronomía
                  internacional.
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Zona Rosa</p>
                <p class="">
                   Es uno de los lugares más populares por su vida nocturna. Si necesitas un lugar con opciones,
                   la Zona Rosa es ideal. Se localiza en colonia San Benito. Tiene una oferta turística muy
                   amplia, ya que la zona cuenta con hoteles, museos, bares, discotecas y restaurantes al escoger.
                   Todo se encuentra a pocos minutos, así que puedes disfrutar de una deliciosa comida y luego moverte
                   a una discoteca sin perder tiempo. Visita la Zona Rosa y disfruta de una noche inolvidable en San Salvador.
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Jardin Botánico</p>
                <p class="">
                  Es un hermoso lugar que se encarga de preservar y dar a conocer la gran diversidad natural
                  con la que cuenta la flora y fauna salvadoreña. Puedes hacer un recorrido por el lugar con un
                  clima agradable y una hermosa vista. Además, aprovecha a visitar el Herbario LAGU que tiene
                  una colección de 35 mil ejemplares herborizados. En el lugar disfrutarás de más de 3 mil 500
                  especies exóticas, juegos infantiles, vivero y amplio parqueo. Visita sus instalaciones en Urb.
                  Industrial Plan de La Laguna, AP 1197 CG, Antiguo. Cuscatlán La Libertad.
                </p>
              </li>

              <li class="text-justify">
                <p class="font-weight-bold mb-0">Planes de Renderos</p>
                <p class="">
                  Se localiza en el municipio de Panchimalco, departamento de San Salvador. Se encuentra a 9.5
                  kilómetros al sureste de la capital. Se caracteriza por su clima templado y por contar con una
                  diversidad de lugares para disfrutar del platillo más popular de El Salvador, las pupusas.
                </p>
              </li>

              <li>
                <p class="font-weight-bold mb-0">Centro Monseñor Romero (Dentro de la Universidad)</p>
              </li>

              <li>
                <p class="font-weight-bold mb-0">Parque Bicentenario</p>
              </li>

              <li>
                <p class="font-weight-bold mb-0">Plaza de la Reconciliación</p>
              </li>

              <li>
                <p class="font-weight-bold mb-0">Plaza de la Transparencia</p>
              </li>

              <li>
                <p class="font-weight-bold mb-0">Museo del café (Centro ex Banco Hipotecario)</p>
              </li>
            </ul>
          </p>
        </div>

        <div id="recomendaciones" class="right-block">
          <h3 class="font-weight-bold">Recomendaciones de Seguridad</h3>
          <p class="text-justify">
            La zona del evento y de hospedaje es relativamente segura, es normal observar personas caminando
            solas, portando su teléfono móvil en la mano o paseando a sus mascotas; sin embargo se recomienda
            seguir las normas básicas de seguridad:
            <ul>
              <li>Camine siempre en grupo, nunca en solitario.</li>
              <li>Evite zonas oscuras o solitarias.</li>
              <li>No porte objetos de valor, o evite mostrarlos.</li>
              <li>Guarde una copia de su pasaporte y de demás documentos de importancia, en un lugar aparte, o en digital.</li>
              <li>En caso de emergencia llame a:
                  <ul>
                    <li>911: Sistema de emergencias de El Salvador (no requiere línea telefónica activa).</li>
                    <li>Por completar...</li>
                    <li>Por completar...</li>
                  </ul>
              </li>
            </ul>
          </p>
        </div>

      </div>
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<script>

  var bool = false;

  @if (!Agent::isMobile())

  $(window).scroll(function()
  {
    if( $(".show").find(".active").length == 0){
       //$(".collapse").removeClass("show");
       $(".collapse").collapse('hide');
    }

    if( $("a.active") && !($("a.active").parents(".show").eq(2).length) && !bool){
      //$("a.active").parents().eq(2).addClass("show");
      $("a.active").parents().eq(2).collapse('show');
    }
    // var windowLevel = $(window).scrollTop();
    // var marginLevel = parseInt($(".col-lg-3").height())*0.92;
    // var sideContainer = $("#colSide");
    // var colContent = $("#colContent");
    // var top = $("#rowContainer").height()*0.92;
    // if( (windowLevel >= marginLevel))
    // {
    //   colContent.removeClass("offset-lg-3");
    //   sideContainer.removeClass("m-2 p-0");
    //   sideContainer.css({
    //     "position": "relative",
    //     "top": top
    //   });
    // }else
    // {
    //  colContent.addClass("offset-lg-3");
    //  sideContainer.addClass("m-2 p-0");
    //  sideContainer.css({
    //     "position": "fixed",
    //     "top": ""
    //   });

    // }
    bool = false;
  });

  @endif

  $("a.btn").click(function()
  {
    bool = true;
    $("a.active").removeClass("active");
    if( $("div.show").length != 0 )
    {
      $("div.collapse").collapse("hide");
    }
  });



</script>
@parent
@stop
