<?php

add_action('after_setup_theme', function () {
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style(['style.css', 'editor.css']);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'wpui-demo-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}, 20);

add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    add_filter('emoji_svg_url', '__return_false');
});

add_action('wp_footer', function () {
    wp_deregister_script('wp-embed');
}, 100);

add_action('wp_enqueue_scripts', function () {
    if (!is_user_logged_in()) {
        wp_dequeue_style('dashicons');
    }
}, 100);

add_filter('wp_img_tag_add_decoding_attr', function () {
    return 'async';
});

function wpui_enqueue_editor_chrome_css() {
    $file = get_stylesheet_directory() . '/editor-chrome.css';
    $ver  = file_exists($file) ? filemtime($file) : null;

    wp_enqueue_style(
        'wpui-editor-chrome',
        get_stylesheet_directory_uri() . '/editor-chrome.css',
        [],
        $ver
    );
}

add_action('enqueue_block_editor_assets', 'wpui_enqueue_editor_chrome_css');

add_action('admin_enqueue_scripts', function () {
    if (function_exists('get_current_screen')) {
        $screen = get_current_screen();
        if ($screen && $screen->id === 'site-editor') {
            wpui_enqueue_editor_chrome_css();
        }
    }
});
