<?php
/**
 * GNS Landing Theme Functions
 *
 * @package GNS_Advisory
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function gns_advisory_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gns-advisory'),
        'footer'  => __('Footer Menu', 'gns-advisory'),
    ));
}
add_action('after_setup_theme', 'gns_advisory_setup');

/**
 * Enqueue Scripts and Styles
 */
function gns_advisory_scripts() {
    // Theme main stylesheet
    wp_enqueue_style(
        'gns-landing-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Landing page styles
    wp_enqueue_style(
        'gns-landing-page-style',
        get_template_directory_uri() . '/assets/css/landing.css',
        array('gns-landing-style'),
        filemtime(get_template_directory() . '/assets/css/landing.css')
    );

    // Custom JavaScript
    wp_enqueue_script(
        'gns-landing-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'gns_advisory_scripts');

/**
 * Register Widget Areas
 */
function gns_advisory_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'gns-advisory'),
        'id'            => 'footer-widget-area',
        'description'   => __('Appears in the footer section', 'gns-advisory'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'gns_advisory_widgets_init');

/**
 * Custom Excerpt Length
 */
function gns_advisory_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'gns_advisory_excerpt_length');

/**
 * Remove unnecessary features for landing page optimization
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Disable Emojis (Performance Optimization)
 */
function gns_advisory_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'gns_advisory_disable_emojis');

/**
 * Add defer attribute to scripts (Performance Optimization)
 */
function gns_advisory_defer_scripts($tag, $handle, $src) {
    // Scripts that should be deferred
    $defer_scripts = array(
        'jquery-migrate',
        'gns-landing-script',
        'sib-front-js', // Brevo/Sendinblue
    );

    // Don't defer in admin
    if (is_admin()) {
        return $tag;
    }

    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }

    return $tag;
}
add_filter('script_loader_tag', 'gns_advisory_defer_scripts', 10, 3);

/**
 * Dequeue WordPress block library CSS if not using Gutenberg blocks
 */
function gns_advisory_dequeue_block_styles() {
    // Only on front page (landing)
    if (is_front_page()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-blocks-style'); // WooCommerce blocks
        wp_dequeue_style('global-styles'); // Global styles
    }
}
add_action('wp_enqueue_scripts', 'gns_advisory_dequeue_block_styles', 100);

/**
 * Remove jQuery migrate on frontend (optional - comment out if issues arise)
 */
function gns_advisory_remove_jquery_migrate($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
}
add_action('wp_default_scripts', 'gns_advisory_remove_jquery_migrate');

/**
 * Preload critical assets
 */
function gns_advisory_preload_assets() {
    // Preload main CSS
    $css_path = get_template_directory_uri() . '/assets/css/landing.css';
    echo '<link rel="preload" href="' . esc_url($css_path) . '" as="style">' . "\n";

    // Preload Google Fonts CSS
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;600;700&display=swap" as="style" crossorigin>' . "\n";
}
add_action('wp_head', 'gns_advisory_preload_assets', 1);

/**
 * Add resource hints for external resources
 */
function gns_advisory_resource_hints($urls, $relation_type) {
    if ('dns-prefetch' === $relation_type) {
        $urls[] = '//fonts.googleapis.com';
        $urls[] = '//fonts.gstatic.com';
    }

    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}
add_filter('wp_resource_hints', 'gns_advisory_resource_hints', 10, 2);
