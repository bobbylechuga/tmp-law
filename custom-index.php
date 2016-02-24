<?php
/**
 * Template Name: Home
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
	<?php //get_template_part( 'template-parts/content', 'slide' ); ?>
	<!-- banner-starts -->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<section class="slider">
					<div class="flexslider">
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; wp_reset_postdata();?>
					</div>
				</section>			
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!-- welcome -->
	<div class="welcome">
		<div class="container welcome-row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 welcome-left column">
				<div class="row welcome-mensaje">
					<?php query_posts('page_id=94'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>		
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 welcome-right column">
				<?php query_posts('page_id=47'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
	<!-- welcome -->

	<!-- call  to action -->
	<div class="container-fluid">
		<div class="row">
			<div class="callout-dark text-center fade-in-b">
				<div class="call-contenido">					
					<?php query_posts('page_id=51'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<h1><b><?php the_title(); ?></b></h1>
						<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- ./call  to action -->	

	<!-- cases -->
	<!--
	<div class="cases page-builder-home">
		<div class="container">
			<?php query_posts('page_id=53'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>-->


	<section id="main-content" class="main-content text-center">
		<div class="container">
			<?php query_posts('page_id=109'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; wp_reset_postdata(); ?>
		</div><!-- Container end -->
	</section>


	<!--
	<div class="cases">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Derecho Laboral</h3>
				<img src="http://placehold.it/700x334" alt=" " class="img-responsive">				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Derecho Civil</h3>
				<img src="http://placehold.it/700x334" alt=" " class="img-responsive">				
			</div>			
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="cases">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Derecho Comercial</h3>
				<img src="http://placehold.it/700x334" alt=" " class="img-responsive">				
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h3>Derecho del Consumidor</h3>
				<img src="http://placehold.it/700x334" alt=" " class="img-responsive">				
			</div>			
			<div class="clearfix"></div>
		</div>
	</div>-->
	<!-- cases-end -->
	<!-- news -->
	<!--
	<div class="news">
		<div class="container">
			<h3>News & Events</h3>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="<?php echo get_template_directory_uri(); ?>/images/10.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 new-rgt">
					<h5> [10-08-2015]</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="col-md-6 news-left">
				<div class="col-md-6 new-lft">
					<img src="<?php echo get_template_directory_uri(); ?>/images/7.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 new-rgt">
					<h5> [10-08-2015]</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</P>
				</div>
					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>-->
<?php get_footer(); ?>
