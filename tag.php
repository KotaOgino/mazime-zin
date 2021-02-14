<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<?php single_tag_title(); ?>

<?php get_footer(); ?>