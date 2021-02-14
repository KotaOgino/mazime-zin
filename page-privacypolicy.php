<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead">PRIVACY POLICY<span>プライバシーポリシー</span></h1>
</div>
</div>

<section class="uk-section">
<div class="uk-container">
<?php the_content(); ?>
</div>
</section>


<?php get_footer(); ?>