<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>The Voice Perfumes</title>

  <link rel="canonical" href="<?php echo home_url(); ?>">

  <!-- META TAGS -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/680076/698228/css/fonts.css" />

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body <?php echo body_class('is-loading'); ?>>
  <!-- Header -->
  <header>
    <a class="link-logo" href="<?php echo home_url(); ?>">
      <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/logo.png">
    </a>

    <?php include_once( 'includes/nav.php' ); ?>

    <!-- <a class="trigger trigger-menu"><i></i></a> -->
  </header>

  <?php
  // Hero section must be placed before main
  if( have_posts() ):
    while( have_posts() ): the_post();

      // Loop into ACF groups
      if( have_rows('page') ):
        while( have_rows('page') ): the_row();

          if( get_row_layout() == 'hero' ):
            echo '<!-- Hero -->';
            include_once( locate_template('content/hero.php') );
          endif;

        endwhile;
      endif;

    endwhile;
  endif;
  ?>

  <!-- Main content -->
  <main role="main">
    <?php if( is_home() || is_archive() ||is_single() ){ include_once( 'includes/aside.php' ); }; ?>