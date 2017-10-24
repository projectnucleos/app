function LoadingBarPorc(valueBar, statusBarProgress){
	var porcBar = valueBar;
	var statusBar = statusBarProgress;
   	$(".loading-bar").css("width", porcBar+"%");
   	$(".info-right.porc span").remove();
   	$(".info-right.porc").append("<span>"+valueBar+"%</span>");
   	$(".info-left.status span").remove();
   	$(".info-left.status").append("<span>"+statusBar+"</span>");
}