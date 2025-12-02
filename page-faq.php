<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="details-mv">
      <div class="section__mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/faq/faq-fv 1.jpg" alt="オフィス風景" class="section__image">
        <div class="mv__wrapper">
          <h1 class="mv__title"><?php the_title(); ?></h1>
          <p class="mv__sub-title">よくある質問</p>
          <p class="mv__lead">皆様からよく頂くご質問にお答えします。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="faq">
      <div class="section-inner">
        <div class="buttons">
          <a href="#entry" class="scroll-button" >
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

    <div class="accordion">
      <div class="section-inner">
        <h2 class="accordion__title" id="entry">応募・選考について</h2>
      <h3 class="accordion__question jsAccordionQuestion">
        <span>Q</span>応募資格はありますか？
      </h3>
      <div class="accordion-answer">基本的には特別な資格不要ですが、職種によっては必要なスキルや経験があります。</div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>応募方法は？</h3>
      <div class="accordion-answer">
        弊社採用サイトからエントリーしてください。</div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>選考フローは？</h3>
      <div class="accordion-answer">書類選考 → 面接（1〜2回）→ 内定、の流れです。
      </div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>選考にかかる時間は？
      </h3>
      <div class="accordion-answer">応募から内定まで、通常2〜4週間程度です。
      </div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>面接では何を聞かれますか？</h3>
      <div class="accordion-answer">志望動機、これまでの経験、将来やりたいことなどを中心に質問します。
      </div>
      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>面接官はどんな人ですか？</h3>
      <div class="accordion-answer">志望動機、これまでの経験、将来やりたいことなどを中心に質問します。
      </div>
      <!-- キャリア -->
      <h2 class="accordion__title" id="career">キャリアについて</h2>
      <h3 class="accordion__question jsAccordionQuestion">
        <span>Q</span>自分の希望するキャリアパスに進むことはできますか？
      </h3>
      <div class="accordion-answer">可能です。希望や適性に応じたキャリア形成を支援しています。</div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>転勤はありますか？</h3>
      <div class="accordion-answer">
        業務の必要に応じて、転勤が発生する場合があります。</div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>転勤の希望は出せますか？</h3>
      <div class="accordion-answer">	はい、転勤に関する希望も事前に申告できます。
      </div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>ワークライフバランスは？
      </h3>
      <div class="accordion-answer">	ワークライフバランスに配慮した働き方を推進しています。
      </div>

      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>具体的にはどのような制度がありますか？</h3>
      <div class="accordion-answer">	フレックスタイム制度、リモートワーク制度、育休制度などがあります。
      </div>
      <h3 class="accordion__question jsAccordionQuestion"><span>Q</span>育児休暇制度はありますか？</h3>
      <div class="accordion-answer">	はい、育児休暇制度を整備しています。男性社員も取得実績があります。
      </div>
      <!-- 福利厚生について -->
<h2 class="accordion__title" id="welfare">福利厚生について</h2>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>どのような福利厚生制度がありますか？
</h3>
<div class="accordion-answer">
  各種社会保険完備、財形貯蓄制度、資格取得支援、社内イベントなどがあります。
</div>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>財形貯蓄制度の内容は？
</h3>
<div class="accordion-answer">
  財形貯蓄を支援する制度です。給与から積立を行い、資産形成をサポートします。
</div>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>社内イベントの内容は？
</h3>
<div class="accordion-answer">
  社員旅行、レクリエーション、懇親会など交流を深めるイベントを実施しています。
</div>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>部活動について教えてください。
</h3>
<div class="accordion-answer">
  フットサル、ランニング、文化系クラブなど、さまざまな部活動があり自由に参加できます。
</div>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>資格取得支援制度はいくら補助が出ますか？
</h3>
<div class="accordion-answer">
  資格取得にかかる受験料や講座受講料の一部を会社が補助します。（例：最大5万円）
</div>

<h3 class="accordion__question jsAccordionQuestion">
  <span>Q</span>年次有給休暇について教えてください
</h3>
<div class="accordion-answer">
  初年度10日付与、以後は勤続年数に応じて付与日数が増加します。
</div>

    </div>
    </div>   <!-- accordion__container -->

    
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