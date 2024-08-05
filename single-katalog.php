<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Technic
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
global $technic;
global $value;
$value = redux_post_meta( 'technic', 'katalog' );
?>
<div class="archive container">
    <div class="archive__sidebar-left">
            <div class="archive__cart-row single">
                <div class="single__top">     
<?php if(!$value['catalog-gallery-on']) { ?>
                <div class="single__img-thumb">
                <?php
                    $id = get_post_thumbnail_id();
                    $main=wp_get_attachment_image_src( $id, 'blog' ); ?>
               <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                    </div>
                    <?php } else { ?>
                    <div class="single__top-img">
                    <?php 
                      $myGalleryIDs = explode(',', $value['catalog-gallery']);
                      if($myGalleryIDs) {
                    ?>
                        <div class="swiper single__sleder-big">
                            <div class="swiper-wrapper single__sleder-big-wrapp">
                            <?php 
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                                <div class="swiper-slide single__item-slide-big">
                                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                                </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <div class="swiper single__sleder-small">
                            <div class="swiper-wrapper single__sleder-small-wrapp">
                            <?php 
                        foreach($myGalleryIDs as $myPhotoID) {
                            $main=wp_get_attachment_image_src( $myPhotoID, 'blog' );
                         ?>
                                <div class="swiper-slide single__item-slide-small">
                                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <div class="single__top-info">
                        <p class="single__project-name"><?php the_title(''); ?></p>
                        <?php
                        if($value['item-catalog']) {
							 $i =0;
							foreach ($value['catalog-left'] as $tab => $key) { $i++ ?>
                            <p class="single__catalog-gruz"><span><?php echo $value ['catalog-left'][$i-1]; ?></span> <?php echo $value ['catalog-right'][$i-1]; ?></p>
                            <?php } } ?>
                        <a data-product-id="<?php echo get_the_ID() ?>" class="single__catalog-button button-blue" href="javascript:void(0)">Сделать заказ</a> 
                    </div>
                </div>
                <div class="single__buttom-text">
                <?php the_content(); ?>
                </div>
                <?php if($value['catalog-table-on']) { ?>
                <div class="single__table">
                    <table class="site-table">
                        <thead>
                            <tr>
                                <th>Вид работ</th>
                                <th>Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  
							 $i =0;
							foreach ($value['catalog-tablefield1'] as $tab => $key) { $i++ ?>
                            <tr>
                                <td><?php echo $value ['catalog-tablefield1'][$i-1]; ?></td>
                                <td><?php echo $value ['catalog-tablefield2'][$i-1]; ?></td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div> 
       <div class="sidebar">
	<?php dynamic_sidebar( 'sidebar-catalog' ); ?>
</div><!-- #secondary -->
    </div>
</div>
<?php
get_footer();
