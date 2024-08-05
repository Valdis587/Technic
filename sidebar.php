<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technic
 */

if ( ! is_active_sidebar( 'sidebar-news' ) ) {
	return;
}
?>

<div class="sidebar">
	<?php dynamic_sidebar( 'sidebar-news' ); ?>
</div><!-- #secondary -->
