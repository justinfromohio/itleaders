<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'feature' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'feature_style' => array(
                'label' => __('Feature Style', 'archer'),
                'desc' => __('Choose Feature Style', 'archer'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'feature-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style1.png'
                        ),
                    ),
                    'feature-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style2.png'
                        ),
                    ),
                    'feature-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style3.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => ARCHER_IMAGES . '/image-picker/features-style3.png'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'feature-1' => array(
                'image' => array(
                    'label' => __('Main Image', 'archer'),
                    'desc' => __('Add left backgound image', 'archer'),
                    'type' => 'upload',
                ),
                'iconbox' => array(
                    'label' => __('Icon Box Item', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => 'Title : {{- title }}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'label' => __('Choose an Icon', 'archer'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Bootstrap V3',
                            'label' => __('Title of the Box', 'archer'),
                        ),
                        'content' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Enter the icon box description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        ),
                    )
                ),
            ),
            'feature-2' => array(
                'iconbox' => array(
                    'label' => __('Icon Box Item', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => 'Title : {{- title }}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'label' => __('Choose an Icon', 'archer'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Bootstrap V3',
                            'label' => __('Title of the Box', 'archer'),
                        ),
                        'content' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Enter the icon box description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        ),
                    )
                ),
            ),
            'feature-3' => array(
                'image' => array(
                    'label' => __('Main Image', 'archer'),
                    'desc' => __('Add left backgound image', 'archer'),
                    'type' => 'upload',
                ),
                'feature_left' => array(
                    'label' => __('Feature Left', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'medium',
                    'limit' => '3',
                    'desc' => __('Add Left Side Feature', 'archer'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                       'icon' => array(
                            'type' => 'new-icon',
                            'label' => __('Choose an Icon', 'archer'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Bootstrap V3',
                            'label' => __('Title of the Box', 'archer'),
                        ),
                        'content' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Enter the icon box description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        ),
                    )
                ),
                'feature_right' => array(
                    'label' => __('Feature Right', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'medium',
                    'limit' => '3',
                    'desc' => __('Add Right Side Feature', 'archer'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'type' => 'new-icon',
                            'label' => __('Choose an Icon', 'archer'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Bootstrap V3',
                            'label' => __('Title of the Box', 'archer'),
                        ),
                        'content' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Enter the icon box description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        ),
                    )
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'title' => array(
        'label' => __('Title', 'archer'),
        'desc' => __('Enter the title', 'archer'),
        'type' => 'text',
        'value' => 'Key features of the product',
    ),
    'subtitle' => array(
        'label' => __('Subtitle', 'archer'),
        'desc' => __('Enter the page subtitle', 'archer'),
        'type' => 'text',
        'value' => 'Everything your need',
    ),
);
