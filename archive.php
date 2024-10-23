<?php get_header(); ?>
        <section class="l-news-list">
          <h2 class="c-head p-news__head">News一覧</h2>

          <ul class="p-news__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <!-- 繰り返し処理する内容 -->
            <li class="p-news__item">
              <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿データがない場合表示される部分 -->
          <?php endif; ?>


            
          </ul>
        </section>
      </div>
    </main>

<?php get_footer(); ?>