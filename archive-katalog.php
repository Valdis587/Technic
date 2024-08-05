<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Technic
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>
<div class="archive container">
    <div class="archive__sidebar-left">
        <div class="archive__content">
            <div class="archive__cart-col cart">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            get_template_part( 'template-parts/content', 'catalog' );
           endwhile; else : ?>
                <p>Записей нет.</p>
            <?php endif; ?>
            </div>
            <?php wp_main_pagination() ?>
        </div> 
       <div class="sidebar">
	<?php dynamic_sidebar( 'sidebar-catalog' ); ?>
</div><!-- #secondary -->
    </div>
</div>

<?php
get_footer();