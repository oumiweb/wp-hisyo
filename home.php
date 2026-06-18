<?php get_header(); ?>

<main>
  <div class="page-mv">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog/blog-fv.jpg" alt="オフィス風景" class="page-mv__image">
    <div class="page-mv__body">
      <h1 class="page-mv__title">BLOG</h1>
      <p class="page-mv__subtitle">採用ブログ</p>
      <p class="page-mv__lead">採用情報やイベント情報などをご紹介します。</p>
    </div>
  </div>
  <ol class="breadcrumbs">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
  </ol>
  <section class="blog-cards">
    <div class="section-inner">
      <div class="cards">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('parts-archive'); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
      <div class="blog__arrow-btn">
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>
</main>

<!-- bottomメインビジュアル -->
<section class="visual">
  <div class="visual__image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta/cta-visual1.jpg" alt="オフィスビルの写真">
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

<?php get_footer(); ?>