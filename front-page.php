<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<div class="relative">
<div class="uk-height-large uk-flex uk-flex-center uk-margin-top uk-flex-middle uk-background-cover uk-light rocket-lazyload" data-src="<?php echo $wp_url; ?>/assets/img/mv.jpg" uk-img></div>
<div class="message abs">
<div class="message__box">
<p>夢中でマジメになってしまう</p>
<p>その瞬間のきらめきを切り取るZINE</p>
</div>
</div>
</div>

<section class="uk-section uk-padding-remove-bottom">
<div class="uk-container">
<div class="uk-width-expand@m">
<h2 class="uk-text-lead"><span>NEWS</span></h2>
<div class="uk-panel">
<ul class="news">
<?php
$newsArgs = array(
'post_type' => 'news',  //カスタム投稿タイプ名
'posts_per_page' => 3, // 表示件数
);
?>
<?php $myposts = new WP_Query($newsArgs);
if ($myposts->have_posts()): while ($myposts->have_posts()): $myposts->the_post();
?>
<li class="uk-padding-small news__list">
<a href="<?php the_permalink(); ?>" class="uk-flex uk-flex-middle">
<div>
<p class="news__list-time"><?php the_modified_time('Y.m.d'); ?></p>
</div>
<div>
<p><?php the_title(); ?></p>
</div>
</a>
</li>
<?php endwhile; endif;?>
</ul>
</div>
</div>
</div>
</section>

<section class="uk-section uk-padding-remove-bottom">
<div class="uk-container">
<div class="uk-width-expand@m">
<h2 class="uk-text-lead"><span>LATEST ARTICLES</span></h2>
<?php get_template_part('template/loop', 'latest'); ?>
</div>
</div>
</section>

<section class="uk-section">
<div class="uk-container">
<div class="uk-width-expand@m">
<h2 class="uk-text-lead"><span>EDITOR'S PICK</span></h2>
<?php get_template_part('template/loop', 'editor'); ?>
</div>
</div>
</section>
<?php get_footer(); wp_reset_postdata();?>