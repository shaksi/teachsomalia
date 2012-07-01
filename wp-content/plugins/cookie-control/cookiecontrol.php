<?php
/*
Plugin Name: Cookie Control
Plugin URI: http://www.sherred.com/plugins/cookiecontrol/
Description: This plugin supplies a mechanism to enable you to comply with UK and EU law on cookies. Wordpress plugin by sherred, JavaScript by Civic UK
Version: 1.4
Author: @sherred and Civic UK
Author URI: http://civicuk.com/cookie-law/index
*/

//  defaults
$def_cookiecontrol_introText = 'This site uses cookies to store information on your computer. By using our site you accept the terms of our ';
$def_cookiecontrol_fullText = 'Some cookies on this site are essential, and the site will not work as expected without them. These cookies are set when you submit a form, login or interact with the site by doing something that goes beyond clicking on simple links. We also use some non-essential cookies to anonymously track visitors or enhance your experience of the site. If you\'re not happy with this, we won\'t set these cookies but some nice features of the site may be unavailable.';
$def_cookiecontrol_position = 'left';
$def_cookiecontrol_shape = 'triangle';
$def_cookiecontrol_theme = 'dark';
$def_cookiecontrol_startopen = TRUE;
$def_cookiecontrol_timeout = '60';
$def_cookiecontrol_subdomains = 'true';
$def_cookiecontrol_countries = '';
$def_cookiecontrol_privacypage = '';
$def_cookiecontrol_gakey = '';
$def_cookiecontrol_onready = '';
$def_cookiecontrol_onaccept = '';
$def_cookiecontrol_cookiesallowed = '';
$def_cookiecontrol_cookiesnotallowed = '';



//	define defaults
$cookiecontrol_defaults = apply_filters('cookiecontrol_defaults', array(
	'introText' => $def_cookiecontrol_introText,
	'fullText' => $def_cookiecontrol_fullText,
	'position' => $def_cookiecontrol_position,
	'shape' => $def_cookiecontrol_shape,
	'theme' => $def_cookiecontrol_theme,
	'startopen' => $def_cookiecontrol_startopen,
	'timeout' => $def_cookiecontrol_timeout,
	'subdomains' => $def_cookiecontrol_subdomains,
	'countries' => $def_cookiecontrol_countries,
	'privacypage' => $def_cookiecontrol_privacypage,
	'gakey' => $def_cookiecontrol_gakey,
	'onready' => $def_cookiecontrol_onready,
	'onaccept' => $def_cookiecontrol_onaccept,
	'cookiesallowed' => $def_cookiecontrol_cookiesallowed,
	'cookiesnotallowed' => $def_cookiecontrol_cookiesnotallowed,
));

//	pull the settings from the db
$cookiecontrol_settings = get_option('cookiecontrol_settings');

//	fallback
$cookiecontrol_settings = wp_parse_args($cookiecontrol_settings, $cookiecontrol_defaults);

//	registers settings in the db
add_action('admin_init', 'cookiecontrol_register_settings');
function cookiecontrol_register_settings() {
	register_setting('cookiecontrol_settings', 'cookiecontrol_settings', 'cookiecontrol_settings_validate');
}
//	this function adds the settings page to the Appearance tab
add_action('admin_menu', 'add_cookiecontrol_menu');
function add_cookiecontrol_menu() {
	add_menu_page('Cookie Control', 'Cookie Control', 'administrator', 'cookiecontrol', 'cookiecontrol_admin_page');
}

