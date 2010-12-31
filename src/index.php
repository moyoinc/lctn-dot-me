<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

	    <title>lctn.me | A Location Portal - Find it, Share it</title>

		<noscript>
			<meta http-equiv="Refresh" content="0; URL=error/noscript.php" />
		</noscript> 

		<!-- [if IE 6]> 
			<meta http-equiv="Refresh" content="0; URL=error/ie6.php" />  
		<![endif] -->


		<link rel="stylesheet" href="css/screen.css" type="text/css"/>
		<link rel="stylesheet" href="css/layout.css" type="text/css"/>
		<link rel="stylesheet" href="css/displaybox.css" type="text/css"/>
		<link rel="stylesheet" href="css/jquery-tools.css" type="text/css"/>
		<link rel="stylesheet" href="css/menu.css" type="text/css"/>

	</head>

	<body onload="load()">

		<!-- overlay element -->
		<div class="apple_overlay" id="overlay">
			<!-- the external content is loaded inside this tag -->
			<div class="contentWrap"></div>
		</div>

		<div id="displaybox" onclick="beta();" style="display: none;"></div>

		<?php 
			include("menu.php");
		?>
			<div id="addthis" class="addthis">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_pill_combo addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=ricktonoli"></script>
				<!-- AddThis Button END -->
			</div>
	
		<?php 
			include("container/find.php");
			include("container/share.php");
			include("container/map.php");
			include("container/twitter.php");
			include("container/streetview.php");
			include("container/wiki.php");
			include("container/general.php");
			include("container/webcam.php");
			include("container/places.php");
			include("container/message.php");
			//			include("container/ads.php");
			?>

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAANICyL01ax9PqYKeJwtOXfxTh05SPp9XRgWyeCyc0ee48nkavlxTTkteFyCb29mhFOfEeXVaj-F6hAw"></script>

		<script type="text/javascript" src="http://cdn.simplegeo.com/js/1.2/simplegeo.places.min.js"></script>



 		<script type="text/javascript" src="js/gears_init.js"></script> 
		<script type="text/javascript" src="js/jxs.js"> </script>
		<script type="text/javascript" src="js/jquery-cookie.js"> </script>
		<script type="text/javascript" src="js/interface.js"></script>

		<script type="text/javascript" src="js/twitter.js"> </script>
		<script type="text/javascript" src="js/weather.js"> </script>
		<script type="text/javascript" src="js/webcam.js"> </script>
		<script type="text/javascript" src="js/wikipedia.js"> </script>
		<script type="text/javascript" src="js/timezone.js"> </script>
		<script type="text/javascript" src="js/places.js"></script>
		<script type="text/javascript" src="js/uservoice.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/config.js"></script>

		<script type="text/javascript" src="js/jquery.color.js"></script>

		<script type="text/javascript" src="js/menu.js"></script>

	</body>

</html>
