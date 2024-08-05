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
<section class="servicehome">
    <div class="home-title-wrapper">
    <?php if($technic['serv-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['serv-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['serv-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['serv-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <?php if($technic['serv-select']==1) { ?>
    <div class="servicehome__content-grid container">
             <?php } 
             if($technic['serv-select']==2) { ?>
  <div class="swiper cataloghome__content container">
        <div class="swiper-wrapper cataloghome__content-wrapper">
             <?php }
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'uslugi',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                                get_template_part( 'template-parts/content', 'uslugi' );
			endwhile;
		endif;
		if($technic['serv-select']==1) { ?>
    </div>
    <?php } 
    if($technic['serv-select']==2) {
    ?>
       </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <?php } ?>
</section>