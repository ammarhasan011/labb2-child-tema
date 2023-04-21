<?php
/*
Plugin Name: sportbutik plugin
Description: Adds a simple code
*/

// linking my style for my plugin
function myplugin_styles()
{
    wp_enqueue_style('myplugin-style', plugins_url('style.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'myplugin_styles');



// Register widgets for the footer
function customwidget()
{
    $widgets = array(
        array(
            "name" => "Footer Kort om oss",
            "id" => "footer_kort_om_oss",
            'before_widget' => '<div class="footer-widget-area">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ),
        array(
            "name" => "Kontakt",
            "id" => "footer_cont",
            'before_widget' => '<div class="footer-widget-area">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ),
        array(
            "name" => "Footer Social Media",
            "id" => "footer_social-media",
            'before_widget' => '<div class="footer-widget-area">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );

    foreach ($widgets as $widget) {
        register_sidebar($widget);
    }
}

add_action('widgets_init', 'customwidget');
