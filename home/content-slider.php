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

<section class="homeslider">
    <div class="swiper homeslider__content">
        <div class="swiper-wrapper homeslider__content-wrapp">
        <?php foreach( $technic['slider-home-slides'] as $slide )  { ?>
            <div class="swiper-slide homeslider__content-item">
                <div class="homeslider__content-img">
                <img src="<?php echo $slide['image']; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="homeslider__content-text-wrapp">
                <div class="homeslider__content-text">
                    <h2 class="homeslider__content-title"><?php echo $slide['title']; ?></h2>
                    <h3 class="homeslider__content-desc"><?php echo $slide['description']; ?></h3>
                </div>
            </div>
            </div>
            <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>