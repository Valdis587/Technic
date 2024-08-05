<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

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
