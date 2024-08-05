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
<section class="newshome">
    <div class="home-title-wrapper">
    <?php if($technic['news-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['news-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['news-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['news-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper newshome__content container">
        <div class="swiper-wrapper newshome__content-wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'post',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        endif;
        wp_reset_postdata();
        ?> 
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>