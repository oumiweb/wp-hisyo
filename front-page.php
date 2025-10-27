<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <section class="fv">
        <div class="fv__slider">
          <div class="fv__slide fv__slide1"></div>
          <div class="fv__slide fv__slide2"></div>
        </div>
        <h2 class="fv__title fade-in delay-1">Flying Together<br>
          into the Future</h2>
        <p class="fv__subtitle fade-in delay-2">未来への飛翔を、共に</p>
        <div class="fv__wrapper fade-in delay-3">
          <a class="fv__newsBanner" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
            <span class="fv__newsBanner--label">NEWS</span>
            <div class="fv__newsBanner--content">
              <?php
              // 最新の投稿を1件取得
              $latest_post = get_posts(array(
                'posts_per_page' => 1,  // 1件だけ取得
                'post_status' => 'publish'  // 公開済みの投稿のみ
              ));

              if (!empty($latest_post)) :
                $post = $latest_post[0]; // 最初の投稿を取得
              ?>
                <p class="fv__newsBanner--text"><?php echo esc_html(get_the_title($post)); ?></p>
                <p class="fv__newsBanner-viewmore">VIEW MORE</p>
              <?php endif; ?>
            </div>
          </a>
        </div>

      </section>


      <section class="top-about">
        <div class="slider-wrapper">
          <ul class="slider">
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide01.jpg" alt="男性が電話をかけている画像" />
            </li>
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide02.jpg" alt="女性がパソコンで作業している画像" />
            </li>
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide03.jpg" alt="女性がプレゼンしている画像" />
            </li>
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide01.jpg" alt="男性が電話をかけている画像" />
            </li>
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide02.jpg" alt="女性がパソコンで作業している画像" />
            </li>
            <li class="slide">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/top-slide03.jpg" alt="女性がプレゼンしている画像" />
            </li>
          </ul>
          <h3 class="top-about__title">
            <span>中小企業の成長を、</span>
            <span>税務・会計の面から支えます</span>
          </h3>
        </div>
        <div class="section-inner">
          <div class="top-about__text">
            <p>
              「信頼」と「対話」<br>
              中小企業が抱える課題に向き合い、<br>
              企業と経営者の可能性を最大限に引き出す。<br>
              それが私達の役割。
            </p>
            <p>
              単につなぐだけじゃない。<br>
              「手と手」を取り合っていけるような、<br>
              持続可能な関係を、一緒に作りませんか？
            </p>
          </div>

          <div class="top-about__vewmore">
            <a class="viewmore-btn" href="<?php echo esc_url(home_url('/')); ?>about-us/">VIEW MORE</a>
          </div>
        </div>
      </section>

      <section class="top-member">
        <div class="inner">
          <div class="title-box">
            <span class="top-member__title--en title-box__en">MEMBER</span>
            <h2 class="top-member__title--ja title-box__ja"><span>人</span>を知る</h2>
          </div>
          <p class="section-text"> 飛翔の職員がどういった信念を持って働いているのか、<br>
            一日のスケジュールや仕事内容などを紹介します。</p>
          <div class="swiper top-member__swiper">
            <div class="swiper-wrapper">
              <?php
              $args = [
                'post_type'      => 'staff',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
              ];
              $staff_query = new WP_Query($args);
              ?>

              <?php if ($staff_query->have_posts()) : ?>
                <?php while ($staff_query->have_posts()) : $staff_query->the_post(); ?>
                  <?php
                  $staff_image = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // アイキャッチ画像
                  $staff_name = get_field('staff_name'); // ACFフィールド：名前
                  $staff_position = get_field('staff_position'); // ACFフィールド：役職
                  $staff_year = get_field('staff_year'); // ACFフィールド：入社年
                  $staff_msg1 = get_field('staff_message_1'); // ACFフィールド：メッセージ1
                  $staff_msg2 = get_field('staff_message_2'); // ACFフィールド：メッセージ2
                  ?>
                  <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>" class="staff-card__link">
                      <div class="staff-cards">
                        <img src="<?php echo esc_url($staff_image); ?>" alt="<?php echo esc_attr($staff_name); ?>の写真" class="staff-card__image">
                        <div class="staff-card__message">
                          <span><?php echo esc_html($staff_msg1); ?></span>
                          <span><?php echo esc_html($staff_msg2); ?></span>
                        </div>
                        <div class="staff-card__info">
                          <p class="staff-card__position"><?php echo esc_html($staff_position); ?>&nbsp;&nbsp;<?php echo esc_html($staff_year); ?></p>
                          <p class="staff-card__name"><?php echo esc_html($staff_name); ?></p>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p>スタッフ情報がまだ登録されていません。</p>
              <?php endif; ?>

            </div>
      </section>

      <section class="top-benefits">
        <div class="section-inner">
          <div class="title-box">
            <span class="title-box__en">BENEFITS</span>
            <h2 class="top-benefits__title-ja title-box__ja"><span>制度・環境</span>を知る</h2>
          </div>
          <p class="top-benefits__section-text">当所では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
          <ul class="top-benefits__list">
            <li class="top-benefits__item">
              <a href="<?php echo esc_url(home_url('/')); ?>career/" class="top-benefits__link">
                <div class="top-benefits__wrapper">
                  <img class="top-benefits__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/career.svg" alt="研修制度とキャリアパス" />
                  <span class="top-benefits__label">Traning And Career</span>
                  <h3 class="top-benefits__title">研修制度とキャリアパス</h3>
                  <div class="top-benefits__arrow">
                    <div class="arrow-black-btn"></div>
                  </div>
                </div>
                <p class="top-benefits__text">
                  個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。
                </p>
              </a>
            </li>

            <li class="top-benefits__item">
              <a href="<?php echo esc_url(home_url('/')); ?>benefits/" class="top-benefits__link">
                <div class="top-benefits__wrapper">
                  <img class="top-benefits__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/hukurikousei.svg" alt="">
                  <span class="top-benefits__label">Employee Benefits</span>
                  <h3 class="top-benefits__title">福利厚生</h3>
                  <div class="top-benefits__arrow">
                    <div class="arrow-black-btn"></div>
                  </div>
                </div>
                <p class="top-benefits__text">
                  飛翔の福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。
                </p>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="top-blog">
        <div class="section-inner">
          <div class="top-blog__title title-box">
            <div class="title-box__group">
              <span class="title-box__en">BLOG</span>
              <h2 class="title-box__ja">採用ブログ</h2>
            </div>

            <a class="viewmore-btn__link" href="<?php echo esc_url(home_url('/')); ?>blog/blog/">
              <span class="circle-btn"></span>
              <span class="btn-text">VIEW MORE</span>
            </a>
          </div>

          <p class="section-text">採用情報やイベント情報、社員の紹介など、<br>
            日々の現場の様子をご紹介します。</p>
          <div class="cards">
            <?php
            $blog_query = new WP_Query(array(
              'post_type' => 'post', // 投稿タイプが通常の「投稿」の場合
              'posts_per_page' => 4  // 最新4件を表示
            ));
            ?>

            <?php if ($blog_query->have_posts()) : ?>
              <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <article class="card">
                  <a href="<?php the_permalink(); ?>" class="card__link">
                    <div class="card__item">
                      <div class="card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/common/no-image.jpg" alt="no image">
                        <?php endif; ?>
                      </div>
                      <div class="card__body">
                        <p class="card__category">
                          <?php
                          $category = get_the_category();
                          if (!empty($category)) {
                            echo esc_html($category[0]->name);
                          }
                          ?>
                        </p>
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <time class="card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      </div>
                    </div>
                  </a>
                </article>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <p>ブログ記事がまだありません。</p>
            <?php endif; ?>

            <!-- VIEW MORE ボタン -->
            <div class="top-blog__viewmore">
              <a class="viewmore-btn__link" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                <span class="circle-btn"></span>
                <span class="btn-text">VIEW MORE</span>
              </a>
            </div>
          </div>

        </div>
      </section>

      <section class="top-recruitment">
        <div class="rec-inner">
          <div class="title-box">
            <span class="title-box__en">RECRUITMENT</span>
            <h2 class="title-box__ja">採用情報</h2>
          </div>
          <p class="section-text">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。</p>

          <div class="info-links">
            <div class="info-links_top">
              <a class="info-links__item" href="<?php echo esc_url(home_url('/')); ?>details/">募集要項</a>
              <a class="info-links__item" href="<?php echo esc_url(home_url('/')); ?>faq/">よくある質問</a>
            </div>
            <div class="info-links__bottom">
              <a class="info-links__item" href="<?php echo esc_url(home_url('/')); ?>about-us/#company">会社概要</a>
            </div>
          </div>
        </div>
      </section>

      <!-- メインビジュアル -->
      <section class="visual">
        <div class="visual__image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cta/cta-visual.jpg" alt="オフィスビルの写真">
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

<!-- フッター -->
<?php get_footer(); ?>