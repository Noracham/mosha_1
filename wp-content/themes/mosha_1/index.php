<?php get_header(); ?>
<div class="hero"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')) ?>" alt="hero"></div>
<section class="about wrapper">
    <h1 class="sub-title">About</h1>
    <div class="profile">
        <div class="profile-img"><img src="<?php echo esc_url(get_theme_file_uri('img/about.jpg')) ?>" alt="me"></div>
        <div class="profile-txt">
            <h2>KAKERU MIYAICHI</h2>
            <p>テキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
    </div>
</section>
<?php get_footer(); ?>