<?php 
/**
*@package rnPlugin
**/
/*
Plugin Name: RN Plugin
Plugin URI: http://rnkhatri.com/plugin
Description:This is my first attempt on writing 
Version:1.0.0
Author:RN Khatri
Author URI:http://rnkhatri.com
License:GLVv2
Text Domain: rn-plugin
*/

/*
This program is free software;
*/

defined('ABSPATH') or die('Hey, what are you doing here. rn');

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
	require_once dirname(__FILE__).'/vendor/autoload.php';
}

/**
*the code that runs during plugin activation
*/
function activate_rn_plugin(){
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__,'activate_rn_plugin');


/**
*the code that runs during plugin deactivation
*/
function deactivate_rn_plugin(){
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__,'deactivate_rn_plugin');


/**
*initialize the all core class of the plugin
*/
if(class_exists("Inc\\Init")){
	Inc\Init::register_services();
}
