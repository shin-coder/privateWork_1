<?php get_header();?>
        <section class="l-interiew__lower">
          <div class="p-interview__thumbnail">
            <?php display_post_thumbnail(); ?>
          </div>
          <h1 class="p-interview__title">
            <?php the_title(); ?>
          </h1>
          <small class="p-interview__employee-name"
            >山田 真理子 2015年入社</small
          >
          <div class="c-text p-interview__text"><?php the_content(); ?>
        </div>
          <a href="" class="c-button p-button__next-interview"
            >次のインタビュー記事を読む</a
          >
        </section>
      <?php get_footer(); ?>