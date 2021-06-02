<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecoway
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header>
		<div class="top-bar-content">
			<div class="content">
				<div class="left-content">
					<span class="phone-number">
						<a href="tel:<?php the_field('phone_number', 'option')?>"><?php echo do_shortcode( '[icon name="phone"]' ); ?><?php the_field('phone_number', 'option') ?></a>
					</span>
					<span class="adress">
					<a target="_blank" href="<?php the_field('adress_link', 'option')?>"><?php echo do_shortcode( '[icon name="pin"]' ); ?><?php the_field('adress_text', 'option')?></a>
					</span>
					<span class="mail">
						<a href="mailto: <?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
					</span>
				</div>
				<div class="right-content">
					<a class="facebook" target="_blank" href="<?php the_field('facebook_link', 'options')?>"><?php echo do_shortcode( '[icon name="facebook"]' ); ?></a>
					<a class="instagram" target="_blank" href="<?php the_field('instagram_link', 'options')?>"><?php echo do_shortcode( '[icon name="instagram"]' ); ?></a>
					<a class="twitter" target="_blank" href="<?php the_field('twitter_link', 'options')?>"><?php echo do_shortcode( '[icon name="twitter"]' ); ?></a>
				</div>
			</div>
		</div>
		<div class="menu-content">
			<div class="logo">
				<a href="/home"><img src="<?php the_field('logo', 'option') ?>"></a>
			</div>
			<div class="hamburger-button">
				<button type="button" class="menu-icon" data-toggle="offCanvas"></button>
			</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
		</div>
		<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
			<button class="close-button" aria-label="Close menu" type="button" data-close><span aria-hidden="true">&times;</span></button>
			<?php wp_nav_menu(array(
						'menu' => 'Primary Menu',
						'container' => 'menu'
			)); ?>
		</div>
	</header><!-- #masthead -->
