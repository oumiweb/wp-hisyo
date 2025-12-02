<?php get_header(); ?>

<main>
  <ol class="breadcrumbs margin">
    <li><a href="<?php echo home_url(); ?>">TOP</a></li>

    <?php if (is_page('thanks')): ?>
      <li>ENTRY</li>
    <?php else: ?>
      <li><?php the_title(); ?></li>
    <?php endif; ?>
  </ol>
  <section class="entry entry-thanks">
    <div class="entry-inner">
      <div class="entry__wrapper">
        <div class="entry__header">
          <div class="entry__head">
            <h2 class="entry__lead">送信ありがとうございました。</h2>
            <p class="entry__description">
              3営業日以内に人事担当者より連絡させていただきます。</p>
          </div>
        </div>
      </div>
    </div>
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
  <?php get_footer(); ?>