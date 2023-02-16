<?php
function load_my_style()
{
    wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array('style'));
};
add_action('wp_enqueue_scripts', 'load_my_style');
