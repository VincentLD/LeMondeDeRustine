<?php

add_action('wp_enqueue_scripts', 'import_css');

function import_css() {
  wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/style.css');
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Sacramento&display=swap');
}

add_action('wp_enqueue_scripts', 'import_js');

function import_js() {
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', null, null, true);
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/0045004211.js');
}