<?php
/**
 * Performance report dismissed meta box on dashboard page.
 *
 * @package Hummingbird
 *
 * @var bool   $notifications     Performance cron reports status.
 */

?>
<div class="content">
	<div class="wphb-notice wphb-notice-grey-info">
		<p><?php esc_html_e( 'You chose to ignore your last performance test. Run a new test to see new recommendations.', 'wphb' ); ?></p>
	</div>
</div>