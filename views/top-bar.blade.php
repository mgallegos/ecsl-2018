<!-- Barra de Navegacion -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand d-none d-md-block" href="index.html">X Encuentro Centroamericano de Software Libre - 2018</a>
    <a class="navbar-brand d-md-none" href="index.html">X ECSL - 2018</a>
    <!-- <img src="img/Logo.png" width="70" height="40" class="d-inline-block" alt=""> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarinfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Información General
              </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarinfo">
            <a class="dropdown-item" href="{{URL::to('cms/ecsl2018/logistica')}}"><i class="fa fa-info-circle" aria-hidden="true"></i> Logística</a>
            <!-- <a class="dropdown-item" href="{{URL::to('cms/ecsl2018/faq')}}"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Preguntas Frecuentes</a> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarEvento" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Evento
              </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarEvento">
            <!-- <a class="dropdown-item" href="{{URL::to('cms/ecsl2018/registro')}}"><i class="fa fa-address-card-o" aria-hidden="true"></i> Registro</a> -->
            <a class="dropdown-item" href="{{URL::to('cms/ecsl2018/ejes-tematicos')}}"><i class="fa fa-list-ul" aria-hidden="true"></i> Ejes Temáticos</a>
            <!-- <a class="dropdown-item" href="{{URL::to('cms/ecsl2018/agenda')}}"><i class="fa fa-calendar" aria-hidden="true"></i>  Agenda</a> -->
          </div>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="eventos-anteriores.html">Eventos Anteriores</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#Contact" role="button">Contacto</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
