<?php
/**
 *	@package WordPress
 *	@subpackage Giant Steps
 */
?>
<!DOCTYPE html>
<!--[if IE]><![endif]--> 
<html lang="en-us" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="imagetoolbar" content="false" /> 
  <meta name="application-name" content="<?php bloginfo('name')?>" />
  <meta name="msapplication-tooltip" content="<?php bloginfo('description')?>" />  
  <meta name="msapplication-starturl" content="<?php bloginfo('url')?>/#pinned" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="description" content="<?php bloginfo('description')?>" />
  <meta property="og:site_name" content="<?php bloginfo('name')?>" /> 
  <link rel="canonical" href="<?php bloginfo('url')?>" />
	
	<title><?php if (function_exists('is_tag') && is_tag()) { echo 'Posts tagged &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } bloginfo('name'); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/images/favicon.ico" type="image/x-icon" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/tipTip.css" type="text/css" media="screen" />

  <!--[if lt IE 9]>
      <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]--> 
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1 id="logo"><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name')?></a></h1>
	  <?php wp_list_bookmarks( $args ); ?> 
	</header>