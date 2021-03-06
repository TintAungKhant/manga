<?php
	add_action( 'wp_enqueue_scripts', 'madara_scripts_styles_child_theme' );
	function madara_scripts_styles_child_theme() {
		wp_enqueue_style( 'madara-css-child', get_parent_theme_file_uri() . '/style.css', array(
			'fontawesome',
			'bootstrap',
			'slick',
			'slick-theme'
		) );
	}
	
	/* Disable VC auto-update */
	add_action( 'admin_init', 'madara_vc_disable_update', 9 );
	function madara_vc_disable_update() {
		if ( function_exists( 'vc_license' ) && function_exists( 'vc_updater' ) && ! vc_license()->isActivated() ) {

			remove_filter( 'upgrader_pre_download', array( vc_updater(), 'preUpgradeFilter' ), 10 );
			remove_filter( 'pre_set_site_transient_update_plugins', array(
				vc_updater()->updateManager(),
				'check_update'
			) );

		}
	}
    
    /**
     * does not support Widgets Block Editor yet
     **/
    function madara_theme_support() {
        remove_theme_support( 'widgets-block-editor' );
    }
    add_action( 'after_setup_theme', 'madara_theme_support' );
