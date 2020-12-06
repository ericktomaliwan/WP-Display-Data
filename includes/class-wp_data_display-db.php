<?php
/**
Filename: 
Purpose: 
Last update: 
Since Version:  
Last updated by: 
**/


class Class_Wp_Data_Display_Db {


	public function elatf_game_db_create_table() {

		//init install plugin
        $this->create_db();

    }

    public function create_db() {
        global $wpdb , $db_wpdispdata_wplist ;

        $charset_collate = $this->db_create_core();

		$sql[] = "
			CREATE TABLE IF NOT EXISTS `$db_wpdispdata_wplist` (
				`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`first_name` varchar(150) NOT NULL,
				`last_name` varchar(200) NOT NULL,
				`email` text NOT NULL,				
				`type` text NOT NULL,
				`date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				PRIMARY KEY (`id`),
				KEY `id` (`id`)
			) $charset_collate AUTO_INCREMENT=1
		";

		dbDelta($sql);

    }

    public function db_create_core() {
		global $wpdb;
		
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		if(!empty($wpdb->charset))
			return "DEFAULT CHARACTER SET $wpdb->charset";
		return '';
		
	}

}