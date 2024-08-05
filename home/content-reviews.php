<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;
?>
<section class="reviewshome"> 
    <div class="home-title-wrapper">
    <?php if($technic['reviews-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['reviews-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['reviews-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['reviews-desc-home']; ?></p>
    <?php }  ?>
        </div>
    <div class="swiper reviewshome__content container">
            <div class="swiper-wrapper reviewshome__content-wrapper">
            <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'otzyvy',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'reviews' );
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
            </div>
        </div>
</section>