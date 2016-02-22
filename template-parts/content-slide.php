<!-- banner-starts -->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<?php query_posts('page_id=85'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
<!--banner-end-->