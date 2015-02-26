(function($){
	/*efectos menu movil*/
	
	$( window ).resize(function() {
		if($(document).width()>767){
			$(".menu-principal").removeAttr("style");
			$('.show-menu').removeClass("show-menu-on");
			$("#show-search-box").removeAttr("style");
		}
 	 	
	});
	/*Menu flotante*/
	$(window).bind('scroll',function(){
		/*if($(window).scrollTop()>255){
			$('.menu-principal').addClass("menu-flotante");
		}else{
			$('.menu-principal').removeClass("menu-flotante");
		}*/
		if($(window).scrollTop()>800){
			$('.semi-circle').fadeIn("slow");
			$('.semi-circle').css("display","block");
		}else{
			$('.semi-circle').fadeOut("slow",function(){
				$('.semi-circle').css("display","none");
			});
		}
	});
}(jQuery));
$(document).ready(function(){

	$('a#irArriba').click(function(e){
		e.preventDefault(e);
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});

	$('.show-menu').on("click",function(event){
		$(this).toggleClass( "show-menu-on" );
		//$(".menu-principal").toggle(300);
		$(".menu-principal").slideToggle(300);

	});



	$('.search-top').on("click",function(event){
		$("#show-search-box").toggle(190);
	});
});