//Settings page
function cookiecontrol_admin_page() { 
?>
	<h2>Cookie Control Settings</h2>
<hr>
<div style="font-size:14px;margin-bottom:20px;">
<p><a target="blank" href="http://www.civicuk.com/cookie-law/index">Cookie Control from Civic UK</a> is a mechanism for obtaining a user's explicit consent for the use of cookies on their computer.</p> 

<p>Whilst Cookie Control supplies a mechanism to enable you to comply with UK and EU law on cookies, <strong>you need to determine</strong> which elements of your website are using cookies (this can be done via a <a href="http://civicuk.com/cookie-law/deployment#audit" title="Cookie audit">Cookie Audit</a>), and ensure they are connected to Cookie Control.</p> 

   <p>This plugin allows you to configure and add the Cookie Control mechanism to your Wordpress site, and will set up a Google Analytics script for you. For simple websites where Google Analytics and Wordpress are the only cookies and no comments are allowed on your website, this solution is likely to be all you need.</p>
    <p>If you allow comments on your website you should additionally consider adding a notice near your comments submission button, and if users log in to your website, you should review options for notices and/or acceptance at the point of log in (Wordpress uses cookies for logged in users). There are plugins available for both these issues or you can create scripts to use in conjunction with Cookie Control.</p>
    <p>For some plugins it might not be possible to control the cookies they set via the settings of this plugin. In those cases you'll probably have to use the functions documented <a href="http://civicuk.com/cookie-law/deployment#functions">here</a></p>
</div>
	<div class="wrap">
	<?php cookiecontrol_settings_update_check(); ?>
	<form method="post" action="options.php">
	<?php settings_fields('cookiecontrol_settings'); ?>
	<?php global $cookiecontrol_settings; $options = $cookiecontrol_settings; ?>
	<h3>Styling</h3>
	<table class="form-table">
		<tr><th scope="row"><label for="cookiecontrol_settings[shape]">Icon Shape</label></th>
		<td>The icon will be anchored to the corner of the viewport and won't scroll with your web page.<br />
			<input type="radio" name="cookiecontrol_settings[shape]" id="cookiecontrol_settings[shape]" value="triangle" <?php checked('triangle', $options['shape']); ?> /> Triangle
			<input type="radio" name="cookiecontrol_settings[shape]" id="cookiecontrol_settings[shape]" value="diamond" <?php checked('diamond', $options['shape']); ?> /> Diamond
		</td></tr>	
		<tr><th scope="row"><label for="cookiecontrol_settings[position]">Icon Position</label></th>
		<td>Choose whether you'd like your icon to appear on the bottom left or bottom right of the browser window.<br />
			<input type="radio" name="cookiecontrol_settings[position]" id="cookiecontrol_settings[position]" value="left" <?php checked('left', $options['position']); ?> /> Left
			<input type="radio" name="cookiecontrol_settings[position]" id="cookiecontrol_settings[position]" value="right" <?php checked('right', $options['position']); ?> /> Right
		</td></tr>	
		<tr><th scope="row"><label for="cookiecontrol_settings[theme]">Theme</label></th>
		<td>Choose whether you would prefer the Cookie Control widget to have a light or dark display.<br />
			<input type="radio" name="cookiecontrol_settings[theme]" id="cookiecontrol_settings[theme]" value="light" <?php checked('light', $options['theme']); ?> /> Light
			<input type="radio" name="cookiecontrol_settings[theme]" id="cookiecontrol_settings[theme]" value="dark" <?php checked('dark', $options['theme']); ?> /> Dark
		</td></tr>						
		   </table></br>
		   
		   
	<h3>Text Options</h3>
	<table class="form-table">	
		<tr valign="top"><th scope="row"><label for="cookiecontrol_settings[introText]">Introductory Text</label></th>
		<td>Some short, sharp copy to introduce the role of cookies on your site.<br />
		<textarea name="cookiecontrol_settings[introText]" id="cookiecontrol_settings[introText]" cols="50" rows="5"><?php echo $options['introText'] ?></textarea>
		</td>
		</tr>
		<tr valign="top"><th scope="row"><label for="cookiecontrol_settings[fullText]">Additional Text</label></th>
		<td>Describe in general terms what your cookies are used for.<br />
		<textarea name="cookiecontrol_settings[fullText]" id="cookiecontrol_settings[fullText]" cols="50" rows="5"><?php echo $options['fullText'] ?></textarea>
		</td>
		</tr>
		<tr><th scope="row"><label for="cookiecontrol_settings[privacypage]">Privacy Page</label></th>
		   <td>A privacy policy explaining how you manage personal data, and how cookies are used on your site is essential for legal compliance. Enter the URL to the site's privacy policy:<br />
			<input type="text" name="cookiecontrol_settings[privacypage]" id="cookiecontrol_settings[privacypage]" value="<?php echo $options['privacypage'] ?>" />
		</td></tr>
	</table></br>
	
	
	<h3>Functionality</h3>
	<table class="form-table">		
		<tr valign="top"><th scope="row">Open the cookie information on page load.</th>
		<td>Choose whether the Cookie Control user interface (UI) is open by default on page load. This makes it much more explicit that you're seeking user's consent for the use of cookies, and may be a safer option in terms of compliance, until Cookie Control icon is widely recognised.<br />
		<input name="cookiecontrol_settings[startopen]" type="checkbox" value="TRUE" <?php checked("TRUE", $options['startopen']); ?> /> <label for="cookiecontrol_settings[startopen]"></td>
		</tr>		
		<tr><th scope="row"><label for="cookiecontrol_settings[timeout]">Automatic Hide Timeout</label></th>
		<td>How long to keep the information pop-up displayed before it is automatically hidden. Once hidden the information can be accessed by clicking on the icon in the corner.<br />
			<input type="text" name="cookiecontrol_settings[timeout]" id="cookiecontrol_settings[timeout]" value="<?php echo $options['timeout'] ?>" size="4" />
		</td></tr>
		<tr><th scope="row"><label for="cookiecontrol_settings[subdomains]">Apply to sub-domains?</label></th>
		<td>If you have multiple sub-domains, you can choose whether Cookie Control opt-ins apply across all sub-domains or just a single domain, e.g. if your main site is at www.mysite.com and your blog is at blog.mysite.com, you'd probably want a single opt-in to apply across both sites (note that the Cookie Control mechanism would still need to be installed and configured on all of the sub-domains). If you select "No", users will have to give there consent once on each site.<br />
			<input type="radio" name="cookiecontrol_settings[subdomains]" id="cookiecontrol_settings[subdomains]" value="true" <?php checked('true', $options['subdomains']); ?> /> Yes
			<input type="radio" name="cookiecontrol_settings[subdomains]" id="cookiecontrol_settings[subdomains]" value="false" <?php checked('false', $options['subdomains']); ?> /> No
		</td></tr>
		
		<tr><th scope="row"><label for="cookiecontrol_settings[countries]">Country Restrictions</label></th>
		<td>Enter a comma separated list of countries for which you wish the pop-up to appear. If left blank Cookie Control will appear for all users from all countries. The full list of countries can be found <a target="blank" href="http://www.geoplugin.com/iso3166">here</a>.<br />
			<input type="text" name="cookiecontrol_settings[countries]" id="cookiecontrol_settings[countries]" value="<?php echo $options['countries'] ?>" />
		</td></tr>
		
		<input type="hidden" name="cookiecontrol_settings[update]" value="UPDATED" />
	
	</table></br>
	
	
	<h3>Google Analytics Cookies</h3>
	<p>To prevent Google Analytics cookies being set before your users accept the use of cookies by your site, you need to ensure that Google Analytics is only being activated by the Cookie Control mechanism. Hence, whichever method or methods of activating Google Analytics you were using before, you need to remove or deactivate. Then enter your Google Analytics key below, and this plugin will enter your key into a script for you. 

	   For the majority of sites, you will then wish to add the script name, which is <em>ccADDAnalytics()</em> to the <em>On Accept</em> and <em>Cookies Allowed</em> callback fields below.</p>
	<table class="form-table">
	   <tr><th scope="row"><label for="cookiecontrol_settings[gakey]">Google Analytics Key</label></th>
	      <td>Your Google Analytics key will be in the form <em>UA-XXXXXXX-X</em>.</br><input type="text" name="cookiecontrol_settings[gakey]" id="cookiecontrol_settings[gakey]" value="<?php echo $options['gakey'] ?>" />
		</td></tr>
	</table></br>
	   <h4>Examples of deactivating other Google Analytics scripts:</h4>
	<table class="form-table">
	   <tr><th scope="row"><label>WooThemes premium theme</label></th>
	      <td>Remove the Google Analytics script from the Theme Options <em>Tracking Code</em> field. </td>
	   </tr>
	   <tr><th scope="row"><label>Yoast's Google Analytics plugin</label></th>
	      <td>You can supply the plugin with your site's Google Analytics code and authenticate with Google, then find the field labelled <em>Where should the tracking code be placed</em> and select <em>insert manually</em> from the dropdown.</td>
	   </tr>
	   </table></br> 
	   
	
	<h3>Callbacks</h3>
	<p>Cookie Control has four handy callbacks that can be used to execute scripts. Only set these if you know JavaScript or your developer has told you what to enter. For further information on these options, please visit <a target="blank" href="http://civicuk.com/cookie-law/deployment#callbacks">Cookie Control Deployment</a></p>
	<table class="form-table">
		<tr valign="top"><th scope="row"><label for="cookiecontrol_settings[onaccept]">On Accept</label></th>
		   <td>This callback runs ONCE, the FIRST time a user consents to cookies. Enter <em>ccADDAnalytics()</em> in this field if you've added your Google Analytics code in the section above.<br />
			<input type="text" name="cookiecontrol_settings[onaccept]" id="cookiecontrol_settings[onaccept]" value="<?php echo $options['onaccept'] ?>" />
		</td></tr>
		
		<tr><th scope="row"><label for="cookiecontrol_settings[onready]">On Ready</label></th>
		<td>This callback runs immediately after CookieControl has initialised and displayed its widget, if applicable:<br />
			<input type="text" name="cookiecontrol_settings[onready]" id="cookiecontrol_settings[onready]" value="<?php echo $options['onready'] ?>" />
		</td></tr>
		
		<tr valign="top"><th scope="row"><label for="cookiecontrol_settings[cookiesallowed]">Cookies Allowed</label></th>
		<td>This callback runs after CookieControl has initialised, if cookies are allowed. Enter <em>ccADDAnalytics()</em> in this field if you've added your Google Analytics code in the section above.<br />
			<input type="text" name="cookiecontrol_settings[cookiesallowed]" id="cookiecontrol_settings[cookiesallowed]" value="<?php echo $options['cookiesallowed'] ?>" />
		</td></tr>
		
		<tr><th scope="row"><label for="cookiecontrol_settings[cookiesnotallowed]">Cookies Not Allowed</label></th>
		<td>This callback runs after CookieControl has initialised, if cookies are NOT (yet) allowed:<br />
			<input type="text" name="cookiecontrol_settings[cookiesnotallowed]" id="cookiecontrol_settings[cookiesnotallowed]" value="<?php echo $options['cookiesnotallowed'] ?>" />
		</td></tr>
	</table>
	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Settings') ?>" />
	</form>
	
	<!-- The Reset Option -->
	<form method="post" action="options.php">
	<?php settings_fields('cookiecontrol_settings'); ?>
	<?php global $cookiecontrol_defaults; // use the defaults ?>
	<?php foreach((array)$cookiecontrol_defaults as $key => $value) : ?>
	<input type="hidden" name="cookiecontrol_settings[<?php echo $key; ?>]" value="<?php echo $value; ?>" />
	<?php endforeach; ?>
	<input type="hidden" name="cookiecontrol_settings[update]" value="RESET" />
	<input type="submit" class="button" value="<?php _e('Reset Settings') ?>" />
	</form>
	<!-- End Reset Option -->
	</p>	

	</div>
<?php 
}

