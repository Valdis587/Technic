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

add_action( 'wp_ajax_zak_action', 'theme_popup_zak_callback' );
add_action( 'wp_ajax_nopriv_zak_action', 'theme_popup_zak_callback' );
function theme_popup_zak_callback() {
    if (!wp_verify_nonce($_POST['nonce'], 'zak_nonce')) {
        wp_die('Данные отправлены с левого адреса');
    }
   global $product;
    $product_id = (int) $_POST['id'];
 
    global $technic;
    wp( 'p=' . $product_id . '&post_type=katalog' );

    ob_start();
   
     while ( have_posts() ) : the_post(); 
$id = get_post_thumbnail_id();
    $main=wp_get_attachment_image_src( $id, 'blog' ); 
    ?>  
    <h6 class="popup-zak__title">Заказать <?php the_title(''); ?></h6>
                <div class="popup-zak__content-form">
                <div class="popup-zak__left">          
                <div class="popup-zak__img">
                <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </div>
            </div>
            <div class="popup-zak__right">
            <?php if($technic['popup-short-form']) {  echo do_shortcode($technic['popup-short-form']); } ?>
            </div>
    <?php
	endwhile;
 
    $data['product'] = ob_get_clean();
    wp_send_json($data);
    wp_die();
    // phpcs:enable WordPress.Security.NonceVerification.Recommended

}
