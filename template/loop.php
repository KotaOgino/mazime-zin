<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$args = array(
	'posts_per_page' => 12,
	'paged' => $paged,
	'post_type' => array(
		'post',
	),
);
$the_query = new WP_Query($args);
?>
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@m" uk-grid uk-height-match="target: > a > article > .uk-card">
<?php
if( $the_query->have_posts() ):
while($the_query->have_posts()) : $the_query->the_post();
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
<time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('Y.m.d'); ?></time>
</div>
</div>
<h3 class="uk-card-title"><?php echo $title; ?></h3>
</div>
</article>
</a>
<?php endwhile; ?>
</div>
<div class="pagenavi">
<?php if(function_exists('wp_pagenavi')){
wp_pagenavi(array('query'=>$the_query));
}
?>
</div>
<?php wp_reset_postdata(); ?>
<?php else: ?>
<p class="uk-padding uk-text-lead">投稿がありません。</p>
<?php endif; ?>
