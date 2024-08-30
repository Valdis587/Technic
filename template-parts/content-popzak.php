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
<div id="zak" class="popup-zak">
    <div class="popup-zak__body popup__show">   
        <div class="popup-zak__content">
          <button aria-label="popup close" class="popup-zak__close"><i class="icon-plus"></i></button>
          <div class="popup-zak__content-form"> 
          <div class="popup-zak__left"></div> 
          <div class="popup-zak__right">
          <?php if($technic['popup-short-form']) {  echo do_shortcode($technic['popup-short-form']); } ?>
            </div>
</div>
        </div>
</div>
    </div>
</div>
<!--end end popup-->