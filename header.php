<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>

<div class="container">
<header >
        <div class="logo">.</div>
        <div class="navigation-menu">
			<?php $args = [ 'theme_location' => 'primary','menu_class'=>'top-bar' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </div>
        <!--burger menu -->
        <a class="burger-menu-bar" href="#">&#9776;</a>  
</header>

   

   

