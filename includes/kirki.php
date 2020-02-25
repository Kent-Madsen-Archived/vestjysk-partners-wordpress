<?php 

$config = array(
    'capability' => 'edit_theme_options', 
    'option_type' => 'option',
    'option_name' => 'vestjyskpartners_kirki_configuration'
);

Kirki::add_config('vestjyskpartners_kirki_configuration', $config);

Kirki::add_panel( 'UI-Panel', 
    array(
    'priority' => 100,
    'title' => esc_html__('UI Settings', 'textdomain'),
    'description' => esc_html__('', 'textdomain')
));

Kirki::add_section('UI-Color', 
array(
    'title'          => esc_html__( 'My Section', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'UI-Panel',
    'priority'       => 160,
    'capability' => 'edit_theme_options',
    'theme_supports' => ''
));

 
Kirki::add_field( 'vestjyskpartners_kirki_configuration', 
array(
    'type'        => 'text',
    'setting'     => 'text_demo',
    
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'help'        => __( 'This is some extra help text.', 'kirki' ),
    'section'     => 'UI-Color',
    'default'     => __( 'This is some default text', 'kirki' ),
    'priority'    => 10,
) );
 

?>