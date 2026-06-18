<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <section class="carrer-mv">
      <div class="page-mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career/carrer-fv 1.jpg" alt="" class="page-mv__image">
        <div class="page-mv__body">
          <h1 class="page-mv__title">研修制度とキャリアパス</h1>
          <p class="page-mv__lead">キャリアパスを支える充実した、研修制度</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="career">
      <div class="section-inner">
      <p class="career__text">
        税理士法人では、スタッフ一人ひとりの成長を支援するために、各ステージに応じた研修制度を整備しています。
        </p>
        <div class="career__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/career/carrea1.jpg" alt="">
        </div>
        <div class="career__list">

          <div class="career__item">
            <h2 class="career__item-title">1.実務基礎研修</h2>
            <p class="career__item-text">
            入社後の初期研修では、会計ソフトの操作方法や記帳の基本、税務申告の流れなど、実務に必要な基礎知識を学びます。<br>
            また、社内ルールやマナー研修も実施し、スムーズに業務へ移行できるようサポートします。
            </p>
          </div>

          <div class="career__item">
            <h2 class="career__item-title">2. 顧客対応スキル研修</h2>
            <p class="career__item-text">
            顧問先とのコミュニケーション能力向上を目的とした研修です。<br>
            訪問時のマナー、電話・メール対応、提案資料の作成・説明スキルを習得し、信頼関係を築ける対応力を養います。
            </p>
          </div>

          <div class="career__item">
            <h2 class="career__item-title">3. 税務・会計専門研修</h2>
            <p class="career__item-text">
            所得税・法人税・消費税などの各税目に関する知識を深め、実務に活かすための専門研修を行います。<br>
            最新の税制改正や事例研究も取り入れ、常に高い専門性を維持します。
            </p>
          </div>

          <div class="career__item">
            <h2 class="career__item-title">4. マネジメント研修</h2>
            <p class="career__item-text">
            チームリーダーやマネージャーとしての役割を担うために、部下指導や進捗管理、業務改善などを学ぶ研修です。<br>
            組織全体の品質向上や人材育成を支えるリーダーを育てます。
            </p>
          </div>

          <div class="career__item">
            <h2 class="career__item-title"><span class="career__training-number">5.</span>外部セミナー・資格支援</h2>
            <p class="career__item-text">
            税理士試験の受験や、外部の専門セミナーへの参加を推奨・支援しています。<br>
            自主的な学びを応援し、長期的なスキルアップをサポートします。
            </p>
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
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  <?php get_footer(); ?>