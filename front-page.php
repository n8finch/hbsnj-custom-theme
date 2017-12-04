<?php

/**
 * Template Name: Front Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

beans_remove_markup( 'beans_fixed_wrap_main' );
beans_remove_attribute( 'beans_main', 'class', 'uk-block' );
beans_remove_attribute( 'beans_post', 'class', 'uk-panel-box' );


// beans_add_smart_action( 'beans_post_prepend_markup', 'hbsnj_display_about_section' );

add_action( 'beans_header_append_markup', 'getbeans_view_hero' );

function getbeans_view_hero() {

	?>
	this is header append markup
	<?php

}

// add_action( 'beans_main_before_markup', 'getbeans_view_accreditations' );

function getbeans_view_accreditations() {

	?>
	this is the beans before main markup
	<?php

}





beans_modify_action_callback( 'beans_loop_template', 'getbeans_view_content' );

function getbeans_view_content() {

	?>
	this is the beans loop template
	<?php

}


beans_load_document();
