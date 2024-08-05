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

<section class="homeonas">
    <div class="homeonas__content container">
        <div class="homeonas__item">
            <div class="home-title-wrapper">
            <?php if($technic['onas-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['onas-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['onas-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['onas-desc-home']; ?></p>
    <?php }  ?>
            </div>
            <div class="homeonas__text">
            <?php if($technic['onas-text-left']) { echo $technic['onas-text-left']; } ?>
            </div>
        </div>
        <div class="homeonas__item homeonas__photo">
            <div class="homeonas__img">
                <img src="<?php echo $technic['onas-img1']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="homeonas__img2">
            <img src="<?php echo $technic['onas-img2']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
    </div>
</section>