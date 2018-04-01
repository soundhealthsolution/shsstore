<?php
/**
 * Reports meta box header on dashboard page.
 *
 * @package Hummingbird
 *
 * @var string $title  Reports module title.
 */

?>
<h3><?php echo esc_html( $title ); ?></h3>
<?php if ( ! WP_Hummingbird_Utils::is_member() ) : ?>
	<div class="buttons">
		<a class="button button-content-cta" href="<?php echo WP_Hummingbird_Utils::get_link( 'plugin', 'hummingbird_dash_reports_upgrade_button' ); ?>" target="_blank">
			<?php esc_html_e( 'Upgrade to PRO', 'wphb' ); ?>
		</a>
	</div>
<?php endif; ?>