function cookiecontrol_settings_update_check() {
	global $cookiecontrol_settings;
	if(isset($cookiecontrol_settings['update'])) {
		echo '<div class="updated fade" id="message"><p>Cookie Control Settings <strong>'.$cookiecontrol_settings['update'].'</strong></p></div>';
		unset($cookiecontrol_settings['update']);
		update_option('cookiecontrol_settings', $cookiecontrol_settings);
	}
}

function cookiecontrol_settings_validate($input) {
	$input['text'] = sanitize_text_field(wp_filter_nohtml_kses($input['text']));
	$input['position'] = wp_filter_nohtml_kses($input['position']);
	$input['shape'] = wp_filter_nohtml_kses($input['shape']);
	$input['timeout'] = intval($input['timeout']);
	$input['countries'] = wp_filter_nohtml_kses($input['countries']);
	
	return $input;
}

add_action('wp_print_scripts', 'cookiecontrol_scripts');
function cookiecontrol_scripts() {
	if(!is_admin()) {
		wp_enqueue_script('cookiecontrol_geo', 'http://www.geoplugin.net/javascript.gp', '', '', true);
		wp_enqueue_script('cookiecontrol', WP_CONTENT_URL.'/plugins/cookie-control/js/cookieControl-4.1.min.js', array('jquery'), '', true);
	}
}

