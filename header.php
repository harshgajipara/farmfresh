<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>

   <?php wp_head() ?>

</head>

<body>

    <!-- Start top header -->

    <section class="header-top">
        <div class="container">
            <div class="header-social">
                <?php $link = get_field('social_icons','option'); ?>
                <ul>
                    <li><a href="<?php echo $link['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $link['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $link['pinterest']; ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $link['instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="mobile-logo visible-xs">
                <a href="<?php echo site_url('home'); ?>">
                    <figure>
                        <img class="img-fluid" src="<?php the_field('header_logo','option'); ?>" alt="">
                    </figure>
                </a>
            </div>
            <div class="mobile-menu-icon visible-xs">

            </div>
            <div class="my-menu">

                    <?php
                    wp_nav_menu(array(
                        'theme_location'=>'headerMenuLocation',
                        'menu_class'=>false,
                    ));
                    ?>
                    <!-- <li class="current-menu-item">
                        <a href="<?php echo site_url('registered-dietician'); ?>"><?php the_field('menu_left_item','option'); ?></a>
                    </li>
                    <li class="hidden-xs desktop-mobile">
                        <a href="<?php echo site_url('home') ?>">
                            <figure><img src="<?php the_field('header_logo','option'); ?>" class="menu-image menu-image-title-hide" alt=""></figure>
                        </a>
                    </li>
                    <li>
                        <a href="">OUR LEAFY GREENS</a>
                    </li>
                    <li>
                        <a href="">BLOG</a>
                    </li> -->
            </div>
        </div>
    </section>
    <!-- End top header -->