<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'button_settings' => array(
        'type' => 'addable-popup',
        'label' => __('Button', 'archer'),
        'desc' => __('Add Your Favorite Simple Button or Video Button', 'archer'),
        'size' => 'medium',
        'template' => '{{- label }}',
        'popup-options' => array(
            'label' => array(
                'label' => __('Button Title', 'archer'),
                'desc' => __('This is the text that appears only backend your button not fron-tend', 'archer'),
                'type' => 'text',
                'value' => 'Simple Button'
            ),
            'tab_item' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'picker' => array(
                    'selected_value' => array(
                        'label' => __('Button Style Type', 'archer'),
                        'attr' => array('class' => 'fw-checkbox-float-left'),
                        'type' => 'radio',
                        'choices' => array(
                            'button' => __('Button', 'archer'),
                            'video' => __('Video', 'archer'),
                        ),
                    )
                ),
                'choices' => array(
                    'button' => array(
                        'style' => array(
                            'label' => __('Button Style', 'archer'),
                            'desc' => __('Choose button style', 'archer'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style1.png'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style1.png'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style2.png'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style2.png'
                                    ),
                                ),
                                'download' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style3.png'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style3.png'
                                    ),
                                ),
                                'learn_more' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style4.png'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => ARCHER_IMAGES . '/image-picker/button-style4.png'
                                    ),
                                ),
                            ),
                        ),
                        'label' => array(
                            'label' => __('Button Label', 'archer'),
                            'desc' => __('This is the text that appears on your button', 'archer'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'link' => array(
                            'label' => __('Button Link', 'archer'),
                            'desc' => __('Where should your button link to', 'archer'),
                            'type' => 'text',
                            'value' => '#'
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
                        'letter_case' => array(
                            'label' => __('Letter Case', 'archer'),
                            'desc' => __('Choose a lettercase for your button text', 'archer'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'archer'),
                                'capitalize' => __('Capitalize', 'archer'),
                                'lowercase' => __('Lowercase', 'archer'),
                            )
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'new-icon',
                                    'label' => __('Icon', 'archer')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'archer'),
                                    'desc' => __('Choose the icon position', 'archer'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'archer'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'archer'),
                                    ),
                                ),
                            )
                        )
                    ),
                    'video' => array(
                        'title' => array(
                            'label' => __('Title', 'archer'),
                            'desc' => __('Type your videos title', 'archer'),
                            'type' => 'text',
                            'value' => 'Take a product tour',
                        ),
                        'video_url' => array(
                            'label' => __('Video URL', 'archer'),
                            'desc' => __('Insert your favorite video URL', 'archer'),
                            'type' => 'text',
                            'value' => 'https://vimeo.com/109054393',
                        )
                    ),
                ),
                'show_borders' => false,
            ),
        )
    ),
    'btn_alignment' => array(
        'label' => __('Alignment', 'archer'),
        'desc' => __('Choose button or image alignment', 'archer'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            '' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/no-align.jpg',
                    'title' => __('None', 'archer')
                ),
            ),
            'text-left' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/left-position.jpg',
                    'title' => __('Left', 'archer')
                ),
            ),
            'text-center' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/center-position.jpg',
                    'title' => __('Center', 'archer')
                ),
            ),
            'text-right' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/right-position.jpg',
                    'title' => __('Right', 'archer')
                ),
            ),
        ),
    ),
);
