<?php get_header(); ?>
<main class="wrapper single">
    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
    <a href="<?php echo esc_url(home_url()) ?>">トップに戻る</a>
</main>
<?php get_footer(); ?>