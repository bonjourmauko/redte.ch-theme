<?php
/**
 * Add customer segments.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_segments( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'segments', array(
	    'title'    => __( 'Customer Segments', 'redtech' ),
	) );

	$wp_customize->add_setting( 'government_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'government_textarea', array(
	    'label'   => __( 'Government', 'redtech' ),
	    'section' => 'segments',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'corporate_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'corporate_textarea', array(
	    'label'   => __( 'Corporate', 'redtech' ),
	    'section' => 'segments',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'startups_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'startups_textarea', array(
	    'label'   => __( 'Startups', 'redtech' ),
	    'section' => 'segments',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_segments'
);