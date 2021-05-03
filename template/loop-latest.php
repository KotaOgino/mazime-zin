<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$arg = [
    'posts_per_page' => 3, // 表示する件数
    'orderby' => 'date', // 日付でソート
    'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
];
$posts = get_posts( $arg );
?>
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@m" uk-grid uk-height-match="target: > a > article > .uk-card">
<?php
if( $posts ):
foreach($posts as $post):
$id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cat = get_the_category();
$cat_name = $cat[0]->name;
$img = '';
if (has_post_thumbnail()) {
$img = get_the_post_thumbnail_url($id, 'medium');
} else {
$img = $wp_url.'/assets/img/no-image.png';
}
$thumbnail = '<img class="uk-width-expand" src='.$img.' alt="'.$title.'">';
?>
<a class="uk-link-reset" href="<?php echo $permalink; ?>">
<article class="uk-animation-fade">
<div class="uk-card uk-card-default uk-card-hover">
<div class="uk-card-media-top">
<?php echo $thumbnail; ?>
</div>
<div class="uk-card-body">
<div class="uk-flex uk-flex-between uk-flex-middle">
<div>
<p class="uk-margin-remove"><span class="uk-label"><?php echo $cat_name ?></span></p>
</div>
<div>
<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
</div>
</div>
<h3 class="uk-card-title"><?php echo $title; ?></h3>
</div>
</div>
</article>
</a>
<?php endforeach; ?>
</div>
<div class="button">
<a href="<?php echo $home; ?>/articles" class="ruby-under button__more">
<div class="button__content">
<ruby>MORE<rt>もっと見る</rt></ruby>
</div>
</a>
</div>
<?php else: ?>
</div>
<p class="uk-padding">coming soon...</p>
<?php endif; ?>
