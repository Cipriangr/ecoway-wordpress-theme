<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ecoway
 */

?>

<footer id="footer">
	<div class="footer-content">
		<div class="logo">
			<a href="/home"><img src="<?php the_field('footer_logo', 'option') ?>"></a>
			<img class="cards" src="<?php the_field('card', 'option') ?>">
		</div>
		<div class="footer-navigation">
			<h4>NAVIGATION</h4>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
		</div>
		<div class="footer-services">
			<h4>SERVICES</h4>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'secondary-menu',
						'menu' => 'Secondary Menu'
					)
				);
			?>

		</div>
		<div class="contact">
			<h4>CONTACT</h4>
			<a href="<?php the_field('location_adress', 'option') ?>"><?php the_field('location', 'option') ?></a>
			<a href="mailto: <?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
			<a class="phone" href="tel:<?php the_field('phone_number', 'option') ?>"><?php the_field('phone_number', 'option') ?></a>
			<div class="icons">
				<a class="facebook" target="_blank" href="<?php the_field('facebook_link', 'options')?>"><?php echo do_shortcode( '[icon name="facebook-footer"]' ); ?></a>
				<a class="instagram" target="_blank" href="<?php the_field('instagram_link', 'options')?>"><?php echo do_shortcode( '[icon name="instagram-footer"]' ); ?></a>
				<a class="twitter" target="_blank" href="<?php the_field('twitter_link', 'options')?>"><?php echo do_shortcode( '[icon name="twitter-footer"]' ); ?></a>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2021 ECOSYSTEM Service. All Rights Reserved.</p>
	</div>
</footer>
</div>
	
<?php wp_footer(); ?>

</body>
</html>
