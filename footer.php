<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</body>
<footer class="uk-padding-small uk-section-muted footer">
<div class="uk-container">
<div class="uk-float-left">
<div class="uk-flex uk-flex-middle">
<div><a href='<?php echo $home; ?>'><img src='<?php echo $wp_url; ?>/assets/img/logo.svg' alt='logo' class="footer__logo"></a></div>
<div class="uk-margin-left footer__content">
<p>MAIL：majimezine@gmail.com</p>
<p>©︎MAJIME ZINE. All rights reserved. No reproduction or republication without written permission.</p>
</div>
</div>
<div>
</div>
</div>
<div class="uk-float-right">
<a href="https://www.instagram.com/majime_zine/?hl=ja" target="_blank" class="uk-icon-button  uk-margin-small-right" uk-icon="instagram"></a>
<a href="https://twitter.com/majimezine" target="_blank" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
<a href="https://www.facebook.com/zine.majime" target="_blank" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
</div>
<!-- <div clas="uk-float-right"></div> -->
</div>
</footer>
<div class="uk-padding-small uk-section-muted socket">
<div class="uk-container">
<div class="uk-column-1-2@s">
<p class="uk-text-small uk-margin-remove uk-text-left@s uk-text-center">
<a class="uk-text-small uk-link-text uk-display-inline-block uk-margin-small-right" href="<?php echo $home; ?>/privacypolicy/">プライバシーポリシー</a>
<!-- <a class="uk-text-small uk-link-text uk-display-inline-block" href="<?php echo $home; ?>/site-map/">サイトマップ</a> -->
</p>
<p class="uk-text-small uk-margin-remove uk-text-right@s uk-text-center"><a href="#" uk-totop uk-scroll></a></p>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>