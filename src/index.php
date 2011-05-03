<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

	    <title>lctn.me | A Location Portal - Find it, Share it</title>

		<noscript>
			<meta http-equiv="Refresh" content="0; URL=noscript.php" />
		</noscript> 

		<!-- [if IE 6]> 
			<meta http-equiv="Refresh" content="0; URL=ie6.php" />  
		<![endif] -->


		<link rel="stylesheet" href="css/screen.css" type="text/css"/>
		<link rel="stylesheet" href="css/layout.css" type="text/css"/>
		<link rel="stylesheet" href="css/displaybox.css" type="text/css"/>
		<link rel="stylesheet" href="css/jquery-tools.css" type="text/css"/>
		<link rel="stylesheet" href="css/overlay.css" type="text/css"/>
		<link rel="stylesheet" href="css/menu2.css" type="text/css"/>

	</head>

	<body onload="load()">

		<script src="//static.getclicky.com/js" type="text/javascript"></script>
		<script type="text/javascript">try{ clicky.init(66405769); }catch(e){}</script>
		<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66405769ns.gif" /></p></noscript>

		<div id="map_canvas" class="map_background"></div>

		<div style="z-index: 10000; display: inline;" id="message_container" class="message-box">
			<div id="message"></div>
		</div>

		<!-- overlay element -->
		<div class="apple_overlay" id="overlay">
			<!-- the external content is loaded inside this tag -->
			<div class="contentWrap"></div>
		</div>

<!-- Used to display a fullscreen image -->
		<div id="displaybox-no-opacity" onclick="fullscreenImage();" style="display: none; z-index: 9000"></div>
		<?php 
			include("menu2.php");
		?>
 	
		<?php 
			include("loading.php");
		?>

<!-- 
		<div id="addthis" class="addthis">
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_tweet"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			</div>
		</div>
		<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=ricktonoli"></script>
-->
		    <?php 
		    
			include("container/twitter.php");
			include("container/streetview.php");
			include("container/wiki.php");
			include("container/general.php");
			include("container/webcam.php");
			include("container/route.php");
			include("container/picture.php");
			include("container/places.php");
//			include("container/user.php");
//			include("container/ads.php");

			if (!(isset($_COOKIE["show_startup"]) || ($_COOKIE["show_startup"] == "false"))) {
				include("startup.php");
			}
			
			?>

<!-- JQuery API -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<!-- JQuery Tools API -->
		<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/all/jquery.tools.min.js"></script>
<!-- JQuery UI -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.js"></script>


<!-- 
		<script src="http://connect.facebook.net/en_US/all.js"></script>
		<div id="facebook-login" class="facebook-login">
			<div id="fb-root"></div>
			<script>

				FB.init({ 
		            appId:'179640572057712', 
		            cookie:true, 
		            status: true, 
		            xfbml:true 
		         });
			
		         FB.Event.subscribe('auth.login', function(response) {
		        	 window.location.reload();
		         });

		         FB.Event.subscribe('auth.logout', function(response) {
		        	 window.location.reload();
		         });
		         
		         if (FB.getSession()) {
		        	 user = FB.getSession().uid;
		        	 FB.api('/me', function(response) {
		        		 $("#facebook-login").html("<img src='http://graph.facebook.com/" + response.id + "/picture'/>");
		        		 $("#user").html(response.first_name);
		        	 });
		         }
			</script>
-->
			<?php //if (isset($_COOKIE["fbs_179640572057712"])) {?>
			
<!-- 
				<fb:profile-pic uid='loggedinuser' width='50px' height='50px'></fb:profile-pic>
				&nbsp;You are logged in as <fb:name uid='loggedinuser' useyou='false'></fb:name> 
 -->
			<?php //} else {?>
<!--  				<fb:login-button>Login with Facebook</fb:login-button>  --> 
			<?php // }?>
		</div>

		<?php //if (isset($_COOKIE["fbs_179640572057712"])) {?>
<!-- 
			<div class="facebook-like">
				<fb:like href="http://lctn.me" show_faces="true" width="450" layout="button_count"></fb:like>				
			</div>
 -->
 		<?php // }?>
<!-- 
		<div id="find" class="find inline">
			<img class="find-navigate" src="images/previous.png" title="Previous find request" onclick="previousSearch()"/>
			<img class="find-navigate" src="images/next.png" title="Next find request" onclick="nextSearch()"/>
			<div title="Built <?php echo date("l, dS F, Y @ h:ia", filemtime("index.php")); ?> GMT+2" id="beta">BETA</div>
		</div>
 -->

<!-- Google Maps API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

		<script type="text/javascript" src="http://www.google.com/jsapi"></script>



<!-- Gears API for geolocation -->
 		<script type="text/javascript" src="js/gears_init.js"></script> 

<!-- Java Ajax API for Ajax calls -->
		<script type="text/javascript" src="js/jxs.js"> </script>

<!-- JQuery Cookie API -->
		<script type="text/javascript" src="js/jquery-cookie.js"> </script>

<!-- Interface API for Drag and Drop -->
		<script type="text/javascript" src="js/interface.js"></script>

<!-- UserVoice API for connecting to UserVoice -->
		<script type="text/javascript" src="js/uservoice.js"></script>

<!-- Base 64 Conversion script -->
		<script type="text/javascript" src="js/base64.js"></script>

<!-- Flowplayer Javascript for playing movies -->
		<script type="text/javascript" src="js/flowplayer-3.2.4.min.js"></script>

<!-- Script for Printing -->
		<script type="text/javascript" src="js/jqprint.js"></script>

<!-- Custom Javascripts for each window -->
		<script type="text/javascript" src="js/places.js"></script>
		<script type="text/javascript" src="js/twitter.js"> </script>
		<script type="text/javascript" src="js/weather.js"> </script>
		<script type="text/javascript" src="js/webcam.js"> </script>
		<script type="text/javascript" src="js/wikipedia.js"> </script>
		<script type="text/javascript" src="js/timezone.js"> </script>
		<script type="text/javascript" src="js/route.js"></script>
		<script type="text/javascript" src="js/config.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
<!-- 		
		<script type="text/javascript" src="js/user.js"></script>
		<script type="text/javascript" src="js/stats.js"></script>  
-->
		<script type="text/javascript" src="js/picture.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
<!-- 
		<script type="text/javascript" src="js/jquery.ui.touch.js"></script>
 -->
	</body>

</html>
