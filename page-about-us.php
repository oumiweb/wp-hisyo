<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <section class="about-us">
        <div class="section__mv">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/about-fv.jpg" alt="" class="section__image">
          <div class="mv__wrapper">
            <h1 class="mv__title"><?php the_title(); ?>
            </h1>
            <p class="mv__lead">私たちの理念を紹介します。</p>
          </div>
        </div>
        <ul class="breadcrumbs">
          <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
        </ul>
      </section>
      <section class="importance">
        <h2 class="importance__title section-title">私たちが大切にしていること</h2>
        <div class="section-inner">

          <div class="importance__card">
            <div class="importance__wrapper">
              <span class="importance__number"></span>
              <h3 class="importance__heading">信頼に基づく、誠実なサポート</h3>
            </div>
            <p class="importance__text">
              税務・会計の専門家として、お客様との信頼関係を何よりも大切にしています。
              数字の裏にある想いを丁寧にくみ取り、誠実で透明性のある対応を心がけ、
              長期的に寄り添う“経営のパートナー”を目指します。
            </p>
          </div>

          <div class="importance__card">
            <div class="importance__wrapper">
              <span class="importance__number"></span>
              <h3 class="importance__heading">地域と共に歩む、身近な専門家であること</h3>
            </div>
            <p class="importance__text">
              地元企業や個人事業主の皆さまに寄り添い、地域経済の発展に貢献します。
              税務相談から経営支援まで、身近な存在として「いつでも相談できる安心感」をお届けします。
            </p>
          </div>

          <div class="importance__card">
            <div class="importance__wrapper">
              <span class="importance__number"></span>
              <h3 class="importance__heading">変化に対応し、最適な提案を</h3>
            </div>
            <p class="importance__text">
              税制や会計基準は常に変化しています。
              私たちは最新の法改正・ITツールを積極的に活用し、
              クライアントの課題に合わせた最適な解決策を提案いたします。
            </p>
          </div>

          <div class="importance__card">
            <div class="importance__wrapper">
              <span class="importance__number"></span>
              <h3 class="importance__heading">共に成長するパートナーとして</h3>
            </div>
            <p class="importance__text">
              経営者の夢や目標に寄り添い、成長を共に喜べる存在でありたいと考えています。
              税務の枠を超えて、経営計画や資金繰りなど、未来を見据えた支援にも力を入れています。
            </p>
          </div>

          <div class="importance__card">
            <div class="importance__wrapper">
              <span class="importance__number"></span>
              <h3 class="importance__heading">働く人の成長が、事務所の力に</h3>
            </div>
            <p class="importance__text">
              スタッフ一人ひとりが専門性を磨き、やりがいを感じながら働ける環境を大切にしています。
              学び続ける姿勢を応援し、チーム全体でより良いサービスを追求していきます。
            </p>
          </div>
        </div>
      </section>

      <section class="message">
        <h2 class="message__title section-title">代表メッセージ</h2>
        <div class="about-us__inner">
          <div class="message__content">
            <div class="message__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/ceo.png" alt="代表の写真">
            </div>

            <div class="message__textarea">
              <div class="message__lead-wrapper">
                <h3 class="message__lead">
                  あなたの「挑戦」と「想い」に寄り添い、<br>
                  共に未来を築くこと。<br>
                  それが飛翔税理士事務所の使命です。
                </h3>
              </div>

              <div class="message__body">
                <p>
                  飛翔税理士事務所は、企業や個人の皆さまに寄り添い、<br>
                  税務・会計・経営のあらゆる課題解決をサポートする事務所です。<br>
                  「信頼と誠実」を軸に、地域社会と共に歩むパートナーであり続けることを目指しています。
                </p><br>

                <p>
                  ただ数字を扱うのではなく、<br>
                  その先にあるお客様の想いや目標を大切にし、<br>
                  経営の安定と発展に貢献するための最適なご提案を行っています。<br>
                  長年の経験と専門知識をもとに、安心と信頼をお届けします。
                </p><br>

                <p>
                  私たちは、一人ひとりの努力と成長が<br>
                  お客様へのより良いサービスにつながると考えています。<br>
                  スタッフ全員が学び続け、誠実な姿勢で業務に取り組むことで、<br>
                  地域に貢献できる税理士事務所を目指しています。
                </p>
              </div>


              <p class="message__name">
              橘　大輔</p>
            </div>
          </div>
        </div>
      </section>

      <section class="business">
        <div class="about-us__inner">
          <h2 class="business__title">業務内容</h2>
          <p class="business__lead">
          飛翔税理士事務所では、法人・個人のお客様の幅広いニーズにお応えするために、<br>
          税務・会計を中心とした多様なサポートを行っています。
          </p>
          <div class="business__card">
            <div class="business__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/consulting 1.png" alt="女性社員が微笑む写真">
            </div>

            <div class="business__text">
              <hgroup>
              <h3 class="business__category">税務顧問業務</h3>
              <p class="business__heading">経営の安心を支える、信頼のパートナー</p>
              </hgroup>
              <p class="business__description">
              月次巡回監査や決算申告、節税対策などを通じて、お客様の経営状況を的確に把握し、安心して事業に専念できる環境を整えます。<br>
          税務だけでなく、経営全体のサポートを行う“伴走型”の顧問サービスです。
              </p>
            </div>
          </div>
          <div class="business__card">
            <div class="business__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/solution-sales 1.jpg" alt="男性社員がPC触っている写真">
            </div>

            <div class="business__text">
              <hgroup>
              <h3 class="business__category">創業・開業支援業務</h3>
              <p class="business__heading">夢のスタートを、確かな知識でサポート</p>
              </hgroup>
              <p class="business__description">
              会社設立・開業に必要な手続きや、資金計画・事業計画の作成支援まで、経営者の第一歩をトータルにサポートします。<br>
          税理士としての視点から、安定した経営基盤づくりをお手伝いします。
              </p>
            </div>
          </div>
          <div class="business__card">
            <div class="business__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about-us/desiner 1.jpg" alt="女性社員がPCでデザインをしている写真">
            </div>

            <div class="business__text">
              <hgroup>
              <h3 class="business__category">相続・事業承継支援</h3>
              <p class="business__heading">大切な想いと資産を、次世代へつなぐ</p>
              </hgroup>
              <p class="business__description">
              相続税申告から生前対策、事業承継の設計まで、<br>
          ご家族や企業の将来を見据えた最適なプランをご提案。円満な相続・承継の実現を全力でサポートいたします。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="company" id="company">
        <div class="section-inner">
          <h2 class="company__title">会社概要</h2>
          <dl class="company__list">
            <dt class="company__term">会社名</dt>
            <dd class="company__desc">飛翔税理士事務所</dd>
            <dt class="company__term">所在地</dt>
            <dd class="company__desc">〒000-0000<br class="sp-only">沖縄県那覇市〇〇1-1-1</dd>
            <dt class="company__term">代表者名</dt>
            <dd class="company__desc">橘　大輔（代表税理士）</dd>
            <dt class="company__term">事業内容</dt>
            <dd class="company__desc">
              ・法人・個人の税務顧問<br>
              ・決算・申告書類の作成<br>
              ・創業・開業支援コンサルティング<br>
              ・相続、事業継承に関する相談
            </dd>
            <dt class="company__term">電話番号</dt>
            <dd class="company__desc">098-123-4567</dd>
            <dt class="company__term">ウェブサイトURL</dt>
            <dd class="company__desc"><a href="" target="_blank"
                rel="noopener noreferrer">https://hisyo.xx.jp</a></dd>
            <dt class="company__term">メールアドレス</dt>
            <dd class="company__desc"><a href="">hisyo@xxx.xx.jp</a></dd>
            <dt class="company__term">設立年月</dt>
            <dd class="company__desc">1993年4月1日</dd>
          </dl>
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