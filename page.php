<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); 
$urlFeaturred = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
?>
<style type="text/css">
	.panel-affix {
		min-width: 225px;
	}
	section {
	margin-top: 40px;
	}
	section:first-of-type {
		margin-top: 0;
	}
	.page-heading {
		padding: 20px 0 40px;
		text-align: center;
	}
	li a {
		transition-duration: 1s;
	}
	.banner-1{
	    background:url(<?php echo $urlFeaturred; ?>) center fixed;
		min-height:300px;
		background-size:cover;
		-webkit-background-size:cover;
		-moz-background-size:cover;
		-o-background-size:cover;
		-ms-background-size:cover;
		position:relative;
	}
</style>
<div class="banner-1">
</div>
<div class="container" name="toTop" id="topPos">
	
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'affix' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
</div>
<?php get_footer(); ?>
