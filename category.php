<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$cat_title = single_cat_title('', false);
$cat_id_now = get_cat_ID($cat_title);
if($cat_title === 'EDITOR&#8217;S PICK'){
	$cat_id_now = 8;
}
?>

<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead"><?php single_cat_title(); ?></h1>
</div>
</div>

<section class="uk-section uk-padding-remove">
<div class="uk-container category">
<div class="uk-flex uk-flex-wrap">
<a href='<?php echo $home; ?>/articles'>
<span class="uk-label">ALL</span>
</a>
<?php
$cats = get_category_list();
if($cats):
foreach($cats as $cat):
    // var_dump($cat);
$cat_name = $cat->name;
$cat_slug = $cat->slug;
$cat_id = $cat->term_id;
$cat_link = get_category_link( $cat_id );
?>
<a href='<?php echo esc_url( $cat_link ); ?>'>
<span class="uk-label"><?php echo $cat_name; ?></span>
</a>
<?php
endforeach;
endif;
?>
</div>
</div>
</section>

<section class="uk-section">
<div class="uk-container">
<div class="uk-width-expand@m">
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@m" uk-grid uk-height-match="target: > a > article > .uk-card">
<?php
if($cat_id_now):
$args = [
	'post_per_page' => 12,
	'category' => $cat_id_now
];
$posts = get_posts( $args );
foreach($posts as $post):
?>
<?php
$id = get_the_ID();
$title = get_the_title();
$permalink = get_the_permalink();
$cate = get_the_category();
$cate_name = $cate[0]->name;
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
<p class="uk-margin-remove"><span class="uk-label"><?php echo $cate_name ?></span></p>
</div>
<div>
<time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('Y.m.d'); ?></time>
</div>
</div>
<h3 class="uk-card-title"><?php echo $title; ?></h3>
</div>
</div>
</article>
</a>

<?php endforeach; endif; ?>

</div>
</div>
</div>
</section>

<?php get_footer(); ?>