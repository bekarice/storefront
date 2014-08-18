<?php
/**
 * storefront engine room
 *
 * @package storefront
 */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/customizer/custom-header.php';

/**
 * Setup.
 * Enqueue styles, register widget regions, etc.
 */
require get_template_directory() . '/inc/functions/setup.php';

/**
 * Hooks.
 * Template tags hooked into actions.
 */
require get_template_directory() . '/inc/structure/hooks.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/structure/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/functions/extras.php';

/**
 * Customizer additions.
 */
if ( current_theme_supports( 'storefront-customizer-settings' ) ) {
	require get_template_directory() . '/inc/customizer/customizer.php';
}

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack/jetpack.php';

/**
 * Load welcome screen
 */
require get_template_directory() . '/inc/admin/welcome-screen.php';

/**
 * Load Jetpack WooCommerce file.
 */
if ( is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
	require get_template_directory() . '/inc/woocommerce/integrations.php';
}