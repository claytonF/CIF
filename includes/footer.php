    <footer id="<?php if ($thisPage == "home") {echo "home_footer"; } else {echo "footer"; } ?>">
        <img src="images/divider.png" width="100%" height="1" class="divider" />
    	<ul class="social_icons">
        	<li><a href="http://www.facebook.com/cottageIndustryFilms" target="_blank" class="facebook_link"></a></li>
        	<li><a href="https://vimeo.com/user6059569" target="_blank" class="vimeo_link"></a></li>
        	<li><a href="http://twitter.com/#!/cottageFilms" target="_blank" class="twitter_link"></a></li>
        	<li><a href="http://www.youtube.com/user/CottageIndustryFilms" target="_blank" class="youtube_link"></a></li>
        	<li><a href="http://www.linkedin.com/company/cottage-industry-films?trk=ppro_cprof" target="_blank" class="linkedIn_link"></a></li>
        	<li class="last_icon"><a href="http://www.flickr.com/photos/cottageindustryfilms/" target="_blank" class="flickr_link"></a></li>
		</ul>
        <div id="copyright_container">
        	<div class="twitter_badge"><a href="https://twitter.com/cottageFilms" class="twitter-follow-button" data-show-count="false">Follow @cottageFilms</a></div>
            <div id="copyright">All content &copy; Cottage Industry FIlms 2012 | site design <a href="http://www.claytonfussell.co.uk" target="_blank">CFussell</a></div>

        </div>

    </footer>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<?php if($thisSection != "films") {echo "<script src=\"js/film_menu.js\"></script>";} ?>
<?php if($thisSection == "films") {echo "<script type=\"text/javascript\">
 $(document).ready(function() {

	$('#film_nav').css({'display':'block'});
	
     
 });

</script>";} ?>

<?php if($thisSection == "films" || $thisSection == "home") {echo "
<script src=\"flexislider/jquery.flexslider-min.js\"></script>";} ?>
<?php if($thisSection == "home") {echo "
<script type=\"text/javascript\">
	$(window).load(function() {
		$('.news_slider').flexslider({
		  animation: \"slide\",
		  controlsContainer: \".flexslider-container\"
	  });
	});
</script>";} ?>
<?php if($thisSection == "films") {echo "
<script type=\"text/javascript\">
$(document).ready(function() {
	$('.film_container').height(($('.film_container').width()/16)*9);
});
</script>


<script type=\"text/javascript\">


$('.scroll_filmDetails').click(function(event) {
	event.preventDefault();
	$('#slide_filmCastCrew').fadeOut();
	$('#slide_filmInfo').fadeIn();
	if($('#showSubMenu').is(\":visible\")) {
		$('.film_submenu').addClass('m_submenu');
	}
	if($('.film_submenu').is(\":visible\")) {
		$('.m_submenu').slideUp();
	}
	
});
$('.scroll_castCrew').click(function(event) {
	event.preventDefault();
	$('#slide_filmInfo').fadeOut();
	$('#slide_filmCastCrew').fadeIn();
	if($('#showSubMenu').is(\":visible\")) {
		$('.film_submenu').addClass('m_submenu');
	}
	if($('.film_submenu').is(\":visible\")) {
		$('.m_submenu').slideUp();
	}
	
});
$('#showSubMenu').click(function(event) {
	event.preventDefault();
	$('.film_submenu').slideToggle();
});


</script>
<script src=\"fancybox/js/fancybox/jquery.fancybox.js\"></script>
<script src=\"fancybox/js/fancybox/jquery.fancybox-buttons.js\"></script>
<script src=\"fancybox/js/fancybox/jquery.fancybox-thumbs.js\"></script>
<script src=\"fancybox/js/fancybox/jquery.easing-1.3.pack.js\"></script>
<script src=\"fancybox/js/fancybox/jquery.mousewheel-3.0.6.pack.js\"></script>
<script type=\"text/javascript\">
	$(document).ready(function() {
	$(\".fancybox\").fancybox();
	});
</script>"


;} ?>
<?php if($thisSection == "home") {echo "<script type=\"text/javascript\" src=\"js/feed-reader.js\"></script>";} ?>

<?php if($thisSection == "contact") {echo "<script type=\"text/javascript\" src=\"js/contactForm.js\"></script>";} ?>

        
        

</body>
</html>
