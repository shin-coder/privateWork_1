</div>
    </main>

    <footer class="l-footer">
      <dl class="p-footer__nav-container">
        <dd class="c-text p-footer__nav-item"><a href=<?php the_permalink(13); ?>>会社概要</a></dd>
        <dd class="c-text p-footer__nav-item">
          事業紹介
          <ul class="p-item__detail-list">
            <li class="c-text--small p-item__detail-item">
              <a href=<?php the_permalink(15); ?>>エコラップ</a>
            </li>
            <li class="c-text--small p-item__detail-item"><a href="">グリーンボックス</a></li>
            <li class="c-text--small p-item__detail-item"><a href="">バイオラップ</a></li>
          </ul>
        </dd>
        <dd class="c-text p-footer__nav-item"><a href="<?php echo home_url('/interview') ?>">社員紹介</a></dd>
        <dd class="c-text p-footer__nav-item">
          <a href="<?php the_permalink(20); ?>">採用情報</a>
          <!-- <ul class="p-item__detail-list">
              <li class="c-text--small p-item__detail-item"><a href="">新卒採用</a></li>
              <li class="c-text--small p-item__detail-item"><a href="">中途採用</a></li>
            </ul> -->
        </dd>
      </dl>
      <div class="p-footer__logo">
        <img src="./assets/img/Green Energy.svg" alt="" />
      </div>
    </footer>
    <?php wp_footer();?>
  </body>
</html>
