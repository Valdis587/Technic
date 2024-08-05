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

<section class="faq">
    <div class="home-title-wrapper">
    <?php if($technic['faq-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['faq-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['cat-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['faq-desc-home']; ?></p>
    <?php }  ?>
    </div>
    <div class="faq__content container">
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'order' 	 => 'DESC',
    'post_type' 	 => 'faq',
    'paged'	         => $paged
);

$MY_QUERY = new WP_Query( $args );
if ( $MY_QUERY->have_posts() ) :
    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <div class="faq__item">
            <div class="faq__title"><?php the_title(''); ?></div>
           <div class="faq__otvet">
           <?php the_content(); ?>
          </div>
        </div>
<?php 
	endwhile;
endif;
?>
    </div>
</section>