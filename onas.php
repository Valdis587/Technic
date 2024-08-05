<?php
/*
Template Name: О нас
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $technic;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
          <div class="page__text">
          <?php if($technic['onas-desc']) { ?>
            <p><?php echo $technic['onas-desc']; ?></p>
            <?php } ?>
        </div>
        </div>
        <div class="page__item">
            <div class="page__img">
            <img src="<?php echo $technic['onas-img']['url']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
