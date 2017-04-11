<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'type' => array(
        'label' => __('Type', 'archer'),
        'desc' => __('Select divider type', 'archer'),
        'type' => 'image-picker',
        'value' => 'fw-line-solid',
        'choices' => array(
            'fw-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'archer')
                ),
            ),
            'fw-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'archer')
                ),
            ),
            'fw-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'archer')
                ),
            ),
            'fw-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'archer')
                ),
            ),
            'fw-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'archer')
                ),
            ),
            'fw-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'archer')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'archer'),
                'desc' => __('Select the top and bottom margin in px', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'archer'),
                    'space-md' => __('Medium', 'archer'),
                    'space-lg' => __('Large', 'archer'),
                    'custom' => __('Custom', 'archer'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'archer'),
                    'desc' => __('Enter margin-top in px', 'archer'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'archer'),
                    'attr' => array('class' => 'fw-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'archer'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'archer'),
        'desc' => __('Select the width size in %', 'archer'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'archer'),
            '50' => __('50%', 'archer'),
            '100' => __('100%', 'archer'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'archer'),
        'desc' => __('Select divider color', 'archer'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'archer'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'archer'),
                    'text' => __('Text', 'archer'),
                    'icon' => __('Icon', 'archer'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'archer'),
                    'desc' => __('This text will be displayed on the divider', 'archer'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'archer'),
                    'desc' => __('Select the text color', 'archer'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'archer'),
                    'desc' => __('Add a background to your text?', 'archer'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'archer'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'archer'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'archer'),
                    'desc' => __('Select text position', 'archer'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'archer')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'archer')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'archer')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'archer'),
                    'desc' => __('Select divider size', 'archer'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'archer'),
                        'fw-divider-size-md' => __('Medium', 'archer'),
                        'fw-divider-size-lg' => __('Large', 'archer'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'archer')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'archer'),
                    'desc' => __('Select the icon color', 'archer'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'archer'),
                    'desc' => __('Select icon position', 'archer'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'archer')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'archer')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => ARCHER_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'archer')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'archer'),
                    'desc' => __('Select divider size', 'archer'),
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'fw-divider-size-md',
                    'choices' => array(
                        'fw-divider-size-sm' => __('Small', 'archer'),
                        'fw-divider-size-md' => __('Medium', 'archer'),
                        'fw-divider-size-lg' => __('Large', 'archer'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'archer'),
        'desc' => __('Enter a custom CSS id for this divider', 'archer'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'archer')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'archer'),
        'type' => 'text',
        'value' => '',
    ),
);
