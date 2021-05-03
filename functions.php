<?php
// アイキャッチ設定
add_theme_support('post-thumbnails');

// bundle.js読み込み
function read_bundle()
{
    // 閉じBODYタグ前に出力
    wp_enqueue_script('smart-script', get_template_directory_uri() . '/lib/js/bundle.js', '', true);
}
add_action('wp_print_scripts', 'read_bundle');

// 固定ページ一覧
function get_page_list()
{
    $args = array('order'=>'desc','post_type'=>'page');
    $page_list = get_posts($args);
    return $page_list;
}

// カテゴリー一覧
function get_category_list()
{
    $args = array('orderby' => 'id','order' => 'desc','hide_empty' => 0);
    $categories = get_categories($args);
    return $categories;
}

// アーカイブページURL
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog-list';
    }
    return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// JS・CSSファイルを読み込む
function add_files() {
	// WordPress提供のjquery.jsを読み込まない
	if (!is_admin()) {
        wp_deregister_script('jquery');
    }
 
	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false );
 
	// サイト共通JS
	wp_enqueue_script( 'smart-script', get_template_directory_uri() . '/lib/bundle.js', '', true );
 
	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'main', get_template_directory_uri() . '/lib/style.css', "", '' );
}
add_action('wp_enqueue_scripts', 'add_files');
