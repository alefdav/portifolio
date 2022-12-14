<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="pt">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="<?php the_title(); ?>">
  <link rel="icon" sizes="192x192" href="<?php bloginfo('template_url') ?>/assets/icons/android-icon-192x192.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $coricone ?>">
  <meta name="apple-mobile-web-app-title" content="<?php the_title(); ?>">

  <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/assets/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/assets/icons/apple-icon-180x180.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/assets/icons/ms-icon-144x144.png">
  <meta name="msapplication-TileColor" content="<?php echo $coricone ?>">

  <!-- Color the status bar on mobile devices -->
  <meta name="theme-color" content="<?php echo $coricone ?>">

  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/assets/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/assets/icons/favicon-16x16.png">

  <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/icons/favicon.ico">

  <link rel="manifest" href="<?php bloginfo('template_url') ?>/manifest.json">

  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>
    <section class="headerBar container">
      <a href="https://www.linkedin.com/in/alefdav/" class="headerLink">@alefdav</a>

      <div class="navigationBar">
        <?php wp_nav_menu(); ?>
      </div>
    </section>

  </header>