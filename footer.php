<?php
/**
 *	@package WordPress
 *	@subpackage Giant Steps
 */
?>
	<?php wp_footer(); ?>
	<div id="footer">
		<p>Theme created by <a href="http://itsallopticks.com">Opticks, Inc.</a> for <a href="http://www.colt-rane.com">Colt + Rane.</a></p>
	</div>

    <%= javascript_include_tag "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" %>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="<?php bloginfo('template_url') ?>/js/jquery-1.4.2.min.js"%3E%3C/script%3E'))</script>

	<script src="<?php bloginfo('template_url') ?>/js/jquery.lazyload.mini.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/infinite-scroll.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.tipTip.minified.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/functions.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>