<?php

/**
 * Simple Customizater Options 
 */
function gbm_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'copyright_section' , array(
	    'title'      => __( 'Copyright Text', 'sdc-theme' ),
	    'priority'   => 120,
	) );

	$wp_customize->add_setting( 'copyright_txt_setting' , array(
		'default'   => __('© Copyright - O’Connell & Graham , LLC', 'sdc-theme' ),
		'transport' => 'refresh',
	) );

	$wp_customize->add_control( 'copyright_txt', array(
		'label'       =>__('Copyright Text','sdc-theme'),
		'section'     =>'copyright_section',
		'settings'    =>'copyright_txt_setting',
		'type'        =>'textarea',
	));

}
add_action( 'customize_register', 'gbm_customize_register' );