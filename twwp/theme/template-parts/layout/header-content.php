<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package twwp
 */

?>

<header id="masthead">

	<div>
		<?php
		if ( is_front_page() ) :
			?>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php
		else :
			?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$twwp_description = get_bloginfo( 'description', 'display' );
		if ( $twwp_description || is_customize_preview() ) :
			?>
			<p><?php echo $twwp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div>

	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'twwp' ); ?>">
		<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'twwp' ); ?></button>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->
