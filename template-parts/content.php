<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */

?>
<div id="post-<?php the_ID(); ?>" class="swiper-slide cart__news cart__border">
    <div class="cart__img-news">
	<?php
        $id = get_post_thumbnail_id();
        $main=wp_get_attachment_image_src( $id, 'blog' );
        ?>
         <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
    </div>
    <div class="cart__content-news">
        <div class="cart__content-info">
            <span class="cart__date"><i class="icon-calendar-alt"></i><?php the_date( 'Y-m-d'); ?></span>
            <span class="cart__autor"><i class="icon-user-alt"></i>Автор: <?php the_author(); ?></span>
        </div>
        <a href="<?php the_permalink(); ?>" class="cart__title"><?php the_title(''); ?></a>
        <p class="cart__desc"><?php do_excerpt(get_the_excerpt(), 10); ?></p>
        <div class="cart__news-button-wrap">
            <a class="cart__news-button button-yellow" href="<?php the_permalink(); ?>">Читать далее</a>
        </div>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->

