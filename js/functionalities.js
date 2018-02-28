$(window).scroll(function()
{
  if( $("a.active") && !($("a.active").parents(".show").eq(2).length) ){
    $("a.active").parents().eq(2).addClass("show");
  }
  if( !($("a.active").length) && $("a.active").parents(".show").eq(2) ){
     $("a.active").parents().eq(2).removeClass("show");
  }

});