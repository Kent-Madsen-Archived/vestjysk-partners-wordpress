<?php 

function theme_customize_register( $wp_customize ) {
    // All our settings will go here
    $wp_customize->add_setting( 'primary-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Primary Theme color', 'theme' ),
    ) ) );

    //
    $wp_customize->add_setting( 'secondary-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'secondary Theme color', 'theme' ),
    ) ) );

    //
    $wp_customize->add_setting( 'header-background-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header-background-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Header Theme color', 'theme' ),
    ) ) );


    //
    $wp_customize->add_setting( 'footer-background-color', array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer-background-color', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Theme color', 'theme' ),
    ) ) );
}

?>