<?php get_header(); ?>

  <main>
  <?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>

    <section class="benefit-mv">
      <div class="section__mv">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/benefits/benefits-fv.jpg" alt="" class="section__image">
        <div class="mv__wrapper">
          <h1 class="mv__title"><?php the_title(); ?>
          </h1>
          <p class="mv__lead">充実した福利厚生制度を設けています。</p>
        </div>
      </div>
      <ol class="breadcrumbs">
      <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>
    </section>
    <section class="benefit">
      <div class="section-inner">
        <h2 class="benefit__title section-title section-title--right">各種制度</h2>
        <dl class="benefit__list">
          <dt class="benefit__term">手当</dt>
          <dd class="benefit__desc">
            ・通勤手当（上限月5万円）<br>
            ・時間外割増手当<br>
            ・役職手当<br>
            ・退職金
          </dd>

          <dt class="benefit__term">制度</dt>
          <dd class="benefit__desc">
            財形貯蓄
          </dd>

          <dt class="benefit__term">保険</dt>
          <dd class="benefit__desc">
            社会保険完備
          </dd>

          <dt class="benefit__term">施設</dt>
          <dd class="benefit__desc">
            ・社員向けジム<br>
            ・社内託児所
          </dd>

          <dt class="benefit__term">休暇・休日</dt>
          <dd class="benefit__desc">
            ・完全週休2日制<br>
            ・年次有給休暇（初年度10日／年度途中入社は比例付与）<br>
            ・年末年始休暇（12月29日～1月3日：6日間）<br>
            ・夏季休暇（6月〜9月中：5日間）<br>
            ・慶弔休暇<br>
            ・産前産後休暇<br>
            ・リフレッシュ休暇（3年勤務で5日／以降5年勤務ごとに5日支給）
          </dd>

        </dl>
      </div>
    </section>

    <section class="benefit-voice">
      <div class="section-inner">
        <h2 class="benefit-voice__title">制度利用者の声</h2>

        <div class="benefit-voice__list">
          <div class="benefit-voice__item">
            <p class="benefit-voice__year">2013年入社</p>
            <p class="benefit-voice__name">堀内 優</p>
            <p class="benefit-voice__text">
              資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。<br>
              この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
              会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
            </p>
          </div>

          <div class="benefit-voice__item">
            <p class="benefit-voice__year">2015年入社</p>
            <p class="benefit-voice__name">神垣 理沙</p>
            <p class="benefit-voice__text">
              出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>
              特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
              今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。
            </p>
          </div>

        </div>

        <div class="benefit-voice__img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/benefits/benefits.jpg" alt="男性社員と女性社員が笑顔で写っている写真">
        </div>
      </div>
    </section>


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
    <?php endwhile; ?>
    <?php endif; ?>

    </main>

    <?php get_footer(); ?>
