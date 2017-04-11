<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => esc_html__('Footer Settings', 'archer'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => esc_html__('Footer Settings', 'archer'),
                'type' => 'box',
                'options' => array(
                    'bg_color' => array(
                        'label' => esc_html__('Background Color', 'archer'),
                        'type' => 'color-picker',
                        'value' => '#f9fcfe',
                        'desc' => esc_html__('Footer background color.', 'archer'),
                    ),
                    'footer_text_color' => array(
                        'label' => esc_html__(' Text Color', 'archer'),
                        'type' => 'color-picker',
                        'value' => '#848e92',
                        'desc' => esc_html__('Footer text color.', 'archer'),
                    ),
                    'footer_logo' => array(
                        'type' => 'upload',
                        'label' => esc_html__('Footer Logo', 'archer'),
                    ),
                    'footer_heading' => array(
                        'label' => esc_html__('Footer text', 'archer'),
                        'type' => 'text',
                        'value' => '2016 Archer. All rights reserved.',
                        'desc' => esc_html__('Footer text.', 'archer'),
                    ),
                    'footer_links' => array(
                        'type' => 'addable-popup',
                        'label' => esc_html__('Footer Links', 'archer'),
                        'desc' => esc_html__('Add your footer links', 'archer'),
                        'template' => '{{=title}}',
                        'popup-options' => array(
                            'title' => array(
                                'label' => esc_html__('Title', 'archer'),
                                'desc' => esc_html__('Enter the footer link title', 'archer'),
                                'type' => 'text',
                                'value' => 'Terms',
                            ),
                            'head_title' => array(
                                'label' => esc_html__('Popup Head Title', 'archer'),
                                'desc' => esc_html__('Enter your footer popup head title', 'archer'),
                                'type' => 'text',
                                'value' => 'Terms of Use',
                            ),
                            'content' => array(
                                'label' => esc_html__('Popup Content', 'archer'),
                                'desc' => esc_html__('Enter your footer popup content', 'archer'),
                                'type' => 'wp-editor'
                            )
                        ),
                    ),
                    'form_shortcode' => array(
                        'type' => 'text',
                        'label' => esc_html__('Contact Form Shortcode', 'archer'),
                        'desc' => esc_html__('Genarate a shortcode from calerda form. ', 'archer'),
                        'value' => esc_html__('[caldera_form id="CF574bdfd01084a"]', 'archer'),
                    ),
                ),
            ),
        ),
    ),
);
