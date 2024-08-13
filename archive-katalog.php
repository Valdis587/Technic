<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */

get_header();
get_template_part( 'template-parts/content', 'head' );

do_action( 'start_wrapper_arhive_sidebar_left' ); 

 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            get_template_part( 'template-parts/content', 'catalog' );
           endwhile; else : ?>
                <p>Записей нет.</p>
            <?php endif; 
            do_action( 'end_wrapper_arhive_sidebar_left' );
get_footer();