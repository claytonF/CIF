<?php 
$thisSection = "home";
$title = " | homepage"; 

?>
<?php include("includes/header.php"); ?>
    <div class="content" id="home_content">
    <div id="cover_ads">
    	<a href="dayReturn.php"><img src="images/coverPosters/dayReturnPoster_Facebook.jpg" class="coverPoster" /></a>
    </div>
    </div>
    
    <div id="news_container">
    <img src="images/divider.png" width="100%" height="1" class="divider" id="news_divider" />
        
        <div class="news_slider" >
            <ul id="twitter-feed" class="slides"></ul>
        </div>
                        
<?php include("includes/footer.php"); ?>