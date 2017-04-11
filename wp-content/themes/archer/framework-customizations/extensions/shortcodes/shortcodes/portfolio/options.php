<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'attractions' => array(
        'label' => esc_html__('Portfolio', 'archer'),
        'popup-title' => esc_html__('Add/Edit', 'archer'),
        'desc' => esc_html__('Here you can add, remove and edit your content.', 'archer'),
        'type' => 'addable-popup',
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => esc_html__('Title', 'archer'),
                'type' => 'text'
            ),
            
            'width' => array(
                'label' => esc_html__('Grid Width', 'archer'),
                'type' => 'radio',
                'choices' => array(
                    'grid-item--width1' => esc_html__('1x', 'archer'),
                    'grid-item--width2' => esc_html__('2x', 'archer'),
                ),
                'value' => 'grid-item--width1',
                'inline' => true,
            ),
            'height' => array(
                'label' => esc_html__('Grid Height', 'archer'),
                'type' => 'radio',
                'choices' => array(
                    'grid-item--height1' => esc_html__('1x', 'archer'),
                    'grid-item--height2' => esc_html__('2x', 'archer'),
                ),
                'value' => 'grid-item--height1',
                'inline' => true,
            ),
            'image' => array(
                'label' => esc_html__('Image', 'archer'),
                'desc' => esc_html__('Upload an image', 'archer'),
                'type' => 'upload'
            ),
            'largeimage' => array(
                'label' => esc_html__('Popup Image', 'archer'),
                'desc' => esc_html__('Upload an image', 'archer'),
                'type' => 'upload'
            ),
        ),
    ),    
);
