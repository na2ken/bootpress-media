<?php
/**
 * BootPress header.php update160701
 * add link rel="alternate" & author
 */

?>
<!DOCTYPE html>
<html lang="ja" id="pageTop">
<head>
    <meta charset="UTF-8">
    <?php my_description(); ?>
    <meta name="author" content="<?php the_author_meta( 'display_name', 1 ); ?>" />
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="alternate" hreflang="ja" href="<?php bloginfo('url'); ?>">
    <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.png">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bp.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body class="page">
<header id="header" class="navbar navbar-default navbar-fixed-top l-header" role="banner">
  <div class="container-liquid page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="textSize-xxxs text-center hamburgerMenu">MENU</span>
      </button>
      <div class="l-vi page-scroll">
            <a href="<?php bloginfo('url'); ?>" class="vi-a">
                <img src="<?php bloginfo('template_url'); ?>/img/vi.svg" class="viUnit" height="auto" alt="<?php bloginfo('name'); ?>">
            </a>
      </div>

      <div class="navbar-collapse collapse l-globalNav">
            <div class="l-globalNav-main">
                <?php wp_nav_menu( array( 'theme_location' => 'header-navi', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' ) ); ?>
            </div>

            <div class="l-globalNav-sub">
                 <ul class="nav navbar-nav">
                     <li class="navbarNavUnit-sub">
                         <a href="<?php bloginfo('url'); ?>/contact/" class="is-navbarNavUnit-sub-active">お問い合わせ <i class="fa fa-paper-plane-o fa-lg horizontalMargin-l-ss"></i></a></li>
                 </ul>
           </div>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
</header>
