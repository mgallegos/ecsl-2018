@extends('ecsl-2018::base')

@section('global-js')
  var iterator = 1
  var imagesToShow = 20
  var maxTop = 110
@stop

@section('page-js')

  if (iterator == 1) {
    renderImages(imagesToShow, 1)
  }

  $(window).scroll(function(event) {
    debugger
    var flag = document.documentElement.scrollHeight - document.documentElement.scrollTop === document.documentElement.clientHeight
    var top = iterator * imagesToShow
    console.log(flag)
    if (flag) {
      iterator ++

      var top = iterator * imagesToShow
      var initialValue = Math.abs(imagesToShow - top) + 1

      renderImages (top, initialValue)
    }
  })

  function renderImages (top, initialValue) {
    for (var i = initialValue; i <= top && i <= maxTop; i++) {
      if (i < 10) {
        $(".collage").append("<a href='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00" + i + ".jpg' data-toggle='lightbox' data-gallery='gallery-one'><img src='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00" + i + ".jpg' class='img-fluid collage-img'></a>")
      }else if (i > 99) {
        $(".collage").append("<a href='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_00" + i + ".jpg' data-toggle='lightbox' data-gallery='gallery-one'><img src='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_" + i + ".jpg' class='img-fluid collage-img'></a>")
      }else {
        $(".collage").append("<a href='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0" + i + ".jpg' data-toggle='lightbox' data-gallery='gallery-one'><img src='https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_0" + i + ".jpg' class='img-fluid collage-img'></a>")
      }

    }
  }
@stop

@section('container')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Fotografías</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{URL::to('cms/inicio')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
    </li>
    <!-- <li class="breadcrumb-item">Evento</li> -->
    <li class="breadcrumb-item active">Fotografias</li>
  </ol>

  <!-- <a href="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018.jpg" data-toggle="lightbox" data-gallery="gallery-one">
      <img src="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018.jpg" class="img-fluid collage-img">
  </a> -->
  <a href="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018_1.jpg" data-toggle="lightbox" data-gallery="gallery-one">
      <img src="https://storage.googleapis.com/decimaerp/organizations/15/ECSL_OFICIAL_2018_1.jpg" class="img-fluid collage-img">
  </a>

  <div class="collage">

  </div>


<br><br>
</div>
<!-- /.container -->
@parent
@stop
