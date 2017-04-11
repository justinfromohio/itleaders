<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'archer'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'archer')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'archer'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'archer'),
        'desc' => __('Top and bottom spacing of this section', 'archer'),
        'value' => 'sections',
        'choices' => array(
            'sections' => __('Default Spacing', 'archer'),
            'min-spacing' => __('Min Spacing', 'archer'),
            'no-spacing' => __('No Spacing', 'archer'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'archer'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", "archer"),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'archer'),
            'fw-section-height-sm' => __('small', 'archer'),
            'fw-section-height-md' => __('medium', 'archer'),
            'fw-section-height-lg' => __('large', 'archer'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'archer'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'archer'),
                'desc' => __('Select the background for your section', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'archer'),
                    'color' => __('Color', 'archer'),
                    'image' => __('Image', 'archer'),
                    'video' => __('Video', 'archer'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'archer'),
                    'desc' => __('Select the background color', 'archer'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'archer'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'tab_item' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'selected_value' => array(
                            'label' => __('Overlay', 'bt'),
                            'desc' => __('Select the tab type', 'bt'),
                            'attr' => array('class' => 'fw-checkbox-float-left'),
                            'value' => 'overlay11',
                            'type' => 'radio',
                            'choices' => array(
                                'overlay11' => __('Overlay', 'bt'),
                                'gradient11' => __('Gradient', 'bt'),
                            ),
                        )
                    ),
                    'choices' => array(
                        'overlay11' => array(
                            'background' => array(
                                'label' => __('', 'bt'),
                                'desc' => __('Select the overlay color', 'bt'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                       
                    ),
                    'show_borders' => false,
                )
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'archer'),
                    'desc' => __('Insert a YouTube video URL', 'archer'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'archer'),
                            'desc' => __('Enable video overlay color?', 'archer'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'archer'),
                                'desc' => __('Select the overlay color', 'archer'),
                                'value' => 'rgba(0,0,0,0.25)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'value' => '',
    ),
);
