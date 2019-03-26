<?php
/**
 * hw_18 Theme Customizer
 *
 * @package hw_18
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hw_18_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
//    $wp_customize->add_section('second_section', array(
//        'title' => __('Second section', 'hw_18'),
//        'priority' => 10,
//    ));
//
//    $wp_customize->add_setting('second_header', array(
//        'default' => '',
//        'transport' => 'refresh',
//    ));
//
//    $wp_customize->add_setting('second_description', array(
//        'default' => '',
//        'transport' => 'refresh',
//    ));
//
//    $wp_customize->add_setting('second_img-upload', array(
//        'default' => '',
//        'transport' => 'refresh',
//    ));
//
//    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second_section_header', array(
//        'label' => __('Header', 'hw_18'),
//        'section' => 'second_section',
//        'settings' => 'second_header',
//    )));
//
//    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second_section_description', array(
//        'label' => __('Description', 'hw_18'),
//        'section' => 'second_section',
//        'settings' => 'second_description',
//    )));
//
//    $wp_customize->add_control(
//        new WP_Customize_Image_Control(
//            $wp_customize,
//            'second_img-upload',
//            array(
//                'label'      => __( 'Second_img-upload', 'hw_18' ),
//                'section'    => 'second_section',
//                'settings'   => 'second_img-upload',
//                'context'    => 'your_setting_context'
//            )
//        )
//    );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'hw_18_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'hw_18_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'hw_18_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function hw_18_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function hw_18_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hw_18_customize_preview_js() {
	wp_enqueue_script( 'hw_18-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'hw_18_customize_preview_js' );

