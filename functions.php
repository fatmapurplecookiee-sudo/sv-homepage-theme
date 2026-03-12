<?php
if (!defined('ABSPATH')) exit;

define('SV_VER', '1.0.0');
define('SV_DIR', get_template_directory());
define('SV_URI', get_template_directory_uri());

// theme setup
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'gallery'));
});

// remove hello elementor styles that conflict
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('hello-elementor');
    wp_dequeue_style('hello-elementor-theme-style');
    wp_dequeue_style('hello-elementor-header-footer');
    wp_dequeue_style('elementor-frontend');
}, 99);

// load our css and js
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('sv-main', SV_URI . '/assets/css/main.css', array(), SV_VER);
    wp_enqueue_script('sv-main', SV_URI . '/assets/js/main.js', array(), SV_VER, true);
});

// load content.json
function sv_data() {
    static $d = null;
    if ($d) return $d;
    $file = SV_DIR . '/data/content.json';
    if (!file_exists($file)) return $d = new stdClass();
    $d = json_decode(file_get_contents($file));
    return $d;
}

// get section - db first, then json
function sv_section($key) {
    $saved = get_option('sv_' . $key, '');
    if ($saved) return json_decode($saved, true) ?: array();
    $d = sv_data();
    return isset($d->$key) ? json_decode(json_encode($d->$key), true) : array();
}

// check if section visible
function sv_show($key) {
    return get_option('sv_show_' . $key, '1') === '1';
}

// render checkmark/cross for comparison table
function sv_check($val) {
    if ($val === true)  return '<span class="check-yes">&#10003;</span>';
    if ($val === false) return '<span class="check-no">&#10007;</span>';
    return '<span class="check-text">' . esc_html($val) . '</span>';
}

// admin settings page
require_once SV_DIR . '/inc/options.php';
