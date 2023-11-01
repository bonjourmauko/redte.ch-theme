<?php
/**
 * Add headline.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_headline( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_setting( 'headline', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'headline', array(
	    'label'   => __( 'Headline', 'redtech' ),
	    'section' => 'title_tagline',
	    'type'    => 'textarea',
	) );
}

add_action(
	'customize_register',
	'redtech_add_headline'
);