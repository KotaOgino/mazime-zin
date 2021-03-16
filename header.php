<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title>MAJIME ZINE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#7e13ab">
<?php wp_head(); ?>
</head>

<header>
<div class="uk-panel uk-flex uk-flex-middle uk-flex-center uk-padding header uk-padding-remove-bottom uk-padding-remove-top">
<div>
<a class="header__logo" href="<?php echo $home; ?>"><img src='<?php echo $wp_url; ?>/assets/img/title.svg' alt='MAJIME ZINE' uk-svg></a>
</div>
<div class="toggle-icon" uk-toggle="target: #menu">
<span uk-icon="icon: menu; ratio: 6"></span>
</div>
</header>
<nav class="uk-navbar-container uk-padding-small pc-nav" uk-navbar uk-sticky="media: @768">
    <div class="uk-navbar-center">

        <ul class="uk-navbar-nav">
            <li class="uk-logo"><a href='<?php echo $home; ?>'><img src='<?php echo $wp_url; ?>/assets/img/logo.svg' alt='logo'></a></li>
            <li><a href="<?php echo $home; ?>/articles" class="ruby-under"><ruby>ARTICLES<rt>記事</rt></ruby></a></li>
            <li><a href="<?php echo $home; ?>/concept" class="ruby-under"><ruby>CONCEPT<rt>コンセプト</rt></ruby></a></li>
            <li>
                <a href="<?php echo $home; ?>/about" class="ruby-under"><ruby>ABOUT US<rt>私たちについて</rt></ruby></a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="nav-item"><a href="<?php echo $home; ?>/abou#intro">メンバー紹介</a></li>
                        <li class="nav-item"><a href="<?php echo $home; ?>/abou#recruit">メンバー募集</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="<?php echo $home; ?>/zine" class="ruby-under"><ruby>ZINE<rt>紙媒体</rt></ruby></a></li>
            <li><a href="<?php echo $home; ?>/contact" class="ruby-under"><ruby>CONTACT<rt>お問い合わせ</rt></ruby></a></li>
        </ul>

    </div>
</nav>
<!-- offcanvas -->
<div id="menu" uk-offcanvas="mode: slide" class="uk-offcanvas">
<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
<button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close></button>
<ul class="uk-nav uk-nav-default uk-margin-bottom">
<li class="uk-logo uk-margin-bottom"><a href='<?php echo $home; ?>'><img src='<?php echo $wp_url; ?>/assets/img/logo.svg' alt='logo'></a></li>
<li><a href="<?php echo $home; ?>/articles" class="ruby-under"><ruby>ARTICLES<rt>記事</rt></ruby></a></li>
<li><a href="<?php echo $home; ?>/concept" class="ruby-under"><ruby>CONCEPT<rt>コンセプト</rt></ruby></a></li>
<li>
<a href="<?php echo $home; ?>/about" class="ruby-under"><ruby>ABOUT US<rt>私たちについて</rt></ruby></a>
<ul class="uk-nav-sub">
<li><a href="<?php echo $home; ?>/abou#intro">メンバー紹介</a></li>
<li><a href="<?php echo $home; ?>/abou#recruit">メンバー募集</a></li>
</ul>
</li>
<li><a href="<?php echo $home; ?>/zine" class="ruby-under"><ruby>ZINE<rt>紙媒体</rt></ruby></a></li>
<li><a href="<?php echo $home; ?>/contact" class="ruby-under"><ruby>CONTACT<rt>お問い合わせ</rt></ruby></a></li>
</ul>
</div>
</div>
<body>
