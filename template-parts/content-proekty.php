<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;
$value = redux_post_meta( 'technic', 'proekty' );
?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__project cart__border">
    <div class="cart__project-img">
    <?php
    $id = get_post_thumbnail_id();
    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
     <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__project-info">
        <p class="cart__project-name"><?php the_title(''); ?></p>
        <p class="cart__project-city"><?php echo $value['proekty-city']; ?></p>
        <p class="cart__project-price"><?php echo $value['proekty-price']; ?> руб.</p>
        <a class="button-yellow " href="<?php the_permalink(); ?>">Просмотреть</a>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
