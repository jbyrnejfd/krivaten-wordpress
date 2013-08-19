<div class="post-meta">
	<div class="time"><i class="icon-time"></i> <time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('F jS, Y') ?></time></div>
	<?php the_tags('<div class="tags"><i class="icon-tags"></i> ', ', ', '</div>'); ?>
	<?php if(is_category()) { ?>
		<div class="categories"><i class="icon-list"></i> <?php the_category(', ') ?></div> 
	<?php } ?>
</div>