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
    <div class="archive__sidebar-right">
	<div class="archive__content">
	<div class="archive__cart-col cart">
    <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'order' 	 => 'DESC',
                                'post_type' 	 => 'proekty',
                                'paged'	         => $paged
                            );

                            $MY_QUERY = new WP_Query( $args );
                            if ( $MY_QUERY->have_posts() ) :
                                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                                get_template_part( 'template-parts/content', 'proekty' );
			endwhile;
		endif;
		?>
	</div>
		<?php wp_main_pagination() ?>
		</div>
		<?php get_sidebar(); ?>
    </div>
</div>
<?php
get_footer();