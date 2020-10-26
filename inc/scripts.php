<?php

function wp_scripts_ecofold()
{
    /** CSS * */
    wp_enqueue_style('poppins', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');


    /** JS * */
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.js', array(), '1.8.0', true);
    wp_enqueue_script('fa', '//kit.fontawesome.com/3c00539263.js', array(), '6.0.0', true);

    if (is_front_page()) {
        wp_enqueue_style('aos', '//unpkg.com/aos@next/dist/aos.css');

        wp_enqueue_style('slip', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css');
        // /** JS * */
        wp_enqueue_script('aos', '//unpkg.com/aos@next/dist/aos.js', array(), '0.9.4', true);
        wp_enqueue_script('slip', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', array(), '1.0.0', true);
        wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'wp_scripts_ecofold');
