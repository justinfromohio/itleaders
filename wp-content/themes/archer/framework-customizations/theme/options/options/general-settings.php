<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'general' => array(
        'title' => esc_html__('General', 'archer'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('General Settings', 'archer'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => esc_html__('Menu Logo', 'archer'),
                        'desc' => esc_html__('Add your website menu logo', 'archer'),
                        'type' => 'upload',
                    ),
                    'transparent_logo' => array(
                        'label' => esc_html__('Trnsparent Logo', 'archer'),
                        'desc' => esc_html__('this logo will display within transparent menu', 'archer'),
                        'type' => 'upload',
                    ),
                    'favicon' => array(
                        'label' => esc_html__('Favicon', 'archer'),
                        'desc' => esc_html__('Upload a favicon image (32x32 px)', 'archer'),
                        'type' => 'upload'
                    ),
                    'loader' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Pre Loader', 'archer'),
                        'desc' => false,
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__('Yes', 'archer'),
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => esc_html__('No', 'archer'),
                        ),
                    ),
                    
                    'site_icon_192' => array(
                        'label' => esc_attr__( 'Large Favicon', 'archer' ),
                        'desc' => esc_html__( 'Upload a Favicon for larger display (192x192 px)', 'archer' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'site_icon_180' => array(
                        'label' => esc_attr__( 'Apple Touch Icon', 'archer' ),
                        'desc' => esc_html__( 'Upload a Apple Touch Icon (180x180 px)', 'archer' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'site_icon_270' => array(
                        'label' => esc_html__( 'Microsoft Tile Image', 'archer' ),
                        'desc' => esc_html__( 'Upload a Favicon for Microsoft devices (270x270 px)', 'archer' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'cta_menu' => array(
                        'type' => 'addable-popup',
                        'label' => 'Call-To-Action Button',
                        'limit' => '2',
                        'template' => '{{=title}}',
                        'popup-options' => array(
                            'cta_type' => array(
                                'type' => 'radio',
                                'value' => 'link',
                                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                                'label' => esc_html__('Style Type', 'archer'),
                                'desc' => esc_html__('Select your call-to-action menu type', 'archer'),
                                'choices' => array(
                                    'link' => esc_html__('Link', 'archer'),
                                    'button' => esc_html__('Button', 'archer'),
                                ),
                            ),
                            'title' => array(
                                'label' => esc_html__('Title', 'archer'),
                                'desc' => esc_html__('Enter your title', 'archer'),
                                'type' => 'text',
                                'value' => 'Sign In'
                            ),
                            'url' => array(
                                'label' => esc_html__('URL', 'archer'),
                                'desc' => esc_html__('Enter your URL', 'archer'),
                                'type' => 'text',
                                'value' => '#',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => esc_html__('Open Link in New Window', 'archer'),
                                'desc' => esc_html__('Select here if you want to open the linked page in a new window', 'archer'),
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => esc_html__('Yes', 'archer'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => esc_html__('No', 'archer'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        )
    )
);
