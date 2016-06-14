<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage itc210
 * @since ?
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php wp_enqueue_script("jquery"); ?>
	<title><?php bloginfo("name") . wp_title( '|' ); ?></title>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-target="#myScrollspy" data-offset="50">

<!-- Start of Navigation -->

<nav class="navbar navbar-default navbar-fixed-top" id="myScrollspy">
  <div class="container">
    <ul class="nav">
        <li><a class="navbar-brand navbar-edit" href="http://spencerechon.com/seattle-market">SeattlemarketLLC<span>.com</span></a></li>
        <li class = "navbar-right"><a href="#menu-top">TOP</a></li>
        <li class = "navbar-right"><a href="#menu-contact">CONTACT</a></li>
        <li class = "navbar-right"><a href="#menu-products">PRODUCTS</a></li>
        
    </ul>
  </div>
</nav>
    

	

	<div id="content" class="site-content">
        <div class="anchor" id="menu-top"></div>
