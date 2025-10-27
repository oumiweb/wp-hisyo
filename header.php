<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <?php wp_head(); ?>
</head>

<body class="top-page">
  <header class="header">
    <?php if (is_front_page()) : ?>
      <div class="header--white">
        <!-- トップページ用ロゴ・ナビ -->
        <div>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="header__logo-img header__logo-img--white"
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-white.png"
              alt="飛翔税理士事務所 | テクノロジーで社会課題を解決する">
          </a>
        </div>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/details/')); ?>" class="recruitment_btn">募集要項</a></li>
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="entry_btn">ENTRY</a></li>
          </ul>
        </nav>
        <button type="button" class="button hamburger js-hamburger" aria-controls="js-global-menu"
          aria-expanded="false" aria-label="メニューを開閉する">
          <span class="hamburger__line"></span>
          <span class="hamburger__label">MENU</span>
        </button>
      </div>
    <?php else : ?>
      <div class="header--black">
        <!-- 下層ページ用ロゴ・ナビ -->
        <div>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="header__logo-img header__logo-img--black"
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png"
              alt="株式会社TETOTE | テクノロジーで社会課題を解決する">
          </a>
        </div>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/details/')); ?>" class="recruitment_btn">募集要項</a></li>
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/entry/')); ?>" class="entry_btn">ENTRY</a></li>
          </ul>
        </nav>
        <button type="button" class="button hamburger js-hamburger" aria-controls="js-global-menu"
          aria-expanded="false" aria-label="メニューを開閉する">
          <span class="hamburger__line"></span>
          <span class="hamburger__label">MENU</span>
        </button>
      </div>
    <?php endif; ?>

    <div class="header--black">
      <div><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header__logo-img header__logo-img--black"
            src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="株式会社TETOTE | テクノロジーで社会課題を解決する"></a>
      </div>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn">募集要項</a></li>
          <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn">ENTRY</a></li>
        </ul>
      </nav>
      <button type="button" class="button hamburger js-hamburger" aria-controls="js-glabal-menu"
        aria-expanded="false" aria-label="メニューを開閉する">
        <span class="hamburger__line"></span>
        <span class="hamburger__label">MENU</span>
      </button>
    </div>
    <div class="sp-global-menu" id="js-global-menu" aria-hidden="true">
      <header class="header--sp">
        <div><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header__logo-img header__logo-img--black"
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="株式会社TETOTE | テクノロジーで社会課題を解決する"></a>
        </div>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn recruitment_btn--sp">募集要項</a></li>
            <li class="header__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn">ENTRY</a></li>
          </ul>
        </nav>
        <button type="button" class="button hamburger js-hamburger" aria-controls="js-global-menu"
          aria-expanded="false" aria-label="メニューを開閉する">
          <span class="hamburger__line"></span>
          <span class="hamburger__label">MENU</span>
        </button>
      </header>
      <section class="recruit-links">
        <div class="recruit-links__inner">

          <div class="recruit-links__logo-area">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/tetote-logo-black.png" alt="TETOTEロゴ" class="recruit-links__logo" />
          </div>

          <div class="recruit-links__content">
            <div class="recruit-links__grid">

              <ul class="recruit-links__list">
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>about-us/">
                    <p class="recruit-links__en">ABOUT US</p>
                    <p class="recruit-links__ja">TETOTEについて</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>staff/">
                    <p class="recruit-links__en">STAFF</p>
                    <p class="recruit-links__ja">社員について</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>blog/">
                    <p class="recruit-links__en">BLOG</p>
                    <p class="recruit-links__ja">採用ブログ</p>
                  </a>
                </li>
              </ul>
              <ul class="recruit-links__list">
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>benefits/">
                    <p class="recruit-links__en">BENEFITS</p>
                    <p class="recruit-links__ja">福利厚生について</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>career/">
                    <p class="recruit-links__en">CARRER</p>
                    <p class="recruit-links__ja">研修制度とキャリアパス</p>
                  </a>
                </li>
                <li class="recruit-links__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>faq/">
                    <p class="recruit-links__en">FAQ</p>
                    <p class="recruit-links__ja">よくある質問</p>
                  </a>
                </li>
              </ul>
            </div>

            <ul class="sp-button">
              <li><a href="<?php echo esc_url(home_url('/')); ?>details/" class="recruitment_btn recruitment_btn--large">募集要項</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>entry/" class="entry_btn entry_btn--large">ENTRY</a></li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </header>