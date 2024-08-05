<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */
global $technic;

  if($technic['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $technic['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($technic['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $technic['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($technic['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $technic['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($technic['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $technic['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($technic['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $technic['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>

