<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'archer'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'archer')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => __('Add a border to your image?', 'archer'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => __('No', 'archer'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => __('Yes', 'archer'),
//        )
//    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'archer'),
                'desc' => __('Select the image size', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'archer'),
                    'custom' => __('Custom', 'archer')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'archer'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'archer'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'archer')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'archer')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'archer')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'archer'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'archer'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'archer'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'archer'),
                'desc' => __('Where should your image link to?', 'archer')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'archer'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'archer'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'archer'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'archer'),
                ),
            ),
        )
    )
);

