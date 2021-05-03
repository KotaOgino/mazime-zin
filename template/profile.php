<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<div class="profile">
<div class="profile__box uk-card uk-card-default uk-card-body">
<div class="uk-flex uk-flex-wrap-around">
<div class="profile__box-img">
<?php echo get_avatar( get_the_author_id(), 150 ); ?>
</div>
<div class="profile__box-text">
<p class="profile__box-author">text：<span><?php the_author_nickname(); ?></span></p>
<hr class="uk-divider-icon">
<p><?php the_author_meta('user_description'); ?></p>
</div>
</div>
</div>
</div>