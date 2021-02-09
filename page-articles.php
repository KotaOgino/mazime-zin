<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead">ARTICLESS<span>記事</span></h1>
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
<?php get_template_part('template/loop'); ?>
</div>
</div>
</section>

<?php get_footer(); ?>