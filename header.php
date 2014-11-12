<?php
/**
 * @package Chunk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="menu">
	<div id="bg">
    	<div id="mn_cntnr">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <div class="scl_menu_nav">
            <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
            </div>
         </div>
    </div>
		<?php
			// Do we have a header image around?
			if ( '' != get_header_image() ) :
		?>
		<div id="header-image">
			<a href="<?php echo home_url( '/' ); ?>">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		</div>
		<?php endif; ?>
		
	</div>

<div id="container">

	<div id="header">
		<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
	</div>

	
