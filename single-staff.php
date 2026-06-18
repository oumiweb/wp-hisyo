<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <section class="staff-detail">
        <div class="section-inner">
          <div class="staff-detail__mv">
            <!-- 左側：テキスト -->
            <div class="staff-detail__message">
              <div class="staff-detail__lead">
                <span class="staff-detail__highlight"><?php the_field('staff_message_1'); ?></span>
                <span><?php the_field('staff_message_2'); ?></span>
              </div>
              <div class="staff-detail__info">
                <p class="staff-detail__position"><?php the_field('staff_position'); ?></p>
                <div class="staff-detail__wrapper">
                  <p class="staff-detail__name"><?php the_field('staff_name'); ?></p>
                  <p class="staff-detail__year"><?php the_field('staff_year'); ?></p>
                </div>
              </div>
              <p class="staff-detail__desc"><?php the_field('staff_prof'); ?></p>
            </div>

            <!-- 右側：画像 -->
            <div class="staff-detail__image">
              <?php
              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
              if ($image_url): ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_html(get_the_title()); ?>の写真">
              <?php endif; ?>

            </div>

          </div>
        </div>
      </section>

      <ol class="breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
      </ol>

      <article class="staff-article" data-staff-name="<?php the_field('staff_name'); ?>">
        <div class="staff-article__inner">
          <div class="staff-article__wrapper">
            <?php the_content(); ?>
          </div>
          </div>
      </article>

      <section class="other-members">
        <div class="section-inner">
          <h2 class="other-members__title">その他のメンバー</h2>

          <div class="staff-cards-wrapper">

            <?php
            $current_id = get_the_ID(); // 今見ているスタッフのIDを取得

            $args = [
              'post_type' => 'staff', // CPTのスラッグが「staff」の場合
              'posts_per_page' => 3,
              'post__not_in' => [$current_id], // 現在の投稿を除外
              'orderby' => 'rand', // ランダムに並び替え
            ];

            $staff_query = new WP_Query($args);

            if ($staff_query->have_posts()) :
              while ($staff_query->have_posts()) : $staff_query->the_post();

                // ACFのフィールド取得
                $staff_image = get_the_post_thumbnail_url(get_the_ID(), 'full'); // URL形式で登録している場合
                $staff_name = get_field('staff_name');
                $staff_position = get_field('staff_position');
                $staff_year = get_field('staff_year');
                $staff_msg1 = get_field('staff_message_1');
                $staff_msg2 = get_field('staff_message_2');
            ?>
                <a href="<?php the_permalink(); ?>" class="staff-card__link">
                  <div class="staff-cards">
                    <img src="<?php echo esc_url($staff_image); ?>" alt="" class="staff-card__image">
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
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>

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