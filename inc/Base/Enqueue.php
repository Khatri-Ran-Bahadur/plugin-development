<?php
namespace Inc\Base;

/**
*@package RNPlugin
*/
use \Inc\Base\BaseController;

class Enqueue extends BaseController{
	public function register(){
		add_action('wp_enqueue_scripts',array($this,'enqueue'));
	}

	function enqueue(){
		 //enqueue all our scripts
		wp_enqueue_style('mypluginstyle',$this->plugin_url.'/assets/mystyle.css');
		wp_enqueue_scripts ('mypluginscripts',$this->plugin_url.'/assets/myscripts.js');
	} 
}