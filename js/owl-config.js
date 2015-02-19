$(document).ready(function() {
	$("#owl-slider").owlCarousel({
 	  slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 	  autoPlay: 3000
    });
  	
  	var owl = $("#owl-slider");
  	
  	$(".next").click(function(){
	  owl.trigger('owl.next');
	});

	$(".prev").click(function(){
	  owl.trigger('owl.prev');
	});
});
