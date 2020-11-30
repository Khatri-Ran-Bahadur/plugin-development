<?php
namespace Inc\Base;
/**
*@package RNPlugin
*/
class Deactivate{
	public static function deactivate(){
		flush_rewrite_rules();
	}
}



