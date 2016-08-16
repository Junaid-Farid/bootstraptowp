<?php

if (!isset($content_width)) {
    $content_width = 660;
}

function trwp_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    // Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'trwp'),
        'footer' => __('Footer Menu', 'trwp'),
    ));
}

add_action('after_setup_theme', 'trwp_setup');

function trwp_scripts() {
    /* add styles */
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fontawsome/css/font-awesome.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    /* add scripts */
    // the second paramenter is for the dependency means load the jquery before loading the bootstrap 
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);

    //comments reply
    if (is_singular())
        wp_enqueue_script('comment-reply');
}

add_action('wp_enqueue_scripts', 'trwp_scripts');

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'wpdocs_excerpt_more');

/*
 * Register our sidebar and widgetized areas
 */

function arphabet_widgets_init() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar_blog',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');

//our custom method to display the feature text according to the page on header
function page_feature_text() {
    if (is_front_page()) {
        the_field('feature_text');
    } elseif (is_home() || is_single()) {
        _e('Tranquil Spa Official <br> Blog');
    } elseif (is_archive()) {
        _e('Tranquil Spa Official <br> Blog');
        _e('<br/>');

        single_term_title('Browsing: ');

        if (is_month()) {
            $monthNum = get_query_var('monthnum');
            $month = date("F", mktime(0, 0, 0, $monthNum)); //current month

            $year = get_query_var('year');

            //showing the output on the header screen
            echo 'Post from ' . $month . ' ' . $year;
        }
    } elseif (is_page_template('page-news.php') || is_page_template('page-about.php') || is_page_template('page-contact.php')
    ) {
        bloginfo('name');
        _e(' '); //for space 
        _e(the_title());
    } elseif (is_404()) {
        _e('Woops, were a little lost!');
    }elseif(is_search()){
        _e('Tranquil Spa Official Blog');
        _e('<br/>');
        printf(('Search result for: %s'), get_search_query()); //is_search() checks that page is search.php page or not
    }
}
$args = array(
	//'width'         => 980,
	//'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/header.png',
        'uploads'       => true,
);
add_theme_support( 'custom-header', $args );