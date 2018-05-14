<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="icon" href="https://storage.googleapis.com/decimaerp/organizations/8/Cabeza_Ob_vectorx16.ico"> -->
	<link rel="shortcut icon" href="https://storage.googleapis.com/decimaerp/organizations/15/favico.png" type="image/vnd.microsoft.icon" />
	<meta charset="utf-8">
	@include('layouts.header-css-cdn-b4-latest')
	@include('layouts.header-javascript-cdn-b4-latest')
	@include('ecsl-2018::css')
	@include('ecsl-2018::js')
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23678568-10"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23678568-10');
	</script>
	@yield('javascript')
	<title>ECSL 2018</title>
	<!-- for Google -->
	<meta name="description" content="{{isset($ogDescription)?$ogDescription:'El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado desde el año 2009 por y para la comunidad Software Libre Centroamérica (SLCA). El ECSL es una reunión de activistas y miembros de comunidades y grupos de usuarios/as que sirve como punto de encuentro y espacio de articulación, educación, coordinación e intercambio de ideas para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y desarrollo del Software Libre en la región.'}}" />
	<meta name="keywords" content="ECSL2018,SLSV,SV,ecsl-2018,ecsl-2018SV"/>
	<!-- for Facebook -->
	<meta property="og:title" content="{{isset($ogTitle)?$ogTitle:'Encuentro Centroamericano de Software Libre 2018'}}" />
	<meta property="og:description" content="{{isset($ogDescription)?$ogDescription:'El Encuentro Centroamericano de Software Libre (ECSL) es un evento anual organizado desde el año 2009 por y para la comunidad Software Libre Centroamérica (SLCA). El ECSL es una reunión de activistas y miembros de comunidades y grupos de usuarios/as que sirve como punto de encuentro y espacio de articulación, educación, coordinación e intercambio de ideas para fortalecer acuerdos y formas de trabajo conjuntas que faciliten la promoción del uso y desarrollo del Software Libre en la región.'}}" />
	@if(isset($ogImage))
		<meta property="og:image" content="{{$ogImage}}" />
	@else
		<meta property="og:image" content="https://storage.googleapis.com/decimaerp/organizations/15/carousel3.jpg" />
	@endif
</head>
<body  data-spy="scroll" data-target="#sideLogistica" id='body'>
	<header>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1449107735377420";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<script>window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);

		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };

		  return t;
		}(document, "script", "twitter-wjs"));</script>
		<a href="#page-container" class="sr-only">Skip to content</a>
		@include('ecsl-2018::top-bar')
	</header>
	<main role="main">
		<div id='page-container' class="site-background-color" role="main" data-current-page-width="">
			<fieldset id="main-panel-fieldset">
	      @section('container')
	      @show
				{!! Form::button('<i class="fa fa-circle-o-notch fa-spin fa-lg"></i> Cargando', array('id' => 'app-loader', 'class' => 'btn btn-outline-info btn-disable btn-lg app-loader hidden-xs-up', 'disabled' => 'disabled')) !!}
				{!! Form::hidden('app-url', URL::to('/'), array('id' => 'app-url')) !!}
				{!! Form::hidden('app-token', Session::token(), array('id' => 'app-token')) !!}
				{!! Form::hidden('app-kwaai', '', array('id' => 'app-kwaai')) !!}
			</fieldset>
		</div>
		@include('ecsl-2018::main/contact')
		<!-- <div class="site-background-color footer-margin"></div> -->
		@include('ecsl-2018::main/terminosycondiciones')
		@include('ecsl-2018::main/avisoconstruccion')
		<script type='text/javascript'>
			{!! FormJavascript::getGlobalCode() !!}
			$(document).ready(function(){
				{!! FormJavascript::getCode() !!}
			});
		</script>
		<button id="back-to-top" type="button" class="btn btn btn-success" style="top: inherit;padding: .375rem .75rem;"><i class="fa fa-chevron-up"></i></button>
		<!-- <button id="obs-login" type="button" class="btn btn-default"><i class="fa fa-user"></i></button> -->
	</main>
	@include('ecsl-2018::main/footer')
</body>
</html>
