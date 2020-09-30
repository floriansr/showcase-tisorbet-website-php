$(document).scroll(function() {
  var y = $(this).scrollTop();
  var x = $(document).width();
  
  if (y > 126 && x > 1000 ) {
	$('.small-menu-container').show();

	$('.top-logo-small').stop().animate({ left: '0px' },'fast');
	$('.top-cotiza-small').stop().animate({ right: '5px' },'fast');
	
  } else {
  
	$('.small-menu-container').hide();
	$('.top-logo-small').stop().animate({ left: '-300px' },'fast');
	$('.top-cotiza-small').stop().animate({ right: '-180px' },'fast');

  }
});

function homepage(){
	
	$("#captionbox-right").animate({
		//width: "show"
		right: "0"
	},1000);
	
	$("#captionbox-left").animate({
		//width: "show"
		left: "0"
	},1000);
	
}

function toogleCotizador(){
$('html,body').animate({ scrollTop: 0 }, 'slow');
$('.cotizador').slideToggle();
$('.hamburger-menu').hide();
}

function toogleHamburger(){
$('.hamburger-menu').slideToggle();
$('.cotizador').hide();
}

function videoHideFullscreen(){
	$(".video-outerframe-fullscreen").fadeOut("slow");
	$('video').trigger('pause');
	
	$("#captionbox-right").animate({
		//width: "show"
		right: "0"
	},1000);
	
	$("#captionbox-left").animate({
		//width: "show"
		left: "0"
	},1000);
	
}

function scroller(targetDivID) {
 $('html, body').animate({
	scrollTop: $("#"+targetDivID).offset().top - 65
 }, 500);
}

