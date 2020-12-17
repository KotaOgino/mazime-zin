<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#7e13ab">
<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRB9V46');</script>
<!-- End Google Tag Manager -->
</head>
<header>
<div class="uk-panel uk-padding background-primary uk-flex uk-flex-center">
    <a class="uk-logo" href="<?php echo $home; ?>"><img src='<?php echo $wp_url; ?>/assets/img/logo.svg' alt='MAJIME ZINE' uk-svg></a>
</div>
</header>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav">
            <li><a href="#" class="ruby-under"><ruby>ARTICLES<rt>記事</rt></ruby></a></li>
            <li><a href="#" class="ruby-under"><ruby>CONCEPT<rt>コンセプト</rt></ruby></a></li>
            <li>
                <a href="#" class="ruby-under"><ruby>ABOUT US<rt>私たちについて</rt></ruby></a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="nav-item"><a href="#">スタッフ紹介</a></li>
                        <li class="nav-item"><a href="#">スタッフ募集</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#" class="ruby-under"><ruby>ZINE<rt>紙媒体</rt></ruby></a></li>
            <li><a href="#" class="ruby-under"><ruby>CONTACT<rt>お問い合わせ</rt></ruby></a></li>
        </ul>

    </div>
</nav>
<!-- offcanvas -->
<div id="menu" uk-offcanvas="mode: slide" class="uk-offcanvas">
<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
<button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close></button>
<ul class="uk-nav uk-nav-default uk-margin-bottom">
<li class="uk-heading-divider uk-text-bold uk-margin-small-bottom">ページ</li>
<li><a class="uk-link-text" href="<?php echo $home; ?>">トップ</a></li>
<?php
$pages = get_page_list();
foreach ($pages as $key => $page): ?>
<li><a class="uk-link-text" href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
<?php endforeach; wp_reset_query(); ?>
</ul>
<ul class="uk-nav uk-nav-default">
<li class="uk-heading-divider uk-text-bold uk-margin-small-bottom">カテゴリー</li>
<?php
$categories = get_category_list();
foreach ($categories as $category):
    $cat_link = get_category_link($category->term_id);
    $cat_name = $category->name;
?>
<li><a class="uk-link-text" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
</div>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRB9V46"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->