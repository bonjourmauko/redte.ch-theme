<?php
/**
 * Add team members.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function redtech_add_team( WP_Customize_Manager $wp_customize ) : void {
	$wp_customize->add_section( 'team', array(
	    'title'    => __( 'Team', 'redtech' ),
	) );

	$wp_customize->add_setting( 'team_1_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_1_name', array(
	    'label'   => __( 'Team Member #1 (Name)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_1_title', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_1_title', array(
	    'label'   => __( 'Team Member #1 (Title)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_1_bio', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_1_bio', array(
	    'label'   => __( 'Team Member #1 (Bio)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'team_1_picture', array(
	    'default'   => '',
	    'transport' => 'postMessage',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'team_1_picture',
		array(
		    'label'   => __( 'Team Member #1 (Picture)', 'redtech' ),
		    'section' => 'team',
		    'type'    => 'image',
		)
	) );

	$wp_customize->add_setting( 'team_2_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_2_name', array(
	    'label'   => __( 'Team Member #2 (Name)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_2_title', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_2_title', array(
	    'label'   => __( 'Team Member #2 (Title)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_2_bio', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_2_bio', array(
	    'label'   => __( 'Team Member #2 (Bio)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'team_2_picture', array(
	    'default'   => '',
	    'transport' => 'postMessage',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'team_2_picture',
		array(
		    'label'   => __( 'Team Member #2 (Picture)', 'redtech' ),
		    'section' => 'team',
		    'type'    => 'image',
		)
	) );

	$wp_customize->add_setting( 'team_3_name', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_3_name', array(
	    'label'   => __( 'Team Member #3 (Name)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_3_title', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_3_title', array(
	    'label'   => __( 'Team Member #3 (Title)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'text',
	) );

	$wp_customize->add_setting( 'team_3_bio', array(
	    'default'   => '',
	    'transport' => 'postMessage',
	) );

	$wp_customize->add_control( 'team_3_bio', array(
	    'label'   => __( 'Team Member #3 (Bio)', 'redtech' ),
	    'section' => 'team',
	    'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'team_3_picture', array(
	    'default'   => '',
	    'transport' => 'postMessage',
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'team_3_picture',
		array(
		    'label'   => __( 'Team Member #3 (Picture)', 'redtech' ),
		    'section' => 'team',
		    'type'    => 'image',
		)
	) );
}

add_action(
	'customize_register',
	'redtech_add_team'
);

