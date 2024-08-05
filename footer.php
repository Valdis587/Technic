<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technic
 */
global $technic;
get_template_part('home/content', 'logo');
?>
</div>
   <footer class="footer">
    <div class="footer__content container">
        <div class="footer__content-contact">
        <?php if($technic['foo-title1']) { ?>
            <h5 class="footer__title"><?php echo $technic['foo-title1']; ?></h5>
            <?php } ?>
            <ul class="footer__contact-list">
            <?php get_template_part( 'template-parts/content', 'contact' ); ?>
            </ul>
        </div>
        <div class="footer__content-menu">
        <?php if($technic['foo-title2']) { ?>
            <h5 class="footer__title"><?php echo $technic['foo-title2']; ?></h5>
            <?php } ?>
            <?php if( has_nav_menu('menu-page') ) {
                Technic_menu_page();
            }?>
        </div>
        <div class="footer__content-menu">
        <?php if($technic['foo-title3']) { ?>
            <h5 class="footer__title"><?php echo $technic['foo-title3']; ?></h5>
            <?php } ?>
            <?php if( has_nav_menu('menu-service') ) {
                Technic_menu_service();
            }?>
        </div>
        <div class="footer__content-desc">
            <p><?php if($technic['foo-text']) { echo $technic['foo-text']; }?></p>
        </div>
    </div>
    <div class="footer__copy">
    <?php if($technic['foo-copy']) { echo $technic['foo-copy']; }?>
    </div>
    <a class="footer__button-up" href="javascript:void(0);"><i class="icon-angle-down"></i></a> 
</footer>
</div><!--end wrap-->
<?php if($technic['google']) { echo $technic['google']; } 
if($technic['yandex']) { echo $technic['yandex']; } 
get_template_part( 'template-parts/content', 'popup' ); 
get_template_part( 'template-parts/content', 'popzak' );
?>
<?php wp_footer(); ?>

</body>
</html>
