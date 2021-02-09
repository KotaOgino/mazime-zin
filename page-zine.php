<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>
<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead">ZINE<span>紙媒体</span></h1>
</div>
</div>

<section class="uk-section uk-padding-remove-top">
<div class="uk-container">
<p>これまでの紙媒体の記事の一部はnoteでお読みいただけます。</p>
<div class="zine">
<p class="zine__title">第1号　「歴史」</p>
<div class="uk-flex uk-flex-wrap uk-flex-center uk-flex-middle">
<img src='<?php echo $wp_url; ?>/assets/img/zine_01.png' alt='zine1号' width="500px">
<div class="zine__text">
<p>2019/12/27発行<br><br>多くの人が「歴史」と聞いて想像する人類が歩んできた時間の流れではなく、個人が積み重ねる「歴史」に注目した一冊。<br><br>CONTENTS:『年を経る美』、『歴史』(ともに寄稿文)</p>
</div>
</div>
</div>
<div class="zine">
<p class="zine__title">第2号　「マジメが手探り、マジメの手触り」</p>
<div class="uk-flex uk-flex-wrap uk-flex-center uk-flex-middle">
<div><img src='<?php echo $wp_url; ?>/assets/img/zine_02.png' alt='zine1号' width="500px"></div>
<div class="zine__text">
<p>2020/10/3発行<br><br>コロナ禍の中、20歳前後のメンバーがそれぞれマジメになってしまうほど考えている大切なモノ・コトについて改めて向き合った一冊。<br><br>CONTENTS:『年を経る美』(第2号ver.)、『プロ』、『わたしのたからもの』(feat. feel fine since 2000)、『服』、『夢』、『生活』、『ライバル』、『わたしのたからもの』(以上寄稿文)、『マジメディスカッション』(特別企画、第2号関係者で行なったディスカッションの文字起こし)</p>
</div>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>