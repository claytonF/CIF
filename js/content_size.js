 $(document).ready(function() {

var viewportwidth = window.innerWidth;
if(viewportwidth > 767) {	 
   var wHeight = $(document).innerHeight();
   var headerHeight = $('header').innerHeight();
   var newsHeight = $('#news_container').innerHeight(); 
   var footerHeight = $('footer').innerHeight();
    
   $('#home_content').height(wHeight - (headerHeight+newsHeight+footerHeight+4));
  };




//$('.film_container').height(($('.film_container').width()/16)*9);


 
});
 
