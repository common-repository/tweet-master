<?php
if(!class_exists('WP_List_Table')){
	require_once( get_home_path() . 'wp-admin/includes/class-wp-list-table.php' );
}
class tweet_master_admin_addons_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
	$plugin_master_name = constant('TWEET_MASTER_NAME');
	$path = WP_CONTENT_DIR . '/plugins/tweet-master-addons/';
	if ( is_plugin_active( 'tweet-master-addons/tweet-master-addons.php' ) && file_exists($path) ) {
		$tweet_master_addon = "yes";
		$tweet_master_addon_get = '<b>All add-ons Installed</b>';
	}
	else{
		$tweet_master_addon = "no";
		$tweet_master_addon_get = '<a class="button-primary" href="https://wordpress.techgasp.com/tweet-master/" target="_blank" title="Get all Add-ons" style="float:left;">Get all Add-ons pack for peanuts</a>';
	}
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th colspan="3"><?php echo $tweet_master_addon_get; ?></th>
		</tr>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'tweet_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'tweet_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Installed', 'tweet_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th><?php echo $tweet_master_addon_get; ?></th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Buttons Widget</h3><p>"Use it if you love your wordpress website" Fast Loading Widget to display Tweet, Follow, Hashtag and Mention Button. Beefed-up with Via Twitter User, Hashtag and Recommend. Option to display buttons bubble count and username are included for professional max "viral" effectiveness.</p><p>The free version of the plugin includes this widget unrestricted, if you need to display Twitter viral buttons and love your wordpress, use this widget. Works great when published under any of the below widgets. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-yes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Tweets Widget</h3><p>"Supreme" This Widget displays your Tweets by encapsulating and cleaning the twitter script even when twitter servers are responding slow. We achieved Incredible Fast Page Load Times and clean code for Perfect Google SEO, a must for professional wordpress websites. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Twitter Lists Widget</h3><p>Now you can show off your Twitter Lists without slowing down your website, once again we encapsulated and cleaned the twitter script for optimal wordpress page load times and great google seo.</p><p>Show as many lists as you want by publishing more Tweet Master Twitter Lists Widgets without being afraid of bringing down your website. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Video Content Widget</h3><p>The widget that brings the best of Video Content on Twitter.</p><p>Navigate to your wordpress widgets page and start using it. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Tweet Content Widget</h3><p>The widget that brings the best of Tweets Content on Twitter.</p><p>Navigate to your wordpress widgets page and start using it. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-widgets.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Tweet Master Search Content Widget</h3><p>The widget that brings the best of Twitter Content Searches.</p><p>Navigate to your wordpress widgets page and start using it. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-shortcodes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Individual Shortcode</h3><p>Tweet Master uses TechGasp Wordpress Framework. The <b>Individual Shortcode</b> allows you to have a different customized tweet buttons in each page or post. Easy to use it can be found in the plugin <b>Individual Shortcodes menu</b> or when you edit a page or a post under the wordpress text editor. Once you have created your shortcode, Just insert the shortcode <b>[tweet-master]</b> anywhere inside that text. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-shortcodes.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Universal Shortcode</h3><p>Tweet Master uses TechGasp Wordpress Framework. The <b>Universal Shortcode</b> allows you to have the same tweet buttons across different pages or posts. Easy to use it can be found right here under the <b>Universal Shortcodes menu</b>. Once you have created your shortcode, Just insert the shortcode <b>[tweet-master-un]</b> anywhere inside the text of your pages or posts. <a href="https://wordpress.techgasp.com/tweet-master/" target="_blank"><strong>Demo Link</strong></a>.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-updater.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Advanced Updater</h3><p>The Advanced Updater allows you to easily Update / Upgrade your Advanced Plugin. You can instantly update your plugin after we release a new version with more goodies without having to wait for the nightly native wordpress updater that runs every 24/48 hours. Get it fresh, get it fast.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-admin-addons-support.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="139px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Award Winning Professional Support</h3><p>Need professional help deploying this plugin? TechGasp provides award winning professional wordpress support for all advanced version costumers and wordpress professionals. Support Us and we will Support You.</p></td>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-check-'.$tweet_master_addon.'.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="200px" height="121px" style="padding:5px;"/></td>
		</tr>
	</tbody>
</table>
<?php
		}
}
