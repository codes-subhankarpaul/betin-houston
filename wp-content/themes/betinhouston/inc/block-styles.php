<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage betinhouston
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since betinhouston 1.0
	 *
	 * @return void
	 */
	function betinhouston_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'betinhouston-columns-overlap',
				'label' => esc_html__( 'Overlap', 'betinhouston' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'betinhouston-border',
				'label' => esc_html__( 'Borders', 'betinhouston' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'betinhouston-border',
				'label' => esc_html__( 'Borders', 'betinhouston' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'betinhouston-border',
				'label' => esc_html__( 'Borders', 'betinhouston' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'betinhouston-image-frame',
				'label' => esc_html__( 'Frame', 'betinhouston' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'betinhouston-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'betinhouston' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'betinhouston-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'betinhouston' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'betinhouston-border',
				'label' => esc_html__( 'Borders', 'betinhouston' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'betinhouston-separator-thick',
				'label' => esc_html__( 'Thick', 'betinhouston' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'betinhouston-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'betinhouston' ),
			)
		);
	}
	add_action( 'init', 'betinhouston_register_block_styles' );
}
