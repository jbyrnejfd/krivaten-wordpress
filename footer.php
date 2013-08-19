			<div class="clearfix"></div>
			<?php vdp_sidebar('sidebar_all'); ?>
		</div>
	</div>

</div> <!-- / #page-content -->
<footer class="footer content-info" id="page-footer" role="contentinfo">
	<div class="container">
		<div class="drawer-search hidden-lg">
			<?php get_search_form(); ?>
		</div>
		<nav class="nav-drawer" role="navigation">
			<?php
			if (has_nav_menu('mobile-menu')) :
				wp_nav_menu(array('theme_location' => 'mobile-menu', 'menu_class' => 'hidden-lg', 'walker' => new drawer_walker()));
			endif;
			?>
		</nav>
		<?php dynamic_sidebar('sidebar-footer'); ?>
		<?php require_once(TEMPLATEPATH . '/inc/social-icons.php'); ?>
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>
<?php
$googleAnalytics = get_option("roots_google_analytics");
if($googleAnalytics != "") { ?>
<script>
var _gaq=[['_setAccount','<?php echo $googleAnalytics?>'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php } ?>