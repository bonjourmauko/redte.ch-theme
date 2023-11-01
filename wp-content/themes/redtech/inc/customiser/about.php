<?php
/**
 * Add about us.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_about( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'about', array(
	    'title'    => __( 'About', 'redtech' ),
	) );

	$wp_customize->add_setting( 'beginnings', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'beginnings', array(
	    'label'   => __( 'Beginnings', 'redtech' ),
	    'section' => 'about',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'inflexion', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'inflexion', array(
	    'label'   => __( 'Inflexion Point', 'redtech' ),
	    'section' => 'about',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'present', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'present', array(
	    'label'   => __( 'Present & Future', 'redtech' ),
	    'section' => 'about',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_about'
);
