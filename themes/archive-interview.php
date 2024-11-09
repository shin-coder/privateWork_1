
<?php get_header(); ?>
        <section class="l-interview-archive">
          <h1 class="c-head p-interview__archive-title">社員紹介</h1>
          <ul class="p-card-list">
            <?php
    $args = array(
        'post_type' => 'interview',
        'posts_per_page' => '6',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- ここからループさせる内容 -->
            <li class="p-card-list__item">
              <a href=<?php the_permalink(); ?>>
                <div class="p-card-list__thumbnail">
                  <?php echo display_post_thumbnail(); ?>
                </div>
                <div class="p-card-list__body">
                  <p class="p-card-list__employee">
                    <span><?php echo get_post_meta(get_the_ID(), 'separate', true); ?></span> <span><?php echo get_post_meta(get_the_ID(), 'name', true); ?></span>
                    <span><?php echo get_post_meta(get_the_ID(), 'year', true); ?></span>
                    
                  </p>
                  <h3 class="p-card-list__copy">
                    <?php the_title(); ?>
                  </h3>
                  <a class="p-card-list__link" href="#"
                    >インタビュー記事はこちら</a
                  >
                </div>
              </a>
            </li>
            <!-- ループさせる内容ここまで -->
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
            
          </ul>
        </section>
      <?php get_footer(); ?>
