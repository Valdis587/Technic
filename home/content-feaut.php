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

<section class="feau">
    <div class="home-title-wrapper">
    <?php if($technic['feutered-title-home']) {  ?>
    <h4 class="home-title"><?php echo $technic['feutered-title-home']; ?></h4>
    <?php }  ?>
    <?php if($technic['feutered-desc-home']) {  ?>
    <p class="home-desc"><?php echo $technic['feutered-desc-home']; ?></p>
    <?php }  ?>
</div>
    <div class="feau__content container">
    <?php 
    $i=0; 
    if($technic['title_feutered']) {
		foreach ($technic['title_feutered'] as $tab => $key) { $i++ ?>
        <div class="feau__item cart__border-color">
            <div class="feau__img">
            <img src="<?php echo $technic['feutered-img'][$i-1]['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="feau__text">
                <p class="feau__title"><?php echo $technic['title_feutered'][$i-1]; ?></p>
                <p class="feau__desc"><?php echo $technic['textarea_feutered'][$i-1]; ?></p>
            </div>
        </div>
        <?php } } ?>
    </div>
</section>