<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<section class="uk-section">
<div class="uk-contaienr profile">
<div class="profile__box uk-card uk-card-body uk-flex">
<div class="profile__box-img">
<img src="<?php echo get_avatar( get_the_author_id() ); ?>" alt="プロフィール画像">
</div>
<div class="profile__box-text">
<p>text</p>
<p></p>
</div>
</div>
</div>
</section>