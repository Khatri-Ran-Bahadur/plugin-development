<?php
/**
*Trigger this file on Plugin uninstall
*
*@package RNPlugin
*/

if(!defined('WP_UNINSTALL_PLUGIN')){
	die;
}

//Clear Datatbase store data
// $books=get_posts(array('post_type'=>'books'));

// foreach($books as $book){
// 	wp_delete_posts($book->ID,true)
// }

//Access the database via SQL
 global $wpdb;
 $wpdb->query("DELETE FROM wp_posts post_type='book'");
 $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN(SELECT id from wp_posts)");
