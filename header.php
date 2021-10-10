<?php
/**
 * The header for Webzemi custom theme
 *
 * This is the template that displays all of the <head> section and everything up until </header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Mulish:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" id="home">
      <!-- Full Nav menu -->
      <nav class="nav">
        <img  class="logo" src="<?php bloginfo('template_url'); ?>/images/main/zemi.png" alt="Webzemi Logo">
        <div class="menu">
          <ul class="">
            <li><a href="#home">About Us</a></li>
            <li><a href="#work">Latest Work</a></li>
            <li><a href="#capabilities">Services</a></li>
            <li><a href="#reach-out" class="button">Get in touch</a></li>
          </ul>
        </div>
      </nav>
      <!-- Nav menu (width: 1120px) -->
      <nav class="nav-sml">
        <img  class="logo" src="<?php bloginfo('template_url'); ?>/images/main/zemi.png" alt="Webzemi Logo">
        <div class="menu-button" onClick="navMenu()">
          <span class="open-">MENU</span>
          <span class="close- disabled">CLOSE</span>
        </div>
        <div class="menu-sml">
          <ul class="menu-list">
            <li><a href="#home" onClick="navMenu()">About Us</a></li>
            <li><a href="#work" onClick="navMenu()">Latest Work</a></li>
            <li><a href="#capabilities" onClick="navMenu()">Services</a></li>
            <li><a href="#reach-out" onClick="navMenu()">Get in touch</a></li>
          </ul>
        </div>
      </nav>
      <!-- Hero -->
      <div class="hero">
        <div class="hero-content">
          <h1 class="heading heading-lrg bold">Helping local businesses expand their web presence.</h1>
          <h2 class="heading heading-sub thin"> You need a solid web presence to keep your business competitive in the digital space. <span class="highlight bold">We can help with that.</span> </h2>
        </div>
      </div>
      <div class="hero-arrow">
        <div class="arrow"><div class="arrow-inner">&nbsp</div></div>
      </div>
    </header>
