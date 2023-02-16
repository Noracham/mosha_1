<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header wrapper">
        <nav>
            <div class="logo"><a href="<?php echo esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')) ?>" alt="logo"></a></div>
            <div class="nav-link">
                <a href="<?php echo esc_url(home_url()) ?>#About">About</a>
                <a href="<?php echo esc_url(home_url()) ?>#Bicycle">Bicycle</a>
            </div>
        </nav>
    </header>