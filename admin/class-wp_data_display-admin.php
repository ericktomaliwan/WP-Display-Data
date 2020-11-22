<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       ericktomaliwan.net
 * @since      1.0.0
 *
 * @package    Wp_data_display
 * @subpackage Wp_data_display/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_data_display
 * @subpackage Wp_data_display/admin
 * @author     Erick Tomaliwan <hi@ericktomaliwan.net>
 */
class Wp_data_display_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_data_display_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_data_display_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		global $pagenow;
		if ( isset($_REQUEST['page']) ) {
			if ( $_REQUEST['page'] == 'wpdispdata_wplist' ) {
				// wp_dequeue_style( 'gforms_reset_css' );
				// wp_dequeue_style( 'gforms_datepicker_css' );
				// wp_dequeue_style( 'gforms_formsmain_css' );
				// wp_dequeue_style( 'gforms_ready_class_css' );
				// wp_dequeue_style( 'gforms_browsers_css' );
				//wp_enqueue_style( $this->plugin_name . 'boot', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css', array(), $this->version, false);
				wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp_data_display-admin.css', array(), $this->version, 'all' );
			}
		}


	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_data_display_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_data_display_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		global $pagenow;
		if ( isset($_REQUEST['page']) ) {
			if ( $_REQUEST['page'] == 'wpdispdata_wplist' ) {
				wp_enqueue_script( $this->plugin_name . '_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), $this->version, false);
				wp_enqueue_script( $this->plugin_name . '_boot', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js', array('jquery'), $this->version, false);
				wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp_data_display-admin.js', array( 'jquery' ), $this->version, false );
			}
		}
	}

	/*Adds the menu*/
	public function adm_menu(){

		global $pagenow, $wpdispdata_menu;
		
		if (is_user_logged_in() && is_admin()){
			add_menu_page( 
				$wpdispdata_menu['page_title'],
				$wpdispdata_menu['menu_title'], 
				$wpdispdata_menu['capability'], 
				$wpdispdata_menu['menu_slug'], 
				array($this, $wpdispdata_menu['function']), 
				$wpdispdata_menu['menu_icon'], 
				$wpdispdata_menu['position'] 
			);
		}
	}

	public function dashboard_home_wpdispdata_wplist(){

	}
}
