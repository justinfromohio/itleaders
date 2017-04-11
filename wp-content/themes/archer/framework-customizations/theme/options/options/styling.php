<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'styling_settings' => array(
        'title' => esc_html__('Styling Settings', 'archer'),
        'type' => 'tab',
        'options' => array(
            'header-styling-box' => array(
                'title' => esc_html__('Styling Settings', 'archer'),
                'type' => 'box',
                'options' => array(
                    'main_color' => array(
                        'type' => 'color-picker',
                        'label' => 'Theme Color',
                        'desc' => 'You can use any color in your theme',
                        'value' => '#31aff5'
                    ),
                    'typography-global' => array(
                        'title' => esc_html__('Global Typography', 'archer'),
                        'type' => 'box',
                        'options' => array(
                            'heading_title' => array(
                                'label' => esc_html__('Headling Title ', 'archer'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'lane',
                                    'style' => 'normal',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('Main Heading Title. you can create heading from shortcode special heading.', 'archer'),
                            ),
                            'heading_subtitle' => array(
                                'label' => esc_html__('Sub Heading Title', 'archer'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'roboto',
                                    'style' => 'normal',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('Main Heading sub Title. you can create heading from shortcode special heading.', 'archer'),
                            ),
                            'body_font' => array(
                                'label' => esc_attr__('Body Font', 'archer'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'roboto',
                                    'style' => 'regular',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('this is default body font .', 'archer'),
                            ),
                        ),
                    ),
                )
            ),
            'css-box' => array(
                'title' => esc_html__('EXTRA CSS', 'archer'),
                'type' => 'box',
                'options' => array(
                    'custom_css' => array(
                        'label' => esc_html__('Custom CSS', 'archer'),
                        'desc' => esc_html__('Custom Css changes that will be applied to the theme', 'archer'),
                        'help' => esc_html__('If you need to change major portions of the theme please add your custom CSS in the style.css file. This file is located on your server in the <strong>/child-theme/style.css</strong>', 'archer'),
                        'type' => 'textarea',
                        'value' => '',
                    ),
                )
            ),
        ),
    ),
);
