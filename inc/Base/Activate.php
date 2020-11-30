<?php 
namespace Inc\Base;
/**
*@package RNPlugin
*/

class Activate
{
	public static function activate(){
		flush_rewrite_rules();
	}
}



