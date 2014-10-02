			<div class="clearfix"></div>
		</div>
	</div>
	<footer class="footer content-info" id="page-footer" role="contentinfo">
		<div class="container">

			<?php //require(TEMPLATEPATH . '/templates/components/social-icons.php'); ?>

			<div class="footer-cols">
				<div class="row">
					<div class="col-md-6">
						<?php
						if (has_nav_menu('main-menu')) :
							wp_nav_menu(array('theme_location' => 'footer-misc', 'menu_class' => 'footer-nav row'));
						endif;
						?>
					</div>
					<div class="col-md-3 bg-danger">
						<h4>recent posts</h4>
						<ul class="list-unstyled">
							<?php
								$args = array('numberposts' => '5');
								$recent_posts = wp_get_recent_posts($args);
								foreach( $recent_posts as $recent ){
									echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
								}
							?>
						<li>
					</div>
					<div class="col-md-3 bg-warning">
						<h4>the village church</h4>
						<p>
							210 s. second st. <br />
							hamilton, oh <br />
							513.330.9118
						</p>

						<p class="text-center" style="padding-top: 15px;">
							<a href="http://www.acts29network.org" target="_blank">
								<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-acts-29.png" width="60%" alt="<?php bloginfo('name'); ?>" />
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="footer-bottom visible-md visible-lg">
				<div class="row">
					<div class="col-md-6 text-md-left">
						love &bull; live &bull; move
					</div>
					<div class="col-md-6 text-md-right">
						&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
					</div>
				</div>
			</div>
		</div>
	</footer><!--/#page-footer-->

<!--Search Modal-->
<div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="search" method="get" id="modalSearchForm" class="form-search" action="<?php echo home_url('/'); ?>">
				<div class="modal-body">
					<input type="text" name="s" id="s" class="form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-small pull-left" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary btn-small pull-right">Submit</button>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
	</div>
</div><!--/#modalSearch-->

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
