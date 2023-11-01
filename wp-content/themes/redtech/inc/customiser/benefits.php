<?php
/**
 * Add product benefits.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_benefits( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'benefits', array(
	    'title'    => __( 'Product Benefits', 'redtech' ),
	) );

	$wp_customize->add_setting( 'benefit_1_text', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_1_text', array(
	    'label'   => __( 'Benefit #1 (Title)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'benefit_1_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_1_textarea', array(
	    'label'   => __( 'Benefit #1 (Description)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'benefit_2_text', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_2_text', array(
	    'label'   => __( 'Benefit #2 (Title)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'benefit_2_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_2_textarea', array(
	    'label'   => __( 'Benefit #2 (Description)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'benefit_3_text', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_3_text', array(
	    'label'   => __( 'Benefit #3 (Title)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'benefit_3_textarea', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'benefit_3_textarea', array(
	    'label'   => __( 'Benefit #3 (Description)', 'redtech' ),
	    'section' => 'benefits',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_benefits'
);
