@extends('ecsl-2018::base')

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Ejes Temáticos</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <li class="breadcrumb-item active">Ejes Temáticos</li>
  </ol>


  <!--Indice de los ejes temáticos -->
  <div class="portafolio-item d-lg-none">
    <div id="main-theme" class="list-group">
      <a class="list-group-item font-weight-bold" href="#main-theme-1">
        EJE TEMÁTICO #1: Aportemos al desarrollo de más y mejor software libre.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-2">
        EJE TEMÁTICO #2: Desarrollemos y conozcamos más sobre hardware libre.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-3">
        EJE TEMÁTICO #3: Liberemos espacios en la web con software libre.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-4">
        EJE TEMÁTICO #4: Usemos geotecnologías libres para la gestión de información geográficas.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-5">
        EJE TEMÁTICO #5: Seamos una comunidad más inclusiva y diversa.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-6">
        EJE TEMÁTICO #6: Democraticemos los medios de comunicación con el apoyo del software libre.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-7">
        EJE TEMÁTICO #7: Fortalezcamos la comunidad centroamericana de software libre.</a>
      <a class="list-group-item font-weight-bold" href="#main-theme-8">
        EJE TEMÁTICO #8: Abramos un espacio de desconferencia.</a>
    </div>
  </div>

  <div class="container " data-spy="scroll" data-target="#main-theme" data-offset="0">

    <!-- Eje Uno -->
    <div class="right-block" id="main-theme-1">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #1: Aportemos al desarrollo de más y mejor software libre.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-4 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Usar, estudiar, compartir y mejorar software libre reconociendo las diversas prácticas,
            entornos y tecnologías que se desarrollan para fortalecer la comprensión del impacto en la
            generación de modelos de intercambio y desarrollo de información y conocimiento más eficaces
            y eficientes en una sociedad cada vez más conectada.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.1. Desarrollo y aplicación en el uso de las diversas distribuciones GNU/Linux.</td>
                    </tr>
                    <tr>
                      <td>1.2. Desarrollo y aplicación de diversos utilitarios y software libres.</td>
                    </tr>
                    <tr>
                      <td>1.3. Compartiendo y enseñando sobre lenguajes de programación.</td>
                    </tr>
                    <tr>
                      <td>1.4. Licenciamiento en software libre.</td>
                    </tr>
                    <tr>
                      <td>1.5. Compartiendo Iniciativas y desarrollos en la región sobre software libre.</td>
                    </tr>
                    <tr>
                      <td>1.6. Comercialización de productos y/o servicios en software libre.</td>
                    </tr>
                    <tr>
                      <td>1.7. Enseñanzas, experiencias y aprendizajes sobre software libre.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>

    </div>

    <!-- Eje Dos -->
    <div class="right-block" id="main-theme-2">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #2: Desarrollemos y conozcamos más sobre hardware libre.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-4 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Conocer e identificar las diversas definiciones y clasificaciones existentes sobre
            hardware libre y como los procesos de intercambio y liberación de diseño y código permiten el desarrollo
            del fomento de hardware útil y eficaz en sus múltiples funcionamientos y capacidades.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2.1. Software libre y código abierto en hardware.</td>
                    </tr>
                    <tr>
                      <td>2.2. Buenas Prácticas para el hardware de fuente abierta.</td>
                    </tr>
                    <tr>
                      <td>2.3. Diseño y desarrollo de hardware libre.</td>
                    </tr>
                    <tr>
                      <td>2.4. Licenciamiento de hardware de fuente abierta.</td>
                    </tr>
                    <tr>
                      <td>2.5. Compartiendo Iniciativas y desarrollos en la región sobre hardware libre.</td>
                    </tr>
                    <tr>
                      <td>2.6. Comercialización de productos y/o servicios en hardware libre.</td>
                    </tr>
                    <tr>
                      <td>2.7. Enseñanzas, experiencias y aprendizajes sobre hardware libre.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Tres -->
    <div class="right-block" id="main-theme-3">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #3: Liberemos espacios en la web con software libre.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-5 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Hacer uso de tecnologías abierta e innovadoras que permitan el desarrollo
            de ambientes que luchen contra la desinformación en internet además de velar por los derechos digitales
            como la seguridad, la privacidad y la anonimidad.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>3.1. Software libre para seguridad en infraestructura.</td>
                    </tr>
                    <tr>
                      <td>3.2. Implementación de internet de las Cosas (IoT).</td>
                    </tr>
                    <tr>
                      <td>3.3. Privacidad, vigilancia y uso de datos de las personas usuarias.</td>
                    </tr>
                    <tr>
                      <td>3.4. Desarrollo de aplicaciones móviles y la experiencia del usuario (UX).</td>
                    </tr>
                    <tr>
                      <td>3.5. Compartiendo Iniciativas y desarrollos en la región sobre una web abierta.</td>
                    </tr>
                    <tr>
                      <td>3.6. Comercialización de productos y/o servicios en la web con software libre.</td>
                    </tr>
                    <tr>
                      <td>3.7. Enseñanzas, experiencias y aprendizajes sobre la web y el software libre.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Cuatro -->
    <div class="right-block" id="main-theme-4">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #4: Usemos geotecnologías libres para la gestión de información geográficas.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-3 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Conocer e identificar prácticas, experiencias y capacidades desarrolladas en los países
            de la región centroamericana e internacionalmente que contribuyan en la implementación de plataformas y sistemas
            de información geográfica libres, herramientas participativas para la geolocalización e iniciativas de mapeo
            colaborativo, con miras al desarrollo tecnológico y científico de los estados nacionales, sector privado y
            movimientos sociales en Centroamérica.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0 p-2">
                  <thead>
                    <tr>
                      <th class="text-center p-2">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-2">4.1. Usando herramientas y aplicaciones con geotecnologías libres.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.2. Conociendo sobre transporte y movilidad sustentable.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.3. Geotecnologías libres y participativas para la gestión de riesgo.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.4. Compartiendo iniciativas y desarrollos de mapeo colaborativo en la región.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.5. Implementando mapas libres en la web.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.6. Comercialización de productos y/o servicios en el uso de geotecnologías.</td>
                    </tr>
                    <tr>
                      <td class="py-2">4.7. Enseñanzas, experiencias y aprendizajes sobre geotecnologías.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Cinco -->
    <div class="right-block" id="main-theme-5">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #5: Seamos una comunidad más inclusiva y diversa.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-5 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Generar un modelo de construcción cultural con acción política y ética con
             una perspectiva de género y cultura libre haciendo uso de diversas tecnologías libres.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>5.1. Género, identidades e inclusión.</td>
                    </tr>
                    <tr>
                      <td>5.2. Violencia de género en Internet.</td>
                    </tr>
                    <tr>
                      <td>5.3. Inclusión de más mujeres en ciencia y tecnología.</td>
                    </tr>
                    <tr>
                      <td>5.4. Compartiendo Iniciativas y desarrollos en la región sobre inclusión y diversidad.</td>
                    </tr>
                    <tr>
                      <td>5.5. Enseñanzas, experiencias y aprendizajes en procesos sobre inclusión y diversidad.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Seis -->
    <div class="right-block" id="main-theme-6">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #6: Democraticemos los medios de comunicación con el apoyo del software libre.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-5 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Ampliar el debate de la democratización de la comunicación haciendo uso de software libre
             y conocer la experiencia desde las radios comunitarias en la región centroamericana. </p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>6.1. Software libre en la democratización de medios digitales e impresos.</td>
                    </tr>
                    <tr>
                      <td>6.2. Estado actual de las leyes y sus reformas en telecomunicaciones de la región.</td>
                    </tr>
                    <tr>
                      <td>6.3. Experiencias con software libre desde las radios comunitarias y otros medios</td>
                    </tr>
                    <tr>
                      <td>6.4. Reactivación de la lucha a favor de una sociedad justa e igualitaria.</td>
                    </tr>
                    <tr>
                      <td>6.5. Enseñanzas, experiencias y aprendizajes en procesos de comunicación social.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Siete -->
    <div class="right-block" id="main-theme-7">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #7: Fortalezcamos la comunidad centroamericana de software libre.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-4 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Fortalecer los medios de comunicación y la estructura organizacional y de acción
             de la Comunidad Centroamericana de Software Libre, generando un modelo de gestión acorde a la naturaleza
              de las personas miembros de la misma en el uso de tecnologías abiertas a nivel centroamericano..</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center p-2">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-2">7.1. Generemos herramientas para fortalecer el andar de la comunidad.</td>
                    </tr>
                    <tr>
                      <td class="py-2">7.2. Construcción de un código de conducta para la comunidad..</td>
                    </tr>
                    <tr>
                      <td class="py-2">7.3. Conozcamos las iniciativas y empresas que alojamos en la comunidad.</td>
                    </tr>
                    <tr>
                      <td class="py-2">7.4. Construyamos espacios de promoción, divulgación y apoyo a iniciativas locales.</td>
                    </tr>
                    <tr>
                      <td class="py-2">7.5. Enseñanzas, experiencias y aprendizajes en el convivir de comunidades.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>

    <!-- Eje Ocho -->
    <div class="right-block" id="main-theme-8">
      <div class="row bg-light font-weight-bold text-center align-middle" >
        <div class="col-md-12 border p-3">EJE TEMÁTICO #8: Abramos un espacio de desconferencia.</div>
      </div>
      <div class="row text-center border-left border-bottom portafolio-item">
        <div class="col-md-4 align-middle border-top border-right pt-2 pb-0 mb-0 ">
          <h6 class="font-weight-bold">Objetivo</h6>
          <p class="text-justify">Abrir formalmente la proposición temas y actividades
             relacionadas que no hayan sido contemplados en la definición de los demás ejes temáticos.</p>
        </div>
          <div class="col-md-8  text-left tbl-container ">
              <table class="table table-sm table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th class="text-center p-3">Contenido</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-4">8.1 No se definen intencionalmente: se crearán a partir de la presentación de
                        propuestas de las personas que participen en el encuentro en el período de registro de ponencias.</td>
                    </tr>
                  </tbody>
              </table>
          </div>
        </div>
    </div>



    </div>
<br><br>
</div>
<!-- /.container -->
@parent
@stop
