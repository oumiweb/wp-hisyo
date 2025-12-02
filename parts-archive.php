
      <article class="card">
        <a href="<?php the_permalink(); ?>" class="card__link">
          <div class="card__item">
            <div class="card__img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog/blog01.jpg" alt="ブログのサムネイル">
              <?php endif; ?>
            </div>
            <div class="card__body">
              <?php
              $cats = get_the_category();
              if ($cats) :
              ?>
                <p class="card__category">
                  <?php
                  $cat_names = array_map(function ($cat) {
                    return esc_html($cat->name);
                  }, $cats);
                  echo implode(' ', $cat_names); // 半角スペースで区切る
                  ?>
                  </p>

                <?php endif; ?>
                <h2 class="card__title"><?php the_title(); ?></h2>
                <time datetime="<?php the_time('Y-m-d'); ?>" class="card__date"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
        </a>
      </article>