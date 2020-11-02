<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<section class="uk-section">
<div class="uk-container">
<div class="uk-position-relative uk-visible-toggle uk-light uk-margin-large-bottom" tabindex="-1" uk-slideshow="autoplay: true; autoplay-interval: 5000; min-height: 250; max-height: 500"">

    <ul class="uk-slideshow-items">
        <li>
            <img src="<?php echo $wp_url; ?>/assets/img/book1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
        <li>
            <img src="<?php echo $wp_url; ?>/assets/img/book1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>
                <p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
        <li>
            <img src="<?php echo $wp_url; ?>/assets/img/book1.jpg" alt="" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center">
                <h2 uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">Heading</h2>
                <p uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">Lorem ipsum dolor sit amet.</p>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<div class="uk-grid-divider" uk-grid>
<div class="uk-width-expand@m">
<h2 class="uk-heading-line uk-text-lead primary"><span>最新記事</span></h2>
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-2@m" uk-grid>
<?php get_template_part('template/loop'); ?>
</div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer(); ?>