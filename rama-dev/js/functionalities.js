$(window).scroll(function()
{
  
  if( $(".show").find(".active").length == 0){
     //$(".collapse").removeClass("show");
     $(".collapse").collapse('hide');
  }

  if( $("a.active") && !($("a.active").parents(".show").eq(2).length) ){
    //$("a.active").parents().eq(2).addClass("show");
    $("a.active").parents().eq(2).collapse('show');
  }
  

});

$("a.list-group-item").click(function()
{
  // alert("click");  
    // $(this).parents(".collapse").eq(2).addClass("show");
    if( $(this).parents(".collapse").eq(2).length == 0 ){
      $(this).parents(".collapse").eq(2).collapse('show');
    }
    

});

