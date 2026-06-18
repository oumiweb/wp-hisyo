<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="details-mv">
      <div class="page-mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/details/details-fv 1.jpg" alt="オフィス風景" class="page-mv__image">
        <div class="page-mv__body">
          <h1 class="page-mv__title"><?php the_title(); ?></h1>
          <p class="page-mv__subtitle">募集要項</p>
          <p class="page-mv__lead">飛翔は幅広く仲間を募集しています。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="details">
    <?php the_content(); ?>
    </section>


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
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  <?php get_footer(); ?>