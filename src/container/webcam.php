<div onmouseover="$(this).css('z-index', '100')" onmouseout="$(this).css('z-index', '10')" id="webcam_container" class="draggable panel">
	<span>
		<div class="header-left" title="Shows webcams available in the area. Maximum 50 results">
			Webcams
		</div>
		<div class="header-right">
			<img class="window-close" onclick="closeWindow($(this).parent().parent().parent().attr('id'))" src="/images/close.png"/>
		</div>
	</span>
 	<div class="detail-padded">
		<center>
			Show me all the webcams for <input title="How big of an area would you like to search for webcams?" class="short-text" type="text" name="webcam_range" id="webcam_range" value="5" onkeypress="if (event.keyCode == 13) { updateWebcamLocationInformation(); }"/> km(s)
			<input class="action-button" type="button" id="filter_now" name="filter_now" value="Go" onclick="updateWebcamLocationInformation();"/>
		</center>
	</div>
	<div class="detail-padded fixed-height-block-with-title">
		<div id="webcam_stream"></div>
	</div>
	<span>
	<div class="footer-text fixed-height-footer">
    	<div id="webcam_footer"></div>
	</div>
	</span>
</div>
