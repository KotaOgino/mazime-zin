<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead">ABOUT US<span>私たちについて</span></h1>
</div>
</div>

<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="<?php echo $wp_url; ?>/assets/img/mv_about.jpg" uk-img></div>

<section class="uk-section">
<div class="uk-container about">
<div class="about__jp uk-margin-large-bottom">
<p>MAZIME ZINE(マジメジン)は大学生が中心になって作っているZINE(個人や有志で作る印刷物)です。マジメになってしまうほど考えているモノ・コトがある「マジメ人」からの寄稿を中心に小雑誌を作っています。</p>
<br/>
<p>2019年7月４日、現編集長が創刊し、これまでに第１号『歴史』(2019/12/27)第2号『マジメが手探り、マジメの手触り』(2020/10/3)を製作しました。</p>
<br/>
<p>ＭAJIME ZINEの特徴は、寄稿者、編集部ともにメンバーが流動的なこと。それぞれ目的を持ちながらもコンセプトに共感した人びとがいろいろな縁で全国から集まり、オンラインでつながりながら一冊のZINEを作ります。</p>
<br/>
<p>このウェブマガジンは、アクティブに動き続けるMAJIME ZINEの活動拠点として、新たな出会いの場として、そして今を生きる「マジメ人」の記録として立ち上がりました。</p>
</div>
<div class="about__en">
<p>Let us be passionate and absorbed in something we love. ZINE will capture our sparkling moments!</p>
<br/>
<p>Majime zine is a Zine(magazines published privately) edited and published mainly by the university students. The contributors are “majime persons” who earnestly think about something they treasure.</p>
<br/>
<p>Our chief editor launched the project on July 4, 2019, we have produced the first issue :”History” on Dec. 27, 2019, and the second issue : ”Pursuit and Feel the Passion of Majime” on Oct.3, 2020.</p>
<br/>
<p>Majime zine is unique in the way that the members including the contributors and the editors are fluid. The members, though they have different purposes in life, have gathered from all over the country and created a zine through online gathering.</p>
<br/>
<p>This web magazine was launched as a base of our activities, as a place of encounter and most importantly as a record of “majime persons” who live their every lives earnestly.</p>
</div>
</div>
</section>

<section id="intro" class="uk-section">
<div class="uk-container">
<div class="uk-width-expand@m">
<h2 class="uk-heading-bullet">メンバー紹介</h2>
<div class="uk-grid-column-medium uk-grid-row-medium uk-child-width-1-3@m" uk-grid>

<div class="uk-text-center">
<img src='<?php echo $wp_url; ?>/assets/img/nakano.png' alt='ナカノ'>
<h3 class="uk-margin-remove-top uk-text-bold">ナカノ</h3>
<p class="uk-text-left">編集長<br>2000年生まれ、新潟県出身。Instagram : t_peace_1</p>
</div>

<div class="uk-text-center">
<img src='<?php echo $wp_url; ?>/assets/img/moeko.png' alt='モエコ'>
<h3 class="uk-margin-remove-top uk-text-bold">モエコ</h3>
<p class="uk-text-left">副編集長<br>2000年生まれ、福井県出身。instagram : moemomo13</p>
</div>

<div class="uk-text-center">
<img src='<?php echo $wp_url; ?>/assets/img/kaoru.png' alt='カオル'>
<h3 class="uk-margin-remove-top uk-text-bold">カオル</h3>
<p class="uk-text-left">2000年生まれ、新潟県出身。Instagram：@fukamidori__16</p>
</div>

<div class="uk-text-center">
<img src='<?php echo $wp_url; ?>/assets/img/honoka.png' alt='フク'>
<h3 class="uk-margin-remove-top uk-text-bold">フク</h3>
<p class="uk-text-left">1999年生まれ、福島県出身。Instagram：nimekobe</p>
</div>

<div class="uk-text-center">
<img src='<?php echo $wp_url; ?>/assets/img/okitsu.png' alt='オキツ'>
<h3 class="uk-margin-remove-top uk-text-bold">オキツ</h3>
<p class="uk-text-left">Web制作担当。東海地方出身。</p>
</div>

</div>
</div>
</div>
</section>

<!-- <section　id="recruit" class="uk-section">
<div class="uk-container">
<h2 class="uk-heading-bullet">メンバー募集</h2>

</div>
</section> -->

<?php get_footer(); ?>