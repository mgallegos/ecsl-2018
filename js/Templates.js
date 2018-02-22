
$("a").click(function(e){

  e.stopPropagation();

  var className = this.getAttribute("class");

  if( className == "nav-link ml-3 my-1"){

    if($("a.active").attr("class") === "nav-link ml-3 my-1 active"){
      $("a.active").attr("class","nav-link ml-3 my-1");
    }else{
        $("a.active").attr("class","nav-link font-weight-bold");
    }

    this.setAttribute("class","nav-link ml-3 my-1 active");

  }else{

    if($("a.active").attr("class") === "nav-link ml-3 my-1 active" ){
      $("a.active").attr("class","nav-link ml-3 my-1");
    }else{
        $("a.active").attr("class","nav-link font-weight-bold");
    }

    this.setAttribute("class","nav-link font-weight-bold active");
  }
});
