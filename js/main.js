$(function(){
	/*efectos menu movil*/
	
	$('.show-menu').on("click",function(event){
		$(this).toggleClass( "show-menu-on" );
		$(".menu-principal").toggle(100);

	});
	$('.search-top').on("click",function(event){
		$("#show-search-box").toggle(190);
	});
	$( window ).resize(function() {
		if($(document).width()>767){
			$(".menu-principal").removeAttr("style");
			$('.show-menu').removeClass("show-menu-on");
			$("#show-search-box").removeAttr("style");
		}
 	 	
	});

	/*Menu flotante*/
	$(window).bind('scroll',function(){
		if($(window).scrollTop()>255){
			$('.menu-principal').addClass("menu-flotante");
		}else{
			$('.menu-principal').removeClass("menu-flotante");
		}
	});


  	$("#owl-slider").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 	  autoPlay: 3000
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  	});
  	var owl = $("#owl-slider");
  	// Custom Navigation Events
	  $(".next").click(function(){
	    owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
	    owl.trigger('owl.prev');
	  })

});

var post_offset, increment,loading=0;
var url = window.location.href;  

(function($){
	$(document).ready(function(){
		$(window).bind('scroll',checkScroll);
	});

	var checkScroll = function (e){
		var elem = $(e.currentTarget);
		if($(window).scrollTop() + $(window).height() + 600 > $(document).height()) {
			if(loading) return true;
			if(!loading) {
				loading=1;
				var params = {"offset":post_offset,"action":"load_more"}
				$.post(url+"wp-admin/admin-ajax.php",params,function(data){
					if(data){
						post_offset+=increment;
						loading=0;
						$("#container-post-home").append(data);
					}

				});
		//now load more content
		}
	}
}
}(jQuery));