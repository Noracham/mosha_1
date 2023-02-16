<?php get_header(); ?>
<div class="hero"><img src="<?php echo esc_url(get_theme_file_uri('img/mainvisual.jpg')) ?>" alt="hero"></div>
<section class="about wrapper flex">
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
<section class="bicycle wrapper flex">
    <h1 class="sub-title">Bicycle</h1>
    <div class="bicycle-items">
        <?php
        $args = ['category_name' => 'bicycle'];
        $post_data = get_posts($args); ?>
        <?php foreach ($post_data as $post) : setup_postdata($post); ?>
            <div class="bicycle-item">
                <?php the_post_thumbnail() ?>
                <h3><?php the_title(); ?></h3>
                <p><?php if (mb_strlen($post->post_content, 'utf-8') > 30) {
                        $content = str_replace('¥n', '', mb_substr(strip_tags($post->post_content), 0, 30, 'utf-8'));
                        echo $content . '・・・';
                    } else {
                        echo str_replace('¥n', '', strip_tags($post->post_content));
                    }; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>