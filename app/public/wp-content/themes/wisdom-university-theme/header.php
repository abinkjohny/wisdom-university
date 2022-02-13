<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
          <div class="container">
            <h1 class="school-logo-text float-left">
            <a href="<?php echo get_site_url(); ?>">
                <?php 
                    $title = get_bloginfo('name');
                    $split_title = preg_split("/( |-|,)/", $title);
                ?>
                <strong><?php echo $split_title[0]; ?></strong> <?php echo $split_title[1]; ?>
            </a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
              <nav class="main-navigation">
                <ul>
                  <li><a href="/about-us">About Us</a></li>
                  <li><a href="/programs">Programs</a></li>
                  <li><a href="/events">Events</a></li>
                  <li><a href="/campuses">Campuses</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </nav>
              <div class="site-header__util">
                <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
        </header>
