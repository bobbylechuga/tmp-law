<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<!-- footer-starts -->
	<div id="affix-footer" class="footer">
		<div class="container">
				<div class="col-md-4 contact-left">
					<?php if (dynamic_sidebar('footer1')); {  } ?>
				</div>
				<div class="col-md-4 contact-left">
					<?php if (dynamic_sidebar('footer2')); {  } ?>
				</div>
				<div class="col-md-4 contact-left">
					<?php if (dynamic_sidebar('footer3')); {  } ?>
				</div>
				<div class="clearfix"></div>
			
			<div class="footer-text">
				<p>© 2016 Law. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!-- footer-end -->
	<div class="scroll-top-wrapper ">
	  <span class="scroll-top-inner">
	    <i class="fa fa-2x fa-arrow-circle-up"></i>
	  </span>
	</div>

<?php wp_footer(); ?>

</body>
</html>
