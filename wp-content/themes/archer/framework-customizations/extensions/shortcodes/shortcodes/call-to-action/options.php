<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'action_style' => array(
        'label' => __(' Action Style', 'archer'),
        'desc' => __('Choose button style', 'archer'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            'action_one' => array(
                'small' => array(
                    'height' => 70,
                    'src' => ARCHER_IMAGES . '/image-picker/call-to-action1.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => ARCHER_IMAGES . '/image-picker/call-to-action1.png'
                ),
            ),
            'action_two' => array(
                'small' => array(
                    'height' => 70,
                    'src' => ARCHER_IMAGES . '/image-picker/call-to-action2.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => ARCHER_IMAGES . '/image-picker/call-to-action2.png'
                ),
            ),
        ),
    ),

    'content' => array(
        'type' => 'textarea',
        'label' => __('Content', 'archer'),
        'value' => 'Signup for a 30 days free trial account no credit card required.',
        'desc' => __('Enter your content and use <b>em</b> for this style.', 'archer')
    ),
    'button_settings' => array(
        'type' => 'addable-popup',
        'label' => 'Button',
        'template' => 'Button : {{- label }}',
        'popup-options' => array(
            'style' => array(
                'label' => __('Style', 'archer'),
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
            ),
        )
    )
);
