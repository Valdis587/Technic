<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;
$value = redux_post_meta( 'technic', 'uslugi' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__service cart__border-color">
    <div class="cart__service-img">
    <?php
            $id = get_post_thumbnail_id();
            $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
        <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div> 
    <div class="cart__service-info">
        <div class="cart__service-wrapper">
        <span><i class="icon-cogs"></i><a href="<?php the_permalink(); ?>" class="cart__service-name"><?php the_title(''); ?></a></span>
        <span><p class="cart__service-price"><?php echo $value['uslugi-price']; ?></p></span>
    </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->