add_action('wp_footer', 'cookiecontrol_args', 1500);
function cookiecontrol_args() {
	global $cookiecontrol_settings; 
	$cookiecontrol_startopen = ($cookiecontrol_settings['startopen'] == "TRUE") ? 'true' : 'false';
  	$cookiecontrol_timeout = $cookiecontrol_settings['timeout'] * 1000; // Convert seconds to microseconds
  	$privacy = ($cookiecontrol_settings['privacypage'] != '')?sanitize_text_field($cookiecontrol_settings['privacypage']):'';
	?>

<script type="text/javascript">
jQuery(document).ready(function() {
	cookieControl({
      introText:"<p><?php echo sanitize_text_field($cookiecontrol_settings['introText']); ?> <a href='<?php echo $privacy; ?>'>Privacy Policy.</a></p>",
      fullText:"<p><?php echo sanitize_text_field($cookiecontrol_settings['fullText']); ?></p>",
      position:'<?php echo $cookiecontrol_settings['position']; ?>',
      shape:'<?php echo $cookiecontrol_settings['shape']; ?>',
      theme:'<?php echo $cookiecontrol_settings['theme']; ?>',
      startOpen:<?php echo $cookiecontrol_startopen; ?>,
      autoHide:<?php echo $cookiecontrol_timeout; ?>,
      subdomains:'<?php echo $cookiecontrol_settings['subdomains']; ?>',
      onAccept:function(){<?php echo $cookiecontrol_settings['onaccept']; ?>},
      onReady:function(){<?php echo $cookiecontrol_settings['onready']; ?>},
      onCookiesAllowed:function(){<?php echo $cookiecontrol_settings['cookiesallowed']; ?>},
      onCookiesNotAllowed:function(){<?php echo $cookiecontrol_settings['cookiesnotallowed']; ?>},
      countries:'<?php echo $cookiecontrol_settings['countries']; ?>'
      });
});

function ccAddAnalytics(){
   jQuery.getScript('http://www.google-analytics.com/ga.js', function() { 
      var GATracker = _gat._createTracker('<?php echo $cookiecontrol_settings['gakey']; ?>');
      GATracker._trackPageview(); 
   });
}; 
</script>
<?php }