<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;
?>
<div id="mini" class="popup">
    <div class="popup__body popup__show">   
        <div class="popup__content">
          <button aria-label="popup close" class="popup__close"><i class="icon-plus"></i></button>
              <div class="popup__wrapper">
                <div class="popup__img">
                <img src="<?php echo $technic['popup-img']['url']; ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <div class="popup__right">
                <h6 class="popup__title">Заказать звонок</h6>
                <?php if($technic['popup-short-form']) {  echo do_shortcode($technic['popup-short-form']); } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end end popup-->