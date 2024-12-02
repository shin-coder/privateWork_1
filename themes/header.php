<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script> -->
    
    <title>Green Energy</title>

    <?php wp_head();?>
  </head>
  <body <?php body_class() ?>>
    <header class="l-header">
      <h1 class="p-header__logo">
        <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Green Energy.svg" alt="Green-Energy" /></a>
      </h1>
      <nav class="p-header__nav">
        <ul class="p-heder__nav-lists">
          <li class="c-text p-header__nav-item"><a href=<?php the_permalink(13); ?>>会社概要</a></li>
          <li class="c-text p-header__nav-item"><a href=<?php echo home_url('/'); ?>#service>事業紹介</a></li>
          <li class="c-text p-header__nav-item"><a href=<?php echo home_url('/interview') ?>>社員紹介</a></li>
          <li class="c-text p-header__nav-item p-header__entry"><a href=<?php the_permalink(20); ?>>Entry</a></li>
        </ul>
      </nav>
      <button class="p-header__hum-button" id="js-hum">
        <div></div>
        <div></div>
        <div></div>
      </button>
      <div class="p-sp__menu">
        <h1 class="p-header__logo--sp">
          <a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Green Energy.svg" alt="Green-Energy" /></a>
        </h1>
        <ul class="p-sp__menu-list">
          <li class="c-text p-sp__menu-item"><a href=<?php the_permalink(13); ?>>会社概要</a></li>
          <li class="c-text p-sp__menu-item"><a href=<?php echo home_url('/'); ?>#service>事業紹介</a></li>
          <li class="c-text p-sp__menu-item"><a href=<?php echo home_url('/interview') ?>>社員紹介</a></li>
          <li class="c-button p-sp__menu-item"><a href=<?php the_permalink(20); ?>>Entry</a></li>
        </ul>
        <ul class="p-ham-menu__image">
          <li class="p-ham-menu__image-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-1.png" alt="" />
          </li>
          <li class="p-ham-menu__image-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-2.png" alt="" />
          </li>
          <li class="p-ham-menu__image-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-3.png" alt="" />
          </li>
          <li class="p-ham-menu__image-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-4.png" alt="" />
          </li>
        </ul>
      </div>
    </header>

    <main>
      <div class="l-container">