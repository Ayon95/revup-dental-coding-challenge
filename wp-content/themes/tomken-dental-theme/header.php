<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Get the confidence you need to smile in your pictures again! Visit our website or call us at 905-848-2250 to get dentures or learn more about our dental services in Mississauga.">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en-US">
  <meta property="og:title" content="Tomken Dental - Dentures in Mississauga">
  <meta property="og:description" content="Get the confidence you need to smile in your pictures again! Visit our website or call us at 905-848-2250 to get dentures or learn more about our dental services in Mississauga.">
  <meta property="og:site_name" content="Tomken Dental">
  <meta property="og:image" content="<?php echo get_template_directory_uri() . '/images/tomken-dental-social-share.PNG' ?>">
  <meta name="twitter:title" content="Tomken Dental - Dentures in Mississauga">
  <meta name="twitter:description" content="Get the confidence you need to smile in your pictures again! Visit our website or call us at 905-848-2250 to get dentures or learn more about our dental services in Mississauga.">
  <meta name="twitter:image" content="<?php echo get_template_directory_uri() . '/images/tomken-dental-social-share.PNG' ?>">
  <meta name="twitter:image:alt" content="Tomken Dental - Dentures in Mississauga">
  <meta name="twitter:card" content="summary_large_image">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Tomken-logo-small.png" alt="Tomken Dental Logo">
      </a>
      <nav class="site-header__nav" aria-labelledby="desktop-menu-label">
        <span class="sr-only" id="desktop-menu-label">Primary</span>
        <button class="site-header__menu-button" aria-controls="mobile-nav-menu" aria-expanded="false">
          <span>Menu</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
        <div class="site-header__items">
          <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => ''
          )); ?>
          <button class="btn btn--secondary btn--secondary-outline">Request An Appointment</button>
        </div>
      </nav>
    </div>
    <div class="site-header__mobile-nav-container" >
      <nav class="site-header__mobile-nav" id="mobile-nav-menu" aria-labelledby="mobile-menu-label">
        <span class="sr-only" id="mobile-menu-label">Primary</span>
        <?php wp_nav_menu(array(
          'theme_location' => 'header_menu',
          'container' => ''
        )); ?>
        <button class="btn btn--secondary btn--secondary-outline">Request An Appointment</button>
      </nav>
    </div>
  </header>
  <main>
