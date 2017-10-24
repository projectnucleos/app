function LoadingBarPorc(valueBar, statusBarProgress){
   	$(".loading-bar").css("width", valueBar+"%");
   	$(".info-right.porc span").remove();
   	$(".info-right.porc").append("<span>"+valueBar+"%</span>");
   	$(".info-left.status span").remove();
   	$(".info-left.status").append("<span>"+statusBarProgress+"</span>");
}