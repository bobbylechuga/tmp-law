<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#myScrollspy">
<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div id="logo-redondo" class="head-main">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo-redondo" src="<?php echo get_template_directory_uri(); ?>/images/logo_redondo.png"></a>
			</div>
			<div id="logo-verde" class="head-main">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo-verde" src="<?php echo get_template_directory_uri(); ?>/images/logo_75.png"></a>
			</div>
			<div class="hea-rgt">
				<?php if (dynamic_sidebar('top1')); {  } ?>
			</div>
			<div class="navigation">
				 <nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php if( has_nav_menu( 'primary' ) ) :
					            wp_nav_menu( array(
				                        'theme_location'  => 'primary',
				                        'container'       => false,
				                        //'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
				                        'walker'          => new Bootstrap_Nav_Menu(),
				                        'fallback_cb'     => null,
						                'items_wrap'      => '%3$s',// skip the containing <ul>
				                    )
				                );
			                else :
				                wp_list_pages( array(
						                'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
						                'walker'          => new Bootstrap_Page_Menu(),
						                'title_li'        => null,
					                )
				                );
				            endif; 
				        ?>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
