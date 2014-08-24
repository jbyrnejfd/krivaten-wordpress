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
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/css.css" />
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/html5shiv/dist/html5shiv.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/vendor/respond/dest/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/logos/logo-16.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/logos/logo-114.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/logos/logo-114.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/logos/logo-144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/logos/logo-144.png" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php $detect = new Mobile_Detect; ?>
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>

	<script type="text/javascript" src="//use.typekit.net/leg7ved.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body <?php body_class('site-background'); ?>>
	
	<div id="page-body">
		<header class="navbar navbar-default navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-inner">
					<div class="hidden-md hidden-lg pull-left btn-drawer">
						<a href="#" class="drawer-toggle"><i class="fa fa-bars"></i>&nbsp;</a>
						<a href="#modalSearch" data-toggle="modal" class="search-toggle"><i class="fa fa-search"></i>&nbsp;</a>
					</div>
					<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>" class="navbar-brand">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" />
					</a>

					<nav class="nav-collapse hidden-xs hidden-sm" role="navigation">
						<?php
						if (has_nav_menu('main-menu')) :
							wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'nav navbar-nav', 'walker' => new top_nav()));
						endif;
						?>
					</nav>
				</div>
				<div class="navbar-connect visible-md visible-lg">
					<div class="navbar-phone">
						<?php
							echo get_option("kvt_phone_num");
						?>
					</div>
					<div class="navbar-icons">
						<i class="icon city"></i>
						<i class="icon facebook"></i>
						<i class="icon twitter"></i>
						<i class="icon rss"></i>
					</div>
					<div class="navbar-address">
						Sunday @ 10:30 AM<br />
						210 S 2nd Street<br />
						Hamilton, OH
					</div>
				</div>
			</div>
		</header>

		<div class="jumbotron <?php if(is_page('home')) {echo "masthead";} else {echo "subhead";} ?>">
			<div class="container">
				<?php if(is_page('home')) { ?>
					<h1>love &bull; live &bull; move</h1>
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
			<div class="alert alert-warning text-center">
				<h2 class="text-center">Outdated Browser Warning</h4>	
				<p class="text-center">While this site will look and work fine for the most part, you are likely missing out on an optimal user experience.</p>
				<p class="text-center">Do yourself a favor and please upgrade to <a href="https://www.google.com/chrome" title="Google Chrome" target="_blank" style="color: black; font-weight: bold;">Google Chrome</a> or <a href="http://www.mozilla.org/" title="Mozilla Firefox" target="_blank" style="color: black; font-weight: bold;">Mozilla Firefox</a></p>
			</div>
		</div>
		<![endif]-->
		
		<div id="page-content">
			<div class="container">