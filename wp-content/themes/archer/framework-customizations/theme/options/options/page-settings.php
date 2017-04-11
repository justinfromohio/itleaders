<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'page_settings' => array(
        'title' => esc_html__('Page Settings', 'archer'),
        'type' => 'tab',
        'options' => array(
            'header-page-box' => array(
                'title' => esc_html__('Page Settings', 'archer'),
                'type' => 'box',
                'options' => array(
                    'general_page_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'page_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Page Title',
                                        'desc' => 'Add your Page hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => esc_html__('Page Header Image', 'archer'),
                                        'desc' => esc_html__('Upload a Page header image', 'archer'),
                                        'help' => esc_html__("This default header image will be used for all your Page.", "archer"),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => esc_html__('', 'archer'),
                                        'desc' => esc_html__('Select the image overlay color', 'archer'),
                                        'help' => esc_html__('', 'archer'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
        ),
    ),
);
