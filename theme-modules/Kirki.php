<?php 

class KirkiCustomization
{
    //
    public function __construct()
    {
        $config = array(
            'capability' => 'edit_theme_options', 
            'option_type' => 'theme_mod',
            'option_name' => 'vestjyskpartners_kirki_configuration'
        );
    
        Kirki::add_config(self::$config_id, $config);
        
        $this::registerFilter();
        $this::registerAction();
    }

    public function __deconstruct()
    {
        
    }

    //
    private function registerFilter()
    {
        add_filter( 'kirki/config', 'vjp_customizer_kirki_configuration' );  
        add_filter( 'kirki/fields', 'vjp_customizer_kirki_fields' );

        add_filter( 'kirki_telemetry', '__return_false' );
    }

    private function registerAction()
    {    
        
        add_action( 'customize_register', 'vjp_customizer_kirki_settings' );
    }

    private static $config_id = 'vestjyskpartners_kirki_configuration';

    private static $panel_interface = "vjp_kirki_customizer_panel_interface";
    private static $panel_some = "vjp_kirki_customizer_panel_some";

    private static $section_some_colors = "vjp-section-interface-some-colors";
    
    private static $section_interface_colors = "vjp-section-interface-colors";
    private static $section_interface_typography = "vjp-section-interface-typography";

    private static $section_interface_header = "vjp-section-interface-header";
    private static $section_interface_footer = "vjp-section-interface-footer";

    private static $v_kirki = "kirki";
    
    //
    public static function registerPanels( $wp_customizer ) 
    {
        
        $wp_customizer->add_panel(
            self::$panel_interface,
            array(
                'priority' => 10,
                'title' => __('Theme Interface Settings', self::$v_kirki),
                'description' => __('interface', self::$v_kirki),
            ),
        );

        $wp_customizer->add_panel(
            self::$panel_some,
            array(
                'priority' => 10,
                'title' => __('SOME Settings', self::$v_kirki),
                'description' => __('', self::$v_kirki),
            ),
        );
    
        return $wp_customizer;
    }

    public static function registerSections( $wp_customizer ) 
    {
        $wp_customizer->add_section(
            self::$section_interface_colors, 
            array(
                'title' => __('Colors', self::$v_kirki),
                'priority' => 10,
                'panel' => self::$panel_interface,
            ),
        );

        
        $wp_customizer->add_section(
            self::$section_interface_typography, 
            array(
                'title' => __('Typography', self::$v_kirki),
                'priority' => 20,
                'panel' => self::$panel_interface,
            ),
        );

        $wp_customizer->add_section(
            self:: $section_some_colors, 
            array(
                'title' => __('SOME Colors', self::$v_kirki),
                'priority' => 10,
                'panel' => self::$panel_some,
            ),
        );

        return $wp_customizer;
    }

    public static function registerFields( $wp_customizer_fields ) 
    {
        
        // Interface
        Kirki::add_field(
            self::$config_id,
            array(
                'type'     => 'color',
                'settings' => 'overlay-primary-color',
                'label'    => esc_html__( 'Overlay - Primary Color', self::$v_kirki),
                'section'  => self::$section_interface_colors,
                'default'  => esc_html__( '#0088cc', self::$v_kirki ),

                'priority' => 10,
                'output' => array(array( 'element' => '.overlay-primary',
                                         'property' => 'background-color') ),
            ),
        );

        Kirki::add_field(
            self::$config_id,
            array(
                'type'     => 'color',
                'settings' => 'overlay-secondary-color',
                'label'    => esc_html__( 'Overlay - Secondary Color', self::$v_kirki),
                'section'  => self::$section_interface_colors,
                
                'default'  => esc_html__( '#0088cc', self::$v_kirki ),
                
                'priority' => 10,

                'output' => array( array( 'element' => '.overlay-secondary',
                                         'property' => 'background-color'), ),
            ),
        );

        Kirki::add_field(
            self::$config_id,
            array(
                'type' => 'typography',
                'settings'=>'header-fonts',

                'label'       => esc_html__( 'Header Fonts', self::$v_kirki ),
                'section'     => self::$section_interface_typography,

                'default'     => [
                    'font-family'    => 'Open Sans',
                    'variant'        => 'regular',
                    'text-transform' => 'none',
                    'text-align'     => 'left',
                ],

                'priority'    => 10,
                'transport'   => 'auto',
                
                'output'      => [
                    [
                        'element' => 'h1',
                    ],
                    [
                        'element' => 'h2',
                    ],
                    [
                        'element' => 'h3',
                    ],
                    [
                        'element' => 'h4',
                    ],
                    [
                        'element' => 'h5',
                    ],
                    [
                        'element' => 'h6',
                    ],
                    [
                        'element' => 'h7',
                    ],
                    [
                        'element' => 'h8',
                    ],
                    [
                        'element' => 'h9',
                    ],
                ],

            )
        );

        Kirki::add_field(
            self::$config_id,
            array(
                'type' => 'typography',
                'settings'=>'paragraph-fonts',	
                
                'label'       => esc_html__( 'Paragraph Fonts', self::$v_kirki ),
                'section'     => self::$section_interface_typography,
                
                'default'     => [
                    'font-family'    => 'Roboto',
                    'variant'        => 'regular',
                    'text-align'     => 'left',
                    'line-height'    => '1.5',
                    'letter-spacing' => '0',
                    'font-size'      => '14px'
                ],
                
                'priority'    => 10,
                'transport'   => 'auto',

                'output'      => [
                    [
                        'element' => 'p',
                    ],
                ],

            )
        );

        Kirki::add_field(
            self::$config_id,
            array(
                'type'     => 'color',
                'settings' => 'some-facebook-color',
                'label'    => esc_html__( 'Facebook', self::$v_kirki),
                'section'  => self::$section_some_colors,
                'default'  => esc_html__( '#0088cc', self::$v_kirki ),

                'priority' => 10,

                'output' => array(array( 'element' => '.some-facebook',
                                         'property' => 'color') ),
            ),
        );

        Kirki::add_field(
            self::$config_id,
            array(
                'type'     => 'color',
                'settings' => 'some-linkedin-color',
                'label'    => esc_html__( 'Linkedin', self::$v_kirki),
                'section'  => self::$section_some_colors,

                'default'  => esc_html__( '#0088cc', self::$v_kirki ),

                'priority' => 10,

                'output' => array(array( 'element' => '.some-linkedin',
                                         'property' => 'color') ),
            ),
        );


        return $wp_customizer_fields;
    
    }
}

function vjp_customizer_kirki_configuration() 
{
    
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/includes/kirki/' );
}


function vjp_customizer_kirki_settings( $wp_customizer ) 
{
    KirkiCustomization::registerPanels($wp_customizer);
    KirkiCustomization::registerSections($wp_customizer);
}


function vjp_customizer_kirki_fields( $wp_customizer_fields ) 
{
    return KirkiCustomization::registerFields($wp_customizer_fields);
}


?>
