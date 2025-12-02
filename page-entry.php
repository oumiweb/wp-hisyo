<?php get_header(); ?>

<main>
  <ol class="breadcrumbs ent-margin">
    <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
  </ol>
  <section class="entry">
    <div class="entry-inner">
      <div class="entry__wrapper">
        <div class="entry__header">
          <h3 class="entry__title">ENTRY FORM
          </h3>
          <div class="entry__head">
            <h2 class="entry__lead"><span>新卒・中途採用<br class="sp-only"></span>エントリーフォーム</h2>
            <p class="entry__description">
              当社へ入社ご希望の方は、下記の送信フォームより送信してください。</p>
              <p class="entry__note"><span>※</span>は必須項目になります。</p>
          </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="123" title="新卒・中途採用エントリーフォーム"]'); ?>

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
</main>
  <?php get_footer(); ?>

  