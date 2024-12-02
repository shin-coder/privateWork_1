
<?php 
get_header(); ?>
        <section class="l-main-view">
          <picture class="p-main__image el1">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/FV.png" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/FV.png" alt="" />
          </picture>
          <div class="p-main__text-area">
            <h1 id="js-split" class="p-main__title el2">Enveloping<br />The Future</h1>
            <h2 class="p-main__title--sub el3">地球に優しい包装で、未来を包む</h2>
            <p class="c-text p-main__text el4">
              グリーンエナジー株式会社は、環境保護と持続可能な未来の実現に向けて、革新的な包装ソリューションを提供することをミッションとしています。私たちは、従来のプラスチック包装に代わる、生分解性素材や再生可能資源を活用した包装材の開発と製造に取り組んでいます。<br />
              環境への配慮と製品の品質を両立させることで、企業の環境負荷低減を支援し、同時に消費者の環境意識向上にも貢献しています。私たちの包装材は、食品から電子機器まで幅広い産業で利用され、循環型社会の構築に寄与しています。
            </p>
          </div>
        </section>
        <section class="l-about">
          <h2 class="p-about__title fade">
            未来を包む、環境を守る。<br />
            グリーンエナジーの革新
          </h2>
          <div class="p-about__details fade">
            <p class="p-about__text c-text mt-16">
              グリーンエナジーは、技術革新と持続可能性を追求し続けることで、地球環境の保護と経済成長の両立を目指しています。私たちと共に、環境に優しい包装の未来を創造を。
            </p>
            <a class="c-button p-about__button mt-24" href="./about.html">グリーンエナジーを知る</a>
          </div>
        </section>
        <section id="service" class="l-service">
          <h2 class="c-head p-service__title fade">Our Services</h2>
          <ul class="p-service__list mt-48">
            <li class="p-service__item">
              <div class="p-service__item-wrap fade">
                <h3 class="p-service__item-title"><sup>01</sup>エコラップ</h3>
                <p class="c-text p-service__text">
                  生分解性プラスチックを使用した食品包装用フィルム。
                  従来のプラスチックフィルムと同等の保存性能を持ちながら、使用後は自然に分解されます。
                </p>
                <a href="<?php the_permalink(15); ?>" class="c-button--small p-service__link">→</a>
              </div>
            </li>
            <li class="p-service__item">
              <div class="p-service__item-wrap fade">
                <h3 class="p-service__item-title"><sup>02</sup>グリーンボックス</h3>
                <p class="c-text p-service__text">
                  再生紙と植物由来インクを使用した段ボール箱。
                  耐久性と環境負荷低減を両立し、さまざまな製品の輸送や保管に適しています。
                </p>
                <a href="" class="c-button--small p-service__link">→</a>
              </div>
            </li>
            <li class="p-service__item">
              <div class="p-service__item-wrap fade">
                <h3 class="p-service__item-title"><sup>03</sup>バイオパック</h3>
                <p class="c-text p-service__text">
                  バイオマス素材を利用した軽量で丈夫な包装材。電子機器や精密機器の保護に最適で、従来の発泡スチロールの代替として注目されています。
                </p>
                <a href="" class="c-button--small p-service__link">→</a>
              </div>
            </li>
          </ul>
        </section>
        <section class="l-gallery">
          <ul class="p-gallery__area">
            <li class="p-gallery__item p-item-1 p-gallery__item--square fade">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-1.png" alt="" />
            </li>
            <li class="p-gallery__item p-item-2 p-gallery__item--square fade">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-2.png" alt="" />
            </li>
            <li class="p-gallery__item p-item-3 p-gallery__item--rectangle fade">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-3.png" alt="" />
            </li>
            <li class="p-gallery__item p-item-4 p-gallery__item--rectangle fade">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery-item-4.png" alt="" />
            </li>
          </ul>
        </section>
        <section id="interview" class="l-interview">
          <h2 class="c-head p-interview__head fade">Interview</h2>
          <div class="swiper mySwiper fade">
            <div class="swiper-wrapper">
                <?php
                  $args = array(
                  'post_type' => 'interview',
                  'posts_per_page' => 3,
                  );
                  $query = new WP_Query($args);

                  if ($query->have_posts()):
                  while ($query->have_posts()):
                  $query->the_post();
                  ?>

              <div class="swiper-slide p-article">
                <picture class="p-article__image">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/employee-1.png" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/employee-1.png" alt="" />
                </picture>
                <h3 class="p-article__title"><?php the_title(); ?></h3>
                <small>山田 真理子 / 2015年入社</small>
                <a href="<?php the_permalink(); ?>" class="c-button--white p-article__button">詳しく見る</a>
              </div>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  endif;
                  ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="p-interview__bg">
            <div class="loop-1">
              Employee interview Employee interview Employee interview Employee interview Employee
              interview Employee interview Employee interview Employee interview
            </div>
            <div class="loop-2">
              Employee interview Employee interview Employee interview Employee interview Employee
              interview Employee interview Employee interview Employee interview
            </div>
          </div>
        </section>
        <section class="l-news">
          <div class="p-head-container">
            <h2 class="c-head p-news__head fade">News</h2>
            <div class="p-link-container fade">
              <p>ニュース一覧を見る</p>

              <?php
              $news = get_term_by('slug', 'news', 'category');
              $news_link = get_term_link($news, 'category');
              ?>
              
              <a href="<?php echo $news_link; ?>" class="c-button--small p-news__link">→</a>
            </div>
          </div>
          <div class="p-news__wrap">
            <ul class="p-news__list fade">
              <?php if(have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                  <li class="p-news__item">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
                <?php endwhile; ?>
                <?php else: ?>
              <?php endif; ?>
              <!-- <li class="p-news__item">
                <time datetime="2024-07-05">2024.07.05</time>
                <a>WEBサイトをリニューアルしました</a>
              </li>
              <li class="p-news__item">
                <time datetime="2024-06-01">2024.06.01</time>
                <a>社員イタンビューを更新しました</a>
              </li> -->
            </ul>
          </div>
        </section>
        <section class="l-recruit">
          <picture class="p-recruit__image fade">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/recruit-image.png" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit-image.png" alt="" />
          </picture>
          <div class="p-recruit__text-area fade">
            <h2 class="c-head p-recruit__head">Recruit</h2>
            <p class="c-text p-recruit__text">
              私たちと共に、環境に優しい包装の未来を創造できる仲間を募集しています。
            </p>
            <div class="p-entry-area">
              <p>エントリーはこちらから</p>
              <a href="" class="c-button--small p-entry__button">→</a>
            </div>
          </div>
        </section>
        <?php get_footer(); ?>
