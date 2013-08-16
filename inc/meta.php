<div class="postmetadata">
	<i class="icon-time"></i> <time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('F jS, Y') ?></time><br />
	<?php the_tags('<i class="icon-tags"></i> ', ', ', '<br />'); ?>
	<?php if(is_category()) { ?>
		<i class="icon-list"></i> <?php the_category(', ') ?> | 
	<?php } ?>
	<i class="icon-comments-alt"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
</div>