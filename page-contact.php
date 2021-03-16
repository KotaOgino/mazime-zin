<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
?>

<div class="uk-container">
<div class="page-title uk-margin-top">
<h1 class="uk-text-lead">CONTACT<span>お問い合わせ</span></h1>
</div>
</div>

<section class="uk-section uk-padding-remove-bottom">
<div class="uk-container">
<h2 class="uk-heading-bullet">連絡先・各種SNS</h2>
<p>各種SNSでは記事の投稿やメンバー募集、編集部の活動紹介などMAJIME ZINEの最新情報をお伝えしています。<br>フォローやDMからのご感想もお待ちしております。</p>
<ul class="uk-list contactList">
<li><span>Instagram</span>majime_zine</li>
<li><span>Twitter</span>@MajimeZine</li>
<li><span>Facebook</span>マジメ ジン</li>
<li><span>公式LINE</span>@692ctvym</li>
<li><span>note</span>“majime” zine</li>
</ul>
</div>
</section>

<section class="uk-section">
<div class="uk-container">
<h2 class="uk-heading-bullet">お問い合わせフォーム</h2>
<?php echo do_shortcode('[contact-form-7 id="114" title="contact"]'); ?>
</div>
</section>

<?php get_footer(); ?>