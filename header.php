<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <title>
    <?php wp_title(''); ?>
    <?php if (wp_title('', false)) {
      echo ' | ';
    } ?>
    <?php bloginfo('name'); ?>
  </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="<?php if (is_single()) {
                                      single_post_title('', true);
                                    } else {
                                      bloginfo('name');
                                      echo " - ";
                                      bloginfo('description');
                                    } ?>" />

  <html <?php language_attributes(); ?>>

  <!-- <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow" /> -->
  <meta property="og:image" content="/wp-content/uploads/fe-group.png" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="canonical" href="<?php bloginfo('url'); ?>">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?php wp_title(''); ?>
    <?php if (wp_title('', false)) {
      echo ' | ';
    } ?>
    <?php bloginfo('name'); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo pll_home_url(''); ?>" />
  <meta property="og:image" content="/wp-content/uploads/fe-group.png" />
  <meta property="og:description" content="<?php if (is_single()) {
                                              single_post_title('', true);
                                            } else {
                                              bloginfo('name');
                                              echo " - ";
                                              bloginfo('description');
                                            } ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="init();">

  <div class="preloader-wrapper">
    <div class="preloader">
      <img src="/wp-content/themes/fenix/img/Preloader_2.gif" alt="NILA">
    </div>
  </div>

  <!-- wrapper -->
  <div class="wrapper">
    <!-- header -->
    <header class="header clear text-center" role="banner" id="header">
      <div class="container line-header" id="container-header">
        <div class="row">
          <?php if (has_custom_logo()) :
            $slug = basename(get_permalink());
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod('custom_logo');
            $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
            $custom_logo_url = $custom_logo_data[0];
            switch ($slug) {
              case 'division-envasados': ?>

                <div class="col-12 col-md-5 col-lg-4 pl-0 pr-0">
                  <div id="headerOpacity" class="logo background-blue opacity" >

                    <div class="row">
                      <div class="col-7 col-md-9 col-lg-7 height-80">
                        <a href="<?php echo pll_home_url(''); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                          <div class="lineLogo">
                            <img src="<?php the_field('logo_en_header'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
                            <hr class="styleLineHeader" width="1" size="500">
                          </div>
                        </a>
                      <?php
                      break;
                    default: ?>
                        <div class="col-12 col-md-5 col-lg-2 pl-0 pr-0">
                          <div class="logo background-blue">

                            <div class="row">
                              <div class="col-7 col-lg-6 height-80">
                                <a href="<?php echo pll_home_url(''); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                                  <div class="lineLogo">
                                  
                                    <img src="<?php echo esc_url($custom_logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logoSticky" id="logo-header"/>
                                    
                                    
                                    <hr class="styleLineHeader" width="1" size="500">
                                  </div>
                                </a>
                            <?php }
                      else : ?>
                            <div class="site-name"><?php bloginfo('name'); ?></div>
                          <?php endif; ?>
                              </div>

                              <div class="wrapper-idioma col-2 col-lg-3">
                                <?php pll_the_languages(array('dropdown' => 1, 'display_names_as' => 'slug')); ?>
                              </div>

                              <div class="col-3 d-block d-sm-block d-md-none">
                                <div class="fixed-action-btn pt-4">
                                  <a class="btn-floating btn-lg turquoise btn-mobile" id="openNav">
                                    <i class="icon-menuMobile fas fa-bars"></i>
                                  </a>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                        <?php
                        if ($slug == 'division-envasados' ||  $slug == 'divisao-de-embalagem') {
                        ?>
                          <div class="col-md-3 col-lg-5 d-none d-sm-block" id="navmenu">

                          </div>
                        <?php
                        } else {
                        ?>
                          <div class="col-md-3 col-lg-6 d-none d-sm-block offset-lg-1" id="navmenu">
                            <?php
                            $menuParameters = array(
                              'theme_location' => 'menu-site',
                              'menu' => 'navegation',
                              'container' => 'ul',
                              'container_class' => 'navbar-nav',
                              'menu_class' => 'navbar-nav',
                              'items_wrap' => '%3$s',
                              'depth' => 0,
                            );
                            echo strip_tags(wp_nav_menu($menuParameters), '<a>');
                            ?>
                          </div>
                        <?php
                        }
                        ?>

                        <div class="col-12 col-md-4 col-lg-3 row-contactHeader d-none d-sm-none d-md-block">
                          <div class="row">
                            <?php
                            if ($slug == 'division-envasados' ||  $slug == 'divisao-de-embalagem') {
                            ?>
                              <div class="col-3 col-lg-3">
                                <div class="fixed-action-btn pt-2">
                                  <a class="btn-floating btn-lg turquoise color-white" id="openNavDesktop">
                                    <i class="fas fa-bars"></i>
                                  </a>
                                </div>
                              </div>
                            <?php } ?>
                            <div class="col-12 col-lg-9 d-none d-sm-block">
                              <button type="button" class="btn btn-hablamos text-uppercase hvr-grow-shadow"  onclick="window.location.href='#container-form'"><?php echo pll__('Hablemos'); ?></button>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div id="menuMobile" class="overlay">
                      <!-- nav -->
                      <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
                      <?php
                      $menuParameters = array(
                        'theme_location' => 'menu-site',
                        'menu' => 'navegation',
                        'container' => 'ul',
                        'container_class' => 'navbar-nav',
                        'menu_class' => 'navbar-nav',
                        'items_wrap' => '%3$s',
                        'depth' => 0,
                      );
                      echo strip_tags(wp_nav_menu($menuParameters), '<a>');
                      ?>
                      <div class="col-12 text-center">
                        <button type="button" class="btn btn-hablamos text-uppercase"><?php echo pll__('Hablemos'); ?></button>
                      </div>
                      <!-- /nav -->
                    </div>

                    <div id="menuDesktop" class="overlay">
                      <!-- nav -->
                      <a href="javascript:void(0)" class="closebtn" id="closedNavDesktop">&times;</a>
                      <?php
                      $menuParameters = array(
                        'theme_location' => 'menu-site',
                        'menu' => 'navegation',
                        'container' => 'div',
                        'container_class' => 'navbar-nav',
                        'menu_class' => 'navbar-nav',
                        'items_wrap' => '%3$s',
                        'depth' => 0,
                      );
                      echo strip_tags(wp_nav_menu($menuParameters), '<a>');
                      ?>
                      <!-- /nav -->
                    </div>


    </header>