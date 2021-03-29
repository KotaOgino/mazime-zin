<?php
// アイキャッチ設定
add_theme_support('post-thumbnails');

// bundle.js読み込み
function read_bundle()
{
    // 閉じBODYタグ前に出力
    wp_enqueue_script('smart-script', get_template_directory_uri() . '/lib/js/bundle.js', '20210305', true);
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

// JQueryの削除
function delete_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}
  add_action('init', 'delete_jquery');
