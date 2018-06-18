<?php
/**
 * Customizer settings: Footer > Widgets Column(s)
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'suki_section_footer_widgets_column';

for ( $i = 1; $i <= 6; $i++ ) {
	/**
	 * ====================================================
	 * Widgets Column %d
	 * ====================================================
	 */

	// Heading: Footer Widgets %d
	$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_footer_widgets_' . $i, array(
		'section'     => $section,
		'settings'    => array(),
		/* translators: %d: column number. */
		'label'       => sprintf( esc_html__( 'Footer Widgets Column %d', 'suki' ), $i ),
		/* translators: %d: column number. */
		'description' => '<a href="' . esc_url( add_query_arg( 'autofocus[section]', 'sidebar-widgets-footer-widgets-' . $i ) ) . '" class="suki-customize-goto-control button button-default">' . sprintf( esc_html__( 'Edit Widgets on Column %d', 'suki' ), $i ) . '</a>',
		'priority'    => 10 * $i,
	) ) );
}

/**
 * ====================================================
 * Suki Pro Teaser
 * ====================================================
 */

if ( suki_show_pro_teaser() ) {
	$wp_customize->add_control( new Suki_Customize_Control_Pro( $wp_customize, 'pro_teaser_footer_widgets_columns_width', array(
		'section'     => $section,
		'settings'    => array(),
		'label'       => esc_html_x( 'Columns Width (Responsive)', 'Suki Pro teaser', 'suki' ),
		'url'         => 'https://sukiwp.com/pro/modules/footer/',
		'priority'    => 90,
	) ) );
}