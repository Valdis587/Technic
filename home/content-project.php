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

<section class="projecthome">
    <div class="home-title-wrapper">
    <?php if($technic['projact-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['projact-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['projact-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['projact-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="swiper projecthome__content container">
        <div class="swiper-wrapper projecthome__content-wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'proekty',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'proekty');
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
