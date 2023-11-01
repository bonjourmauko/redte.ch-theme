<?php
/**
 * Add storytelling.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_storytelling( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'storytelling', array(
	    'title'    => __( 'Storytelling (Blurb)', 'redtech' ),
	) );

	$wp_customize->add_setting( 'situation', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'situation', array(
	    'label'   => __( 'Situation', 'redtech' ),
	    'section' => 'storytelling',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'complication', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'complication', array(
	    'label'   => __( 'Complication', 'redtech' ),
	    'section' => 'storytelling',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'resolution', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'resolution', array(
	    'label'   => __( 'Resolution', 'redtech' ),
	    'section' => 'storytelling',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_storytelling'
);
