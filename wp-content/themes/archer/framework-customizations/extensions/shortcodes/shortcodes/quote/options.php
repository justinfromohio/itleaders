<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'text_align' => array(
        'label' => __('Text Alignment', 'archer'),
        'desc' => __('Select the prefered text alignment', 'archer'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            'fw-quote-left' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/left-position.jpg',
                    'title' => __('Left', 'archer')
                ),
            ),
            'fw-quote-center' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/center-position.jpg',
                    'title' => __('Center', 'archer')
                ),
            ),
            'fw-quote-right' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/right-position.jpg',
                    'title' => __('Right', 'archer')
                ),
            ),
        ),
    ),
    'text' => array(
        'label' => __('Text', 'archer'),
        'desc' => __('Enter quote text', 'archer'),
        'value' => '',
        'type' => 'wp-editor',
        'tinymce' => true,
        'reinit' => true,
        'wpautop' => false,
    ),
    'text_group' => array(
        'type' => 'group',
        'options' => array(
            'author' => array(
                'label' => __('Author', 'archer'),
                'desc' => __('Enter the author name', 'archer'),
                'type' => 'text',
                'value' => 'Lisa Ortiz'
            ),
            'position' => array(
                'label' => __('Position', 'archer'),
                'desc' => __('Enter the author position', 'archer'),
                'type' => 'text',
                'value' => 'Manager Googje inc'
            ),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'archer'),
    ),
);
