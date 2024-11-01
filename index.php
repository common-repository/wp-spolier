<?php /*
Plugin Name: Spoiler ( DISCONTINUED )
Plugin URI: http://spoiler.dcoda.co.uk/
Description: REBOOTED as [Redactor](http://wordpress.org/extend/plugins/redactor/)
Author: dcoda
Author URI: 
Version: DISCONTINUED
License: GPLv2 or later
*/
@require_once  dirname ( __FILE__ ) . '/library/wordpress/application.php';
if (class_exists("wv43v_application"))
{
	new wv43v_application ( __FILE__);
}