(function($) {
  $(function() {

    // ▼ Swiper初期化（jQueryとは独立）
    new Swiper(".top-member__swiper", {
      loop: true,
      slidesPerView: "auto",
      slidesPerGroup: 1,
      speed: 800,
      navigation: {
        nextEl: ".top-member__arrow-btn .button-next",
        prevEl: ".top-member__arrow-btn .button-prev",
      },
    });

    // ▼ 追従ヘッダーの関数
    const showFixedHeader = () => {
      const $globalMenu = $('#js-global-menu');
      const fixedNav = $('.header--black');
      if ($globalMenu.attr('aria-hidden') === 'false') return;

      const scrollTop = $(window).scrollTop();
      const headerHeight = $('.fv').outerHeight();
      const isHeaderVisible = scrollTop < headerHeight;

      fixedNav.toggleClass('is_active', !isHeaderVisible)
               .attr('aria-hidden', isHeaderVisible);
    };

    showFixedHeader();
    $(window).on('scroll', showFixedHeader);

    // ▼ ハンバーガーメニュー
    let savedScrollY = 0;

    $('.js-hamburger').click(toggleHamburgerMenu);
    $('#js-global-menu a').click(toggleHamburgerMenu);

    function lockBodyScroll() {
      savedScrollY = $(window).scrollTop();
      $('body').addClass('is-drawerActive').css('top', `-${savedScrollY}px`);
    }

    function unlockBodyScroll() {
      $('body').removeClass('is-drawerActive').css('top', '');
      $(window).scrollTop(savedScrollY);
    }

    function toggleHamburgerMenu() {
      const isExpanded = $('.js-hamburger').attr('aria-expanded') === 'true';
      const $globalMenu = $('#js-global-menu');
      const $headerSp = $('.header--sp');
      const $headerBlack = $('.header--black');
      const $headerWhite = $('.header--white');

      if (!isExpanded) {
        lockBodyScroll();
        $('.js-hamburger').attr('aria-expanded', true);
        $globalMenu.addClass('is-visible').attr('aria-hidden', 'false');
        $headerBlack.removeClass('is_active').addClass('is-hidden');
        $headerSp.addClass('is-visible');
      } else {
        unlockBodyScroll();
        $('.js-hamburger').attr('aria-expanded', false);
        $globalMenu.removeClass('is-visible').attr('aria-hidden', 'true');
        $headerSp.removeClass('is-visible');
        $headerBlack.removeClass('is-hidden');

        if ($('body').hasClass('top-page')) {
          const isTop = $('.fv').length && savedScrollY < $('.fv').outerHeight();
          if (isTop) {
            $headerWhite.addClass('is-visible');
          } else {
            $headerBlack.addClass('is_active');
          }
        } else {
          $headerBlack.addClass('is_active');
        }
      }
    }

    // ▼ スムーススクロール
    const headerHeight = $('.header').outerHeight();

    $('a[href^="#"]').click(function () {
      const href = $(this).attr("href");
      const target = $(href === "#" || href === "" ? 'html' : href);
      if (target.length) {
        const position = target.offset().top - headerHeight;
        $("html, body").animate({ scrollTop: position }, 300, "swing");
        return false;
      }
    });

    // ハッシュ付きで読み込まれたときも
    const urlHash = location.hash;
    if (urlHash) {
      const target = $(urlHash);
      if (target.length) {
        const position = target.offset().top - headerHeight;
        $("html, body").animate({ scrollTop: position }, 300, "swing");
      }
    }

    // ▼ 目次ハイライト
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = Array.from(tocLinks).map(link => {
      const id = link.getAttribute('href').replace('#', '');
      return document.getElementById(id);
    });

    $(window).on('scroll', function () {
      const header = document.querySelector('.header--black');
      const headerHeight = header ? header.offsetHeight : 0;
      const scrollY = window.scrollY + headerHeight + 80;

      let currentIndex = -1;
      sections.forEach((section, index) => {
        if (section.offsetTop <= scrollY) {
          currentIndex = index;
        }
      });

      tocLinks.forEach((link, index) => {
        link.classList.toggle('is-active', index === currentIndex);
      });

      // ▼ スクロール時のアニメーション表示
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();

      $('.js-aboutText').each(function () {
        const offsetTop = $(this).offset().top;
        const inView = scrollTop > offsetTop - windowHeight + 100 && scrollTop < offsetTop + $(this).outerHeight();
        $(this).toggleClass('active', inView);
      });

      $('.title-box').each(function () {
        const offsetTop = $(this).offset().top;
        const inView = scrollTop > offsetTop - windowHeight + 100 && scrollTop < offsetTop + $(this).outerHeight();
        $(this).toggleClass('is-visible', inView);
      });
    });

    // ▼ フォームバリデーション
    const $submitBtn = $('#js-submit');
    const $entryForm = $('.wpcf7-form');

    $entryForm.on('change keyup', 'input, textarea, select', function () {
      const isValid =
        $('#name').val().trim() !== '' &&
        $('#name_kana').val().trim() !== '' &&
        $('input[name="email"]').val().trim() !== '' &&
        $('input[name="tel"]').val().trim() !== '' &&
        $('input[name="radio-xxx"]:checked').length > 0 &&
        $('textarea[name="textarea-xxx"]').val().trim() !== '' &&
        $('input[name="checkbox-xxx[]"]:checked').length > 0 &&
        $('#birth_year').val().trim() !== '' &&
        $('#month').val() !== '' &&
        $('#birth_day').val() !== '' &&
        $('#privacyCheck').is(':checked');

      $submitBtn.prop('disabled', !isValid);
    });

  });
})(jQuery);
