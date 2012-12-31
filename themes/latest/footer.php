<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

	<footer>
		<blockquote id="twitter" class="tweet">
			<p class="icon twitter"><a href="#">&#116;</a></p>
			<ul id="twitter_update_list"></ul>
		</blockquote>
		<p class="icon back-to-top"><a href="javascript:void(0);">&#58;</a></p>
		<p>Copyright &copy; 2006-2011. All Rights Reserved</p>
	</footer>
	
	<!-- Twitter -->
	<script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
	<script src="http://api.twitter.com/1/statuses/user_timeline.json?callback=twitterCallback2&amp;include_entities=true&amp;include_rts=true&amp;screen_name=joshharbaugh&amp;count=1" type="text/javascript"></script>
	
	<!-- Tracking -->
	<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
	<script type="text/javascript">try{ var pageTracker = _gat._getTracker("UA-1333987-1"); pageTracker._trackPageview(); } catch(err) {}</script>
	<script type="text/javascript">function recordOutboundLink(link, category, action) {try {var pageTracker=_gat._getTracker("UA-1333987-1");pageTracker._trackEvent(category, action);setTimeout('document.location = "' + link.href + '"', 100)}catch(err){}}</script>
	<script type="text/javascript">_qoptions={qacct:"p-2eO8AKct_LjD-"};</script>
	<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
	<noscript>
		<img src="http://pixel.quantserve.com/pixel/p-2eO8AKct_LjD-.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
	</noscript>
	<?php
	wp_footer();
	?>
	</body>
</html>