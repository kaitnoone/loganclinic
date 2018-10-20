<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>

  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title();?>" />
  <meta property="og:site_name" content="<?php bloginfo('name')?>">

  <?php
/* Theme color for browsers that support it
<meta name="theme-color" content="#000">
 */
?>

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Special+Elite" rel="stylesheet">

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_object())): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <?php endif;?>

  <?php if (is_search()) {?>
   <meta name="robots" content="noindex, nofollow" />
	<?php }?>

  <?php if (is_singular() && comments_open()) {
    wp_enqueue_script('comment-reply');
}
?>

  <?php wp_head();?>
</head>

<body <?php body_class();?>>

  <?php // Header ?>
  <header class="header">
    <div class="header--pattern-wrap">
      <div class="header--contact-info">
        Call us at <?php the_field('contact_phone');?>
      </div>
      <div class="container">
        <div class="header--logo">
          <a href="/"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png" alt="Logan clinic logo" /></a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header--menu">
          <?php wp_nav_menu(array('theme_location' => 'primary'));?>
      </div>
    </div>
  </header>

  <?php // Main Content ?>
  <main>
