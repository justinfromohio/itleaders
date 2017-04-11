<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'download' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'download_style' => array(
                'label' => __('Download Style', 'archer'),
                'desc' => __('Choose Download Style', 'archer'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'download-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/apps-download-1.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => ARCHER_IMAGES . '/image-picker/apps-download-1.png'
                        ),
                    ),
                    'download-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/apps-download-2.png'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => ARCHER_IMAGES . '/image-picker/apps-download-2.png'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'download-1' => array(
                'apps' => array(
                    'label' => __('Apps Image', 'archer'),
                    'desc' => __('Upload Your Favorite Apps Image', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => 'Title : {{- title }}',
                    'popup-options' => array(
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Apps Image 1',
                            'label' => __('Title', 'archer'),
                            'desc' => __('Type the apps image title but not appear in front-end', 'archer'),
                        ),
                        'image' => array(
                            'label' => __('Image', 'archer'),
                            'desc' => __('Upload the apps image', 'archer'),
                            'type' => 'upload'
                        ),
                        'link' => array(
                            'label' => __('Image Link', 'archer'),
                            'desc' => __('Input the apps image link', 'archer'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                    )
                ),
            ),
            'download-2' => array(
                'sliders' => array(
                    'label' => __('Apps Slider Image', 'archer'),
                    'desc' => __('Upload Your Favorite Slider Image', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => 'Title : {{- title }}',
                    'popup-options' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => __('Title', 'archer'),
                            'value' => 'Slider Image 1',
                            'desc' => __('Type the slider image title but not appear in front-end', 'archer'),
                        ),
                        'image' => array(
                            'label' => __('Image', 'archer'),
                            'desc' => __('Upload the sliders image', 'archer'),
                            'type' => 'upload'
                        ),
                    )
                ),
                'apps' => array(
                    'label' => __('Apps Image', 'archer'),
                    'desc' => __('Upload Your Favorite Apps Image', 'archer'),
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'template' => 'Title : {{- title }}',
                    'popup-options' => array(
                        'title' => array(
                            'type' => 'text',
                            'value' => 'Apps Image 1',
                            'label' => __('Title', 'archer'),
                            'desc' => __('Type the apps image title but not appear in front-end', 'archer'),
                        ),
                        'image' => array(
                            'label' => __('Apps Image', 'archer'),
                            'desc' => __('Upload the apps image', 'archer'),
                            'type' => 'upload'
                        ),
                        'link' => array(
                            'label' => __('Image Link', 'archer'),
                            'desc' => __('Input the apps image link', 'archer'),
                            'type' => 'text',
                            'value' => '#'
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
        'value' => 'Official Offers',
    ),
    'subtitle' => array(
        'label' => __('Subtitle', 'archer'),
        'desc' => __('Enter the page subtitle', 'archer'),
        'type' => 'text',
        'value' => 'Download app to get special offers',
    ),
);
