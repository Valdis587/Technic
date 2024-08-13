<?php
/**
 * Technic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Technic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


require get_template_directory() . '/includes/functions/scripts.php';

require get_template_directory() . '/includes/functions/settings.php';

require get_template_directory() . '/includes/functions/menu-primary.php';

require get_template_directory() . '/includes/functions/menu-footer.php';

require get_template_directory() . '/includes/functions/breadcrumbs.php';

require get_template_directory() . '/includes/functions/paginations.php';

require get_template_directory() . '/includes/functions/sidebar.php';

require get_template_directory() . '/includes/functions/reviews.php';

require get_template_directory() . '/includes/functions/vakansii.php';

require get_template_directory() . '/includes/functions/project.php';

require get_template_directory() . '/includes/functions/service.php';

require get_template_directory() . '/includes/functions/catalog.php';

require get_template_directory() . '/includes/functions/image.php';

require get_template_directory() . '/includes/functions/faq.php';

require get_template_directory() . '/includes/functions/zak.php';

require get_template_directory() . '/includes/functions/hoock.php';

require get_template_directory() . '/includes/admin/redux.php';

require get_template_directory() . '/includes/admin/theme/config.php';

require get_template_directory() . '/includes/tgm/example.php';

require get_template_directory() . '/widget/category.php';

require get_template_directory() . '/widget/model.php';

require get_template_directory() . '/widget/news.php';

require get_template_directory() . '/widget/vakansii.php';

require get_template_directory() . '/widget/reviews.php';

require get_template_directory() . '/widget/catalog.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}