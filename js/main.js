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

var post_offset, increment,total;
var pathname = window.location.pathname;
(function($) {
  var count = 2;
  $(window).scroll(function(){
          if($(window).scrollTop() == $(document).height() - $(window).height())
          {
            if(count > total){
	            return false;
	        }else{
	        	loadArticle(count);
	        }
	        count++;                                       
          }
  }); 

  function loadArticle(pageNumber){    
          $('a#inifiniteLoader').show('fast');
          var parametros="action=infinite_scroll&page_no="+pageNumber+ '&loop_file=loop'+'&offset='+post_offset;
          $.ajax({
              url: pathname+"wp-admin/admin-ajax.php",
              type:'POST',
              data: parametros, 
              success: function(html){
              	post_offset+=increment;
                  $('a#inifiniteLoader').hide('1000');
                  $("#container-post-home").append(html);
                      // This will be the div where our content will be loaded
              }
          });
      return false;
  }

}(jQuery));
