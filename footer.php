<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
</body>
<footer class="uk-padding-small uk-section-muted footer">
<div class="uk-container">
<a class="uk-float-left" href="<?php echo $home; ?>">
<div class="uk-flex uk-flex-middle">
<div><a href='<? echo $home; ?>'><img src='<?php echo $wp_url; ?>/assets/img/logo.svg' alt='logo' class="footer__logo"></a></div>
<div class="uk-margin-left footer__content">
<p>MAIL：majimezine@gmail.com</p>
<p>©︎MAJIME ZINE. All rights reserved. No reproduction or republication without written permission.</p>
</div>
</div>
</a>
<!-- <div clas="uk-float-right"></div> -->
</div>
</footer>
<div class="uk-padding-small uk-section-muted socket">
<div class="uk-container">
<div class="uk-column-1-2@s">
<p class="uk-text-small uk-margin-remove uk-text-left@s uk-text-center">
<a class="uk-text-small uk-link-text uk-display-inline-block uk-margin-small-right" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
<a class="uk-text-small uk-link-text uk-display-inline-block" href="<?php echo $home; ?>/site-map/">サイトマップ</a>
</p>
<p class="uk-text-small uk-margin-remove uk-text-right@s uk-text-center"><a href="#" uk-totop uk-scroll></a></p>
</div>
</div>
</div>
<script src="<?php echo $wp_url; ?>/lib/js/bundle.js" defer></script>
<?php wp_footer(); ?>
</body>
</html>