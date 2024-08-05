<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Technic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" sizes="120x120" href="<?php echo home_url(); ?>/favicon.svg" type="image/svg+xml" />
    <link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open();
global $technic;
?>
<div class="wrapper">
<?php if($technic['loader-off']) { ?>
    <div class="preloader ">
    <button class="th-btn style2 preloaderCls">Завершить загрузку</button>
    <div class="preloader-inner">
        <span class="loader"></span>
    </div>
</div>
<?php } ?>
<header class="header">
    <div class="header__top-line ">
        <div class="header__top-content container">
        <ul class="header__top-contact-list">
			<?php if($technic['email']) { ?>
            <li><i class="icon-envelope"></i><a href="mailto:<?php echo $technic['email']; ?>"><?php echo $technic['email']; ?></a></li>
			<?php } ?>
			<?php if($technic['phone']) { ?>
            <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $technic['phone']); ?>"><?php echo $technic['phone']; ?></a></li>
			<?php } ?>
        </ul>
        <ul class="header__top-icon-list social">
        <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </ul>
        <button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button>
    </div>
</div>
    <div class="header__center-line">
        <div class="header__center-content container">
        <div class="header__center-logo">
		<?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="header__center-slogan">
		<?php get_template_part( 'template-parts/content', 'title' ); ?>
        </div>
        <div class="header__center-info">
            <a id="coll-popup" class="header__center-button button-blue" href="javascript:void(0)">Заказать звонок</a>
        </div>
    
</div>
    </div>
    <div class="header__bottom-line">
        <div class="header__bottom-content container">
            <div class="header__bottom-menu-wrapper">
            <nav class="header__menu-nav"> 
                <button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
				<?php if( has_nav_menu('menu-primary') ) {
                        Technic_menu_primary();
                    }?>
            </nav>
        </div>
        </div>
    </div>
</header>
    <div class="content-wrapper">