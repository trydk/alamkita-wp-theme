<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="id-ID">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title><?php
    global $page, $paged;
    wp_title('|', true, 'right');
    bloginfo('name');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        echo " | $site_description";
    }
  ?></title>
  
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/favicon.svg">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">
  
  <!-- AlamKita -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/wp.css">
</head>

<body <?php body_class(); ?>>

  <h1 style="display:none"><a href="<?php site_url(); ?>"><?php bloginfo('name'); ?></a></h1>

  <div class="page-default <?php echo (is_user_logged_in() ? 'pt-md-4' : '')?>">

    <nav class="navbar d-lg-none navbar-light bg-light" id="header-mobile">
      <a href="<?php echo get_main_website_url(); ?>" target="_self" class="navbar-brand">
        <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo2.svg" alt="Alam Kita" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav-collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo get_main_website_url(); ?>" target="_self" class="nav-link">Home</a></li> 
          <li class="nav-item">
            <a href="<?php echo get_main_website_url(); ?>/#howitworks" target="_self" class="nav-link">How it works</a></li> 
          <li class="nav-item">
            <a href="<?php echo get_main_website_url(); ?>/#calculate" target="_self" class="nav-link">Calculate</a></li> 
          <li class="nav-item">
            <a href="<?php echo get_main_website_url(); ?>/#usecases" target="_self" class="nav-link">Use cases</a></li>
          <li class="nav-item">
            <a href="<?php echo get_main_website_url(); ?>/login" target="_self" class="nav-link">Login</a></li>
          <li class="nav-item">
            <a href="<?php echo get_site_url(); ?>" target="_self" class="nav-link">Blog</a></li> 
        </ul>
      </div>
    </nav>

    <div class="container pb-1 pt-1 pb-md-4 pt-md-4">
    
      <div id="header" class="row">
        <div id="head-title" class="d-none d-lg-block col-lg-3">
          <a href="<?php echo get_main_website_url(); ?>" class="ml-3">
            <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" alt="Alam Kita" class="img-fluid"></a>
        </div> 
        <div id="head-menu" class="d-none d-lg-block col-lg-9">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a href="<?php echo get_main_website_url(); ?>" target="_self" class="nav-link">Home</a></li> 
            <li class="nav-item">
              <a href="<?php echo get_main_website_url(); ?>/#howitworks" target="_self" class="nav-link">How it works</a></li> 
            <li class="nav-item">
                <a href="<?php echo get_main_website_url(); ?>/#calculate" target="_self" class="nav-link">Calculate</a></li>
            <li class="nav-item">
              <a href="<?php echo get_main_website_url(); ?>/#usecases" target="_self" class="nav-link">Use cases</a></li> 
            <li class="nav-item">
              <a href="<?php echo get_main_website_url(); ?>/login" target="_self" class="nav-link">Login</a></li>
            <li class="nav-item">
              <a href="<?php echo get_site_url(); ?>" target="_self" class="nav-link">Blog</a></li> 
          </ul>
        </div>
      </div>
    </div>
    <!-- container -->

  </div>

  <div class="wrapper container p-0 pt-md-5 pb-5">
