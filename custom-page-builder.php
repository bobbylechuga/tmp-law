<?php
/**
 * Template Name: Page Builder
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
<div class="container page-builder" name="toTop" id="topPos">
	<?php the_content(); ?>
</div>
<?php get_footer(); ?>
