<?php
/**
 * Customize API: betinhouston_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage betinhouston
 */

/**
 * Customize Notice Control class.
 *
 * @since betinhouston 1.0
 *
 * @see WP_Customize_Control
 */
class betinhouston_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since betinhouston 1.0
	 *
	 * @var string
	 */
	public $type = 'betinhouston-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since betinhouston 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'betinhouston' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/betinhouston/#dark-mode-support', 'betinhouston' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'betinhouston' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
