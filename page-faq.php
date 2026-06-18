<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="details-mv">
      <div class="page-mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/faq/faq-fv 1.jpg" alt="オフィス風景" class="page-mv__image">
        <div class="page-mv__body">
          <h1 class="page-mv__title"><?php the_title(); ?></h1>
          <p class="page-mv__subtitle">よくある質問</p>
          <p class="page-mv__lead">皆様からよく頂くご質問にお答えします。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="faq">
      <div class="section-inner">
        <div class="buttons">
          <a href="#entry" class="scroll-button">
            応募・選考について
            <span class="scroll-button-icon" aria-hidden="true">↓</span>
          </a>
          <a href="#career" class="scroll-button scroll-button--faq">
            キャリアについて
            <span class="scroll-button-icon" aria-hidden="true">↓</span>
          </a>
          <a href="#welfare" class="scroll-button scroll-button--faq">
            福利厚生について
            <span class="scroll-button-icon" aria-hidden="true">↓</span>
          </a>
        </div>
      </div>
    </section>

    <div class="faq-accordion">
      <div class="section-inner">
        <?php if (trim(get_post()->post_content)) : ?>
          <?php the_content(); ?>
        <?php else : ?>
          <?php get_template_part('parts/faq-accordion'); ?>
        <?php endif; ?>
      </div>
    </div>

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
