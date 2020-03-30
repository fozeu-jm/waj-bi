<?php

function theme_resources() {

    wp_enqueue_style('main-css', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery1', get_theme_file_uri('js/vendor/jquery-1.12.4.min.js'), NULL, '.1.12.4', true);

    wp_enqueue_script('booti', get_theme_file_uri('js/vendor/bootstrap.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('owly', get_theme_file_uri('js/owl.carousel.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('appear', get_theme_file_uri('js/appear.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('bars', get_theme_file_uri('js/bars.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('way', get_theme_file_uri('js/waypoints.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('counterup', get_theme_file_uri('js/counterup.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('piechart', get_theme_file_uri('js/easypiechart.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('miit', get_theme_file_uri('js/mixitup.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('contact', get_theme_file_uri('js/contact-form.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('scroll', get_theme_file_uri('js/scrollUp.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('magnific', get_theme_file_uri('js/magnific-popup.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('wow', get_theme_file_uri('js/wow.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('migrate', get_theme_file_uri('js/jquery-migrate-3.0.1.min.js'), array('jquery1'), '1.0', true);

    wp_enqueue_script('modern', get_theme_file_uri('js/vendor/modernizr-2.8.3.min.js'), array('jquery1'), '1.0', false);




    wp_localize_script('active', 'themeData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'theme_resources');

add_filter('show_admin_bar', '__return_false');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'theme_features');

/*----------------------------------------------------------------------------------------------------------------****/

add_filter('login_headerurl','header_url');

function header_url () {
    return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts','login_css');

function login_css(){
    wp_enqueue_style('owltheme', get_theme_file_uri('css/login.css'));
}

function logintitle(){
    return 'Powered by eYoCreative';
}

add_filter('login_headertitle', 'logintitle');


