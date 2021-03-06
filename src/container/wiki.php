<div  onmouseover="$(this).css('z-index', '100')" onmouseout="$(this).css('z-index', '10')" id="wiki_container" class="draggable panel">
	<span>
		<div class="header-left" title="Shows all wikipedia articles in the area (20 results maximum, 20km maximum range)">
			Wikipedia
		</div>
		<div class="header-right">
			<img class="window-close" onclick="closeWindow($(this).parent().parent().parent().attr('id'))" src="/images/close.png"/>
		</div>
	</span>
 	<div class="detail-padded">
		<center>
			Find me articles within <input title="How big an area would you like to see wikipedia articles for?" class="short-text" type="text" name="wiki_range" id="wiki_range" value="1" onkeypress="if (parseFloat($('#wiki_range').val()) > 20) {$('#wiki_range').val('20')}; if (event.keyCode == 13) { updateWikiLocationInformation();}"/> km
			<input class="action-button" type="button" id="filter_now" name="filter_now" value="Go" onclick="if (parseFloat($('#wiki_range').val()) > 20) {$('#wiki_range').val('20')}; updateWikiLocationInformation();"/>								
		</center>
	</div>
	<div class="detail-padded fixed-height-block-with-title">
		<div id="wiki_stream">No entries found, try a bigger search area</div>
	</div>
	<span>
	<div class="footer-text fixed-height-footer">
              <div id="wiki_footer"></div>
	</div>
	</span>
</div>
