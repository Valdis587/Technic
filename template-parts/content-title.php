<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;

if(is_front_page()) { 
    if($technic['header-titleh1']) { 
    ?>
      <h1 class="header__center-title"><?php echo $technic['header-titleh1']; ?></h1>
      <?php } 
               if($technic['header-title2']) {  ?>
               <p class="header__center-desc"><?php echo $technic['header-title2']; ?></p>
    <?php  } } else { 
         if($technic['header-titleh1']) { 
        ?>
        <p class="header__center-title"><?php echo $technic['header-titleh1']; ?></p>
                <?php } 
               if($technic['header-title2']) {  ?>
                <p class="header__center-desc"><?php echo $technic['header-title2']; ?></p>
    <?php } } ?>