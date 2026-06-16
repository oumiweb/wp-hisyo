<?php 
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  // アイキャッチ画像を有効化（全体または特定の投稿タイプ）
  add_theme_support('post-thumbnails', ['post', 'staff']); // 'post'はブログ投稿、'staff'はカスタム投稿タイプ
}
add_action('after_setup_theme', 'theme_setup');


function create_staff_post_type() {
  register_post_type('staff',
  // 投稿タイプのスラッグ
    [
      'label' => '社員について', 
      // 管理画面に表示される名前
      'public' => true,
      // サイト訪問者にも公開
      'has_archive' => true,
      // 一覧ページを有効にするarchive-staff.phpが使える
      'menu_position' => 5,
      'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
      'rewrite' => ['slug' => 'staff'], //パーマリングをstaffに設定
      'show_in_rest' => true, // ブロックエディター対応（必要なら）
    ]
  );
}
add_action('init', 'create_staff_post_type');

function staff_archive_query($query) {
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_post_type_archive('staff')) {
    $query->set('posts_per_page', -1);
    $query->set('orderby', 'menu_order');
    $query->set('order', 'ASC');
  }
}
add_action('pre_get_posts', 'staff_archive_query');

function change_menu_label(){
  global $menu;
  global $submenu;
  $name = 'BLOG';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function change_object_label(){
  global $wp_post_types;
  $name = 'BLOG';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'change_object_label' );
add_action( 'admin_menu', 'change_menu_label' );

function exclude_specific_breadcrumb_category($trail) {
  foreach ($trail->breadcrumbs as $key => $crumb) {
    if (isset($crumb->taxonomy) && $crumb->taxonomy === 'category' && $crumb->name === '社内イベント') {
      unset($trail->breadcrumbs[$key]);
    }
  }
  return $trail;
}
add_filter('bcn_after_fill', 'exclude_specific_breadcrumb_category');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 
function add_body_class_slug( $classes ) {
  if ( is_front_page() ) {
    $classes[] = 'top-page';
  } else {
    $classes[] = 'sub-page';
  }
  return $classes;
}
function theme_enqueue_scripts() {
  // jQuery（WordPress同梱のバージョンを使う）
  wp_enqueue_script('jquery');

  // Swiper
  wp_enqueue_script(
    'swiper',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    '11.0.0',
    true
  );

  // Slick（必要なら）
  wp_enqueue_script(
    'slick-carousel',
    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    array('jquery'),
    '1.8.1',
    true
  );

  // main.js（jQuery に依存させる）
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/js/main.js',
    array('jquery', 'swiper', 'slick-carousel'),
    '1.0.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_enqueue_styles() {
  add_action('wp_head', function () {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
  });

  // Google Fonts 本体
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Shippori+Mincho:wght@400;500;600;700;800&display=swap',
    [],
    null
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    [],
    '11.0.0'
  );
  

  // Slick CSS
  wp_enqueue_style(
    'slick-css',
    get_template_directory_uri() . '/css/slick.css',
    [],
    filemtime(get_theme_file_path('css/slick.css'))
  );

  wp_enqueue_style(
    'slick-theme-css',
    get_template_directory_uri() . '/css/slick-theme.css',
    ['slick-css'],
    filemtime(get_theme_file_path('css/slick-theme.css'))
  );

  // style.css（テーマ本体のCSS）
  // 変更後（cssフォルダ内のstyle.cssを読み込むように変更）
 wp_enqueue_style(
  'main-style',
  get_template_directory_uri() . '/css/style.css',
  [],
  filemtime(get_theme_file_path('css/style.css'))
);

}
// generatorを非表示にする
remove_action('wp_head', 'wp_generator');
// EditURIを非表示にする
remove_action('wp_head', 'rsd_link');
// wlwmanifestを非表示にする
remove_action('wp_head', 'wlwmanifest_link');
// 短縮URLを非表示にする
remove_action('wp_head', 'wp_shortlink_wp_head');
// 絵文字用JS・CSSを非表示にする
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
// 投稿の RSS フィードリンクを非表示にする
remove_action('wp_head', 'feed_links', 2);
// コメントフィードを非表示にする
remove_action('wp_head', 'feed_links_extra', 3);
// WordPressのバージョンが付与されたver=〜 を非表示にする
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
// dns-prefetchを非表示にする
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
  if ( 'dns-prefetch' === $relation_type ) {
    return array_diff( wp_dependencies_unique_hosts(), $hints );
  }
  return $hints;
}
// wp versionを非表示にする
remove_action('wp_head','rest_output_link_wp_head');
// oEmbedを非表示にする
remove_action('wp_head','wp_oembed_add_discovery_links');
//rel="next" rel="prev" を非表示にする
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
//Gutenberg用CSSを非表示にする
function dequeue_plugins_style() {
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
// これ書かないとCSSが反映されない
// imgタグの'sizes'属性を削除
add_filter('wp_calculate_image_sizes', '__return_false');
