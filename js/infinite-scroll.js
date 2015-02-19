var post_offset, increment,total;
var pathname = window.location.pathname;
var loading=0;
(function($) {
  var count = 2;
  $(window).scroll(function(){
  		  if($(window).scrollTop() == $(document).height()-$(window).height())
          {
          	if(loading) return true;
			if(!loading) {
				loading=1;
	          	if(total>1)     	{
	                if(count > total){
			            return false;
			        }else{
			        	loadArticle();
			        }
			        count++;                                       
	            	
	            }
        	}
            
          }
  }); 

  function loadArticle(){    
  		  $('#inifiniteLoader').show('fast');
          var parametros="action=infinite_scroll&"+"&offset="+post_offset;
          $.ajax({
              url: pathname+"wp-admin/admin-ajax.php",
              type:'POST',
              data: parametros, 
              success: function(html){
              	loading=0;
			   	post_offset+=increment;
              	$('#inifiniteLoader').hide('1000');
                $("#container-post-home").append(html);
                      // This will be the div where our content will be loaded
              }
          });
      return false;
  }

}(jQuery));
