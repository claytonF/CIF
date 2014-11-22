<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="google-site-verification" content="BnUCdKEfMwcKhi1Uxeci2_iu-OxnlPEi1Dzontcl0us" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<meta name="description" content="<?php echo $thisDescription ?>" />


<title>Cottage Industry Films<?php echo $title ?></title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"/>
<link rel="image_src" href="images/imageLink.jpg" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<link href="css/style.css" rel="stylesheet" media="all" />
<!-- Hook up the FlexSlider -->
<link href="flexislider/flexslider.css" rel="stylesheet" media="all" />

 <link rel="stylesheet" href="fancybox/css/fancybox/jquery.fancybox-buttons.css">
 <link rel="stylesheet" href="fancybox/css/fancybox/jquery.fancybox-thumbs.css">
 <link rel="stylesheet" href="fancybox/css/fancybox/jquery.fancybox.css">


</head>

<body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16785580-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=370509242999091";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="container">

	<header>
    	<a href="index.php" class="logo"></a>
        <nav>
        	<ul id="main_nav">
            	<li><a href="index.php" class="home_link <?php if($thisSection == "home") {echo "home_selected";} ?>"><span>Home</span></a></li>
                <li><a href="about.php" class="about_link <?php if($thisSection == "about") {echo "about_selected";} ?>"><span>About us</span></a></li>
                <li><a href="#" class="films_link <?php if($thisSection == "films") {echo "films_selected";} ?>"><span>Films</span></a></li>
                <li><a href="contact.php" class="contact_link <?php if($thisSection == "contact") {echo "contact_selected";} ?>"><span>Contact us</span></a></li>
            </ul>
        </nav>
        <div id="film_nav">
        <img src="images/divider.png" width="100%" height="1" class="divider" />
          <ul>
          	<li><a class="dayReturn_link <?php if($thisPage == "dayReturn") {echo "dayReturn_selected";} ?>" href="dayReturn.php"><span>Day Return</span></a></li>
        	<li><a class="robbingPeter_link <?php if($thisPage == "robbingPeter") {echo "robbingPeter_selected";} ?>" href="robbingPeter.php"><span>Robbing Peter</span></a></li>
            <li><a class="omg_link <?php if($thisPage == "omg") {echo "omg_selected";} ?>" href="omg.php"><span>OMG</span></a></li>
            <li><a class="hdk_link <?php if($thisPage == "hdk") {echo "hdk_selected";} ?>" href="hdk.php"><span>A Hard Day's Knight</span></a></li>
            <li><a class="poppies_link <?php if($thisPage == "poppies") {echo "poppies_selected";} ?>" href="poppies.php"><span>Poppies</span></a></li>
            <li><a class="disturbed_link <?php if($thisPage == "disturbed") {echo "disturbed_selected";} ?>" href="disturbed.php"><span>Disturbed</span></a></li>
          </ul>
       </div>
    </header>

    <img src="images/divider.png" width="100%" height="1" class="divider" />