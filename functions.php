<?php
/**
 * テーマのセットアップ
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
**/
function my_script_init()
{
wp_enqueue_style('my-reset.css', get_template_directory_uri() . '/css/reset.css',);

wp_enqueue_style( 'my-slick1.css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('my-style.css'), '1.8.1' );
wp_enqueue_style( 'my-slick2.css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('my-style.css'), '1.8.1' );
wp_enqueue_style('my-style.css', get_template_directory_uri() . '/css/style.css',);

wp_enqueue_script('my-script.js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script( 'my-slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), '5.1.3', true );

}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
* ヘッダーフッターのメニュー化
**/
register_nav_menus(
  array(
      'global' => 'グローバル化',
      'footer' => 'フッターナビ',
  )
);

/**
* メイン画像上にテンプレートごとのタイトルを表示
**/
function get_main_title() {
  if( is_singular( 'post' )) :
      $category_obj = get_the_category();
      return $category_obj[0]->name;
  elseif( is_page() ):
      return get_the_title();
  endif;
}

// 各テンプレートごとのメイン画像を表示
function get_main_image() {
  if( is_page() ):
      return get_the_post_thumbnail( $post->ID, 'detail' );
  endif;
}

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
* トップページと記事一覧ページの投稿表示件数の指定
**/
function custom_pre_get_posts( $query ) {
  if ( is_admin() )
      return;

  if ( $query->is_home() && $query->is_main_query() ) {
       $query->set( 'posts_per_page', 3 );
       return;
  }

  if ( $query->is_category() && $query->is_main_query() ) {
       $query->set( 'posts_per_page', 10 );
       return;
  }
}
add_action('pre_get_posts', 'custom_pre_get_posts');


// 抜粋機能を固定ページに使えるように設定
add_post_type_support( 'page', 'excerpt' );

function get_flexible_excerpt( $number ) {
    $value = get_the_excerpt();
    $value = wp_trim_words( $value, $number, '...' );
    return $value;
}

// 子ページ一覧を取得する関数
function get_child_pages( $number = -1, $specified_id = null ) {
	if ( isset( $specified_id ) ):
        $parent_id = $specified_id;
    else :
        $parent_id = get_the_ID();
    endif;
	$args = array(
		'posts_per_page' => $number,
		'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
	);
	$child_pages = new WP_Query( $args );
	return $child_pages;
}

// get_the_excerptで取得する文字列に改行タグを入れる
function apply_excerpt_br( $value ) {
  return nl2br( $value );
}
add_filter( 'get_the_excerpt', 'apply_excerpt_br' );

// 導入事例のカスタム投稿
function cpt_register_works() {
  $labels = [
    "singular_name" => "works",
    "edit_item" => "works",
  ];
  $args = [
    "label" => "導入事例",
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "works", "with_front" => true ],
    "query_ver" => true,
    "menu_position" => 5,
    "supports" => [ "title", "editor", "thumbnail" ],
  ];
  register_post_type( "works", $args );
}
add_action( 'init', 'cpt_register_works' );

// 導入事例のカスタム投稿にカテゴリーを追加
function cpt_register_dep() {
  $labels = [
    "singular_name" => "dep",
  ];
  $args = [
    "label" => "カテゴリー",
    "labels" => $labels,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_in_menu" => true,
    "query_ver" => true,
    "rewrite" => [ "slug" => "dep", "with_front" => true, ],
    "show_admin_column" => true,
    "show_in_rest" => true,
    "rest_base" => "dep",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
  ];
  register_taxonomy( "dep", ["works"], $args );
}
add_action( 'init', 'cpt_register_dep' );