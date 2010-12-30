<?php
/**
 *	@package WordPress
 *	@subpackage Giant Steps
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="description" content="Colt + Rane is an art, design and culture blog." />
	
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Posts tagged &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="http://colt-rane.com/favicon.ico" type="image/x-icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<script src="<?php bloginfo('template_url') ?>/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.lazyload.mini.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/infinite-scroll.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.tipTip.minified.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('template_url') ?>/js/functions.js" type="text/javascript" charset="utf-8"></script>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/tipTip.css" type="text/css" media="screen" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<h1 id="logo"><a href="<?php echo get_settings('home'); ?>/">Colt + Rane</a></h1>
		<ul id="utility" class="right">
			<li><a title="Submit to COLT + RANE" class="tip" href="mailto:info@colt-rane.com" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/submit.gif" alt="submit" /></a></li>
			<li><a title="RSS" class="tip" href="http://feeds.feedburner.com/colt-rane" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/rss.gif" alt="rss" /></a></li>
			<li id="list-link"><a title="Feed" class="tip" href="<?php echo get_settings('home'); ?>/" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/list.gif" alt="single" /></a></li>
			<li id="grid-link"><a title="Archive" class="tip" href="/archive/" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/grid.gif" alt="multi" /></a></li>
			<li id="grid-link"><a title="Twitter" class="tip" href="http://twitter.com/colt_rane" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-2.gif" alt="twitter" /></a></li>
			<li id="grid-link"><a title="Tumblr" class="tip" href="http://colt-rane.tumblr.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tumblr.gif" alt="tumblr" /></a></li>
		</ul><!--UTILITY-->
	</div><!--HEADER-->