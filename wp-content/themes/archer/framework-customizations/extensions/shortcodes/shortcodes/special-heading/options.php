<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'archer'),
        'desc' => __('Write the heading title content', 'archer'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'archer'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'color' => array(
        'type' => 'color-picker',
        'label' => __('Heading Color', 'archer'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'archer'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'archer'),
        
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'archer'),
        'desc' => __('Write the heading subtitle content', 'archer'),
    ),
    'subheading' => array(
        'type' => 'select',
        'label' => __('Sub Heading Size', 'archer'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subcolor' => array(
        'type' => 'color-picker',
        'label' => __('Heading Color', 'archer'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'archer'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'archer'),
        'value'=> '#6b777c'
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'archer'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'archer'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'archer'),
//		),
    ),
    
    'separator' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_separator' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Separator', 'archer'),
                'desc' => __('Show separator?', 'archer'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'archer'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'archer'),
                )
            ),
        ),
    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter a custom CSS class', 'archer'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'archer'),
    ),
);
