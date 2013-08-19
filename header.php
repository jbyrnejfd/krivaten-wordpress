<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">
	
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php wp_title(''); ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style-ie.css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/plugins/logo-16.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/plugins/logo-114.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/plugins/logo-114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/plugins/logo-144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/plugins/logo-144.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class('site-background'); ?>>
	
	<div id="page-body">
		<header class="navbar navbar-fixed-top" role="banner">
			<div class="navbar-inner">
				<div class="hidden-desktop pull-left btn-drawer">
					<a href="#"><i class="icon-reorder"></i>&nbsp;</a>
				</div>
				<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" class="navbar-brand">
					Development
				</a>

				<nav class="nav-collapse pull-right visible-desktop" role="navigation">
					<?php
					if (has_nav_menu('main-menu')) :
						wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav', 'walker' => new bootstrap_nav()));
					endif;
					?>
				</nav>
			</div>
		</header>

		<div class="jumbotron <?php if(is_page('home')) {echo "masthead";} else {echo "subhead";} ?>">
			<div class="container">
				<?php if(is_page('home')) { ?>
					<?php echo do_shortcode('[new_royalslider id="1"]');?>
				<?php /* If this is the blog page */ } elseif (is_home()) { ?>
					<h1>Blog</h1>
				<?php /* If this is a category archive */ } elseif (is_category()) { ?>
					<h1>Posts in Category &#8216<?php single_cat_title(); ?>&#8216</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1>Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1>Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h1>Author Archive</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1>Blog Archives</h1>
				<?php /* If this is a search result */ } elseif(is_search()) { ?>
					<h1>Search results for &quot;<?php the_search_query() ?>&quot;</h1>
				<?php /* If this is a page */ } else { ?>
					<h1><?php the_title(); ?></h1>
				<?php } ?>
			</div>
		</div>
		<!--[if lt IE 9]>
		<div class="container">
			<div class="alert alert-error text-center">
				<h2 class="text-center">Outdated Browser Warning</h4>	
				<p class="text-center">While this site will look and work fine for the most part, you are likely missing out on an optimal user experience.</p>
				<p class="text-center">Do yourself a favor and please upgrade to <a href="https://www.google.com/chrome" title="Google Chrome" target="_blank" style="color: black; font-weight: bold;">Google Chrome</a> or <a href="http://www.mozilla.org/" title="Mozilla Firefox" target="_blank" style="color: black; font-weight: bold;">Mozilla Firefox</a></p>
			</div>
		</div>
		<![endif]-->
		
		<div id="page-content">
			<?php vdp_sidebar('content-top',true);?>
			<div class="container">