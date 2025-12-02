<!-- フッター -->
<footer class="footer">
  <div class="footer__wrapper">
    <div class="footer-inner">
      <!-- ロゴ部分 -->
      <div class="footer__area">
        <div class="footer__head">
          <div class="footer__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/hisyo-logo.png" alt="飛翔税理士事務所"></a>

          </div>
          <!-- ナビゲーション -->
          <nav class="footer__nav">
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>about-us/">飛翔について</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>staff/">人を知る</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>career/">研修制度とキャリアパス</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>benefits/">福利厚生</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>blog/">採用ブログ</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>details/">募集要項</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>faq/">よくある質問</a></li>
              <li class="footer__nav-item"><a href="<?php echo esc_url(home_url('/')); ?>about-us/#company">会社概要</a></li>
            </ul>
          </nav>
        </div>
        <!-- コピーライト & SNS -->
        <small class="footer__copyright">
          &copy; 2024 飛翔税理士事務所 All Right Reserved.
        </small>
        <div class="footer__sns">
          <a href="#" class="footer__sns-link"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/facebook.svg" alt="Facebook"> </a>
          <a href="#" class="footer__sns-link"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/x.svg" alt="X"> </a>
          <a href="#" class="footer__sns-link"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon/youtube.svg" alt="youtube"> </a>
        </div>
        <div class="sp-logo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/hisyo-logo.png" alt="飛翔税理士事務所"></a></div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>