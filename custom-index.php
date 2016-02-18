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
	<?php get_template_part( 'template-parts/content', 'slide' ); ?>
	<!-- welcome -->
	<div class="welcome">
		<div class="container welcome-row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 welcome-left column">
				<div class="row welcome-mensaje">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>					
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 welcome-right column">
				<div class="row">
					<span class="service-icon"><i class="icon-anulidad"></i></span>
					<div class="service-content">
						<h4>Legal Experties</h4>
						<p class="hidden-xs hidden-sm">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						<a class="rmore-icon hidden-xs hidden-sm" href="#">View Practice Areas <i class="fa fa-caret-right"></i></a>
					</div>
				</div>	
				<div class="row">
					<span class="service-icon"><i class="icon-accidente_laboral"></i></span>
					<div class="service-content">
						<h4>Legal Experties</h4>
						<p class="hidden-xs hidden-sm">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						<a class="rmore-icon hidden-xs hidden-sm" href="#">View Practice Areas <i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="row">
					<span class="service-icon"><i class="icon-autodespido"></i></span>
					<div class="service-content">
						<h4>Legal Experties</h4>
						<p class="hidden-xs hidden-sm">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						<a class="rmore-icon hidden-xs hidden-sm" href="#">View Practice Areas <i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="row">
					<span class="service-icon"><i class="icon-despido_injustificado"></i></span>
					<div class="service-content">
						<h4>Legal Experties</h4>
						<p class="hidden-xs hidden-sm">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						<a class="rmore-icon hidden-xs hidden-sm" href="#">View Practice Areas <i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="row">
					<span class="service-icon"><i class="icon-tutela"></i></span>
					<div class="service-content">
						<h4>Legal Experties</h4>
						<p class="hidden-xs hidden-sm">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
						<a class="rmore-icon hidden-xs hidden-sm" href="#">View Practice Areas <i class="fa fa-caret-right"></i></a>
					</div>
				</div>
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
					<h1><b>Call to action</b></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices eleifend elit, 
						vel mollis felis egestas sed. Ut suscipit odio vel urna maximus ultricies. Sed est nisl, 
						egestas a ultrices vitae, mattis ut quam. Cras at sodales ligula. Cum sociis natoque penatibus 
						et magnis dis parturient montes, nascetur ridiculus mus. Integer feugiat ligula nec tellus 
						vehicula congue. Donec vehicula suscipit lectus.
					</p>
					<p class="text-center"><a href="#" class="btn btn-default">+5 69 123456</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- ./call  to action -->	

	<!-- cases -->
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
	</div>
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
