<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;

 if($technic['phone']) { ?>
    <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $technic['phone']); ?>"><?php echo $technic['phone']; ?></a></li>
    <?php } ?>
    <?php if($technic['email']) { ?>
    <li><i class="icon-envelope"></i><a href="mailto:<?php echo $technic['email']; ?>"><?php echo $technic['email']; ?></a></li>
    <?php } ?>
    <?php if($technic['adres']) { ?>
    <li><i class="icon-map-marker-alt"></i><?php echo $technic['adres']; ?></li>
    <?php } ?>
    <?php if($technic['time-york']) { ?>
    <li><i class="icon-clock"></i> <?php echo $technic['time-york']; ?></li>
    <?php } ?>