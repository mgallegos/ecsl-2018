<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="icon" href="https://storage.googleapis.com/decimaerp/organizations/8/Cabeza_Ob_vectorx16.ico"> -->
	<link rel="shortcut icon" href="http://www.slsv.org/sites/all/themes/business/favicon.ico" type="image/vnd.microsoft.icon" />
	<meta charset="utf-8">
	@include('layouts.header-css-cdn-b4-latest')
	@include('layouts.header-javascript-cdn-b4-latest')
	@include('ecsl-2018::css')
	@include('ecsl-2018::js')
	<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23678568-9', 'auto');
  ga('send', 'pageview');
</script> -->
	@yield('javascript')
	<title>ECSL2018</title>
	<!-- for Google -->
	<!-- <meta name="description" content="{{isset($ogDescription)?$ogDescription:'Ob\'s World es el primer webcomic creado en El Salvador por Oscar Bladimir Hernández Sandoval conocido como Ob Sandoval y publicado por primera vez en Facebook en julio del 2013.'}}" />
	<meta name="keywords" content="ECOMMERCE,TIENDA,SV,ecsl-2018,ecsl-2018SV,COMPRALOCAL,COMPRALOCALSV"/> -->
	<!-- for Facebook -->
	<!-- <meta property="og:title" content="{{isset($ogTitle)?$ogTitle:'Ob\'s World'}}" />
	<meta property="og:description" content="{{isset($ogDescription)?$ogDescription:'Ob\'s World es el primer webcomic creado en El Salvador por Oscar Bladimir Hernández Sandoval conocido como Ob Sandoval y publicado por primera vez en Facebook en julio del 2013.'}}" /> -->
	@if(isset($ogImage))
		<!-- <meta property="og:image" content="{{$ogImage}}" /> -->
	@endif

</head>
<body id='body'>
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
	<div class="site-background-color footer-margin"></div>
  @include('ecsl-2018::footer')
	@include('ecsl-2018::terminosycondiciones')
	@include('ecsl-2018::avisoconstruccion')
	<script type='text/javascript'>
		{!! FormJavascript::getGlobalCode() !!}
		$(document).ready(function(){
			{!! FormJavascript::getCode() !!}
		});
	</script>
	<button id="back-to-top" type="button" class="btn btn-dark" style="top: inherit;"><i class="fa fa-chevron-up"></i></button>
	<!-- <button id="obs-login" type="button" class="btn btn-default"><i class="fa fa-user"></i></button> -->
</body>
</html>
