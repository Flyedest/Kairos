var xl = 1200;
var lg = 992;
var md = 768;
var sm = 576;
var filler;
var div;
var height;
function getDeviceWidth(width){
	return (width-6);
}

function scrollHandler(){
	if($(window).scrollTop()>=100 || $(window).width()<sm){
		$(".menu-scroll")
		.css("height", "51px")
		.css("padding", "inherit");
		$(".navbar-brand-scroll")
		.css("font-size", "1.5em");
		$(".div-drop")
		.css("margin-top", "0");
	} else{
		$(".menu-scroll")
		.css("height", "85px")
		.css("padding", "17.5px 0");		
		$(".navbar-brand-scroll")
		.css("font-size", "3.5em");
		if($(window).width()<getDeviceWidth(md)){
			$(".div-drop")
			.css("margin-top", "16px");
		} else{
			$(".div-drop")
			.css("margin-top", "0");
		}
	}
	$(".teste").text("Scroll top:" + $(window).scrollTop() + " Altura da div filler: " + $(".filler").height() + "variável height: " + height);

}

$(".navbar-toggle").click(function(){
	filler = $(".filler").height();
	div = $(".div-drop").height();
	height = filler + div;
	$(".filler")
	.css("height", height);
});

$(window).scroll(function(){
	scrollHandler();
});
$(window).ready(function(){
	scrollHandler();
});
$(window).resize(function(){
	scrollHandler();
});

