<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EcoFold
 */

get_header();
get_template_part('template-parts/home', 'intro');
get_template_part('template-parts/home', 'design');
get_template_part('template-parts/home', 'video');
get_template_part('template-parts/home', 'sales');
get_template_part('template-parts/home', 'eco');
get_template_part('template-parts/home', 'cost');
get_template_part('template-parts/home', 'exec');
get_template_part('template-parts/home', 'formats');
get_template_part('template-parts/home', 'brands');
get_template_part('template-parts/home', 'cases');
// get_template_part('template-parts/home', 'press');
get_template_part('template-parts/home', 'contact');
// get_sidebar();
get_footer();
