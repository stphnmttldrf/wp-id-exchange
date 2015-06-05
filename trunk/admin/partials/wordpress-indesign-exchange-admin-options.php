<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://barooney.de/meine-projekte/wordpress-indesign-exchange/
 * @since      1.0.0
 *
 * @package    Wordpress_Indesign_Exchange
 * @subpackage Wordpress_Indesign_Exchange/admin/partials
 */

$dropbox = new Wordpress_Indesign_Exchange_Dropbox();
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="wordpress-indesign-exchange-options" class="wrap">
	<h2>WordPress InDesign Exchange Options</h2>

	<h3>Dropbox Connect</h3>

	<?php if ( $dropbox->is_authorized() ) : ?>

		<p>You are already authenticated! Have fun now!</p>

		<p><strong>User ID: </strong> <?php echo $dropbox->get_user_id(); ?></p>

	<?php else : ?>

		<p>Click here to enable Dropbox export for WPIDEX.<br>This allows you to export all your layout-relevant files to your Dropbox, which then syncs to all your Clients.</p>

		<p><a class="button button-primary" href="<?php echo $dropbox->get_authorization_url(); ?>">Dropbox Login</a></p>
	<?php endif; ?>

	
</div>