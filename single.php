<?php get_header(); ?>

<main>
  <ol class="breadcrumbs margin">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
  </ol>
  <section class="blog-detail">
    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <div class="blog-detail__inner">
          <article class="blog-detail__article">
            <header>
              <p class="blog-detail__meta">社内研修　2023.03.25</p>
              <h1 class="blog-detail__title"><?php the_title(); ?></h1>
              <?php if (has_post_thumbnail()): ?>
                <div class="blog-detail__image">
                  <?php the_post_thumbnail('full'); ?>
                </div>
              <?php endif; ?>

            </header>
            <?php the_content(); ?>
          </article>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
  </section>
  
  <div class="blog-detail__pagination">
  <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
  ?>
    <div class="blog-detail__pagination-prev">
    <?php if ($prev_post): ?>
      <a href="<?php echo get_permalink($prev_post->ID); ?>" class="pagination-link">
        <div class="pagination-link__text-group">
          <p class="pagination-link__text"><?php echo esc_html(get_the_title($prev_post->ID)); ?></p>
          <time class="pagination-link__date" datetime="<?php echo get_the_date('Y-m-d', $prev_post->ID); ?>">
            <?php echo get_the_date('Y.m.d', $prev_post->ID); ?>
          </time>
        </div>
        <span class="visually-hidden">前の記事へ</span>
      </a>
      <?php endif; ?>
    </div>
    <!-- 真ん中の線 -->
    <div class="blog-detail__separator"></div>

    <!-- 次の記事 -->
    <div class="blog-detail__pagination-next">
    <?php if ($next_post): ?>
      <a href="<?php echo get_permalink($next_post->ID); ?>" class="pagination-link">
        <div class="pagination-link__text-group">
          <p class="pagination-link__text"><?php echo esc_html(get_the_title($next_post->ID)); ?></p>
          <time class="pagination-link__date" datetime="<?php echo get_the_date('Y-m-d', $next_post->ID); ?>">
            <?php echo get_the_date('Y.m.d', $next_post->ID); ?>
          </time>
        </div>
        <span class="visually-hidden">次の記事へ</span>
      </a>
    <?php endif; ?>
    </div>
  </div>
</main>


<!-- bottomメインビジュアル -->
<section class="visual">
  <div class="visual__image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta/cta-visual1.jpg" alt="">
  </div>

  <div class="visual__entry-box">
    <p class="visual__text">
      わたしたちと一緒に働く仲間を募集中です。<br>
      少数精鋭のチームで、<br>
      あなたも会社と一緒に成長していきましょう。
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>entry/" class="visual__entry_button">ENTRY</a>
  </div>
</section>

<!-- フッター -->
<?php get_footer(); ?>