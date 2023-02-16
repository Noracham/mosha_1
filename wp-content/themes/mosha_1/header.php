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
    <header class="header">
        <nav>
            <div class="logo"><a href="<?php esc_url(home_url()) ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')) ?>" alt="logo"></a></div>
            <div class="nav-link">
                <a href="#about">About</a>
                <a href="#Bicycle">Bicycle</a>
            </div>
        </nav>
    </header>