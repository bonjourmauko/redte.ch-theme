<?php
/**
 * Add social proof.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_proof( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'proof', array(
	    'title'    => __( 'Social Proof', 'redtech' ),
	) );

	$wp_customize->add_setting( 'customer_1_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_1_name', array(
	    'label'   => __( 'Customer #1 (Name)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_1_company', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_1_company', array(
	    'label'   => __( 'Customer #1 (Company)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_1_testimonial', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_1_testimonial', array(
	    'label'   => __( 'Customer #1 (Testimonial)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'customer_2_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_2_name', array(
	    'label'   => __( 'Customer #2 (Name)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_2_company', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_2_company', array(
	    'label'   => __( 'Customer #2 (Company)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_2_testimonial', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_2_testimonial', array(
	    'label'   => __( 'Customer #2 (Testimonial)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'customer_3_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_3_name', array(
	    'label'   => __( 'Customer #3 (Name)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_3_company', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_3_company', array(
	    'label'   => __( 'Customer #3 (Company)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'customer_3_testimonial', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'customer_3_testimonial', array(
	    'label'   => __( 'Customer #3 (Testimonial)', 'redtech' ),
	    'section' => 'proof',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_proof'
);