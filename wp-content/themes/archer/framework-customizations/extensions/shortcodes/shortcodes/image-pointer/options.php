<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'image' => array(
        'label' => __('Image', 'archer'),
        'desc' => __('Uplod your feature image', 'archer'),
        'type' => 'upload'
    ),
    'pointer' => array(
        'type' => 'addable-popup',
        'label' => __('Image Pointer', 'archer'),
        'desc' => __('Add image pointer', 'archer'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'archer'),
                'desc' => __('Enter your tooltip title', 'archer'),
                'type' => 'text',
                'value' => 'Feature Title',
            ),
            'desc' => array(
                'label' => __('Description', 'archer'),
                'desc' => __('Enter your tooltip description', 'archer'),
                'type' => 'textarea',
                'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
            ),
            'top' => array(
                'type' => 'slider',
                'value' => 20,
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                'label' => __('Top', 'archer'),
                'desc' => __('How top your feature pointer position (<b>Ex:</b> 20%)', 'archer'),
                'help' => __('Drag your pointer range that How top your feature pointer position & it should be counted by percentage(%)', 'archer'),
            ),
            'left' => array(
                'type' => 'slider',
                'value' => 30,
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                'label' => __('Left', 'archer'),
                'desc' => __('How left your feature pointer position (<b>Ex:</b> 30%)', 'archer'),
                'help' => __('Drag your pointer range that How left your feature pointer position & it should be counted by percentage(%)', 'archer'),
            ),
            
        ),
    ),
);
