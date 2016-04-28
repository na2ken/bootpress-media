<?php
/**
 * BootPress single theme.
 */

?>
<!DOCTYPE html>
<html lang="ja" id="pageTop">
<head>
    <meta charset="UTF-8">
    <?php my_description(); ?>
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.png">
    <link rel="stylesheet" href="http://cdn.bootpress.co/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootpress.co/assets/css/animate.css">
    <link rel="stylesheet" href="http://cdn.bootpress.co/assets/css/bps.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
</head>
<body class="page">
<header id="header" class="navbar navbar-default navbar-fixed-top l-header shadowEffect-1-half" role="banner">
  <div class="container-liquid page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="l-vi page-scroll">
            <a href="<?php bloginfo('url'); ?>" class="vi-a">
                <img src="<?php bloginfo('template_url'); ?>/img/vi.svg" class="viUnit" height="auto" alt="fronteeer.com">
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
