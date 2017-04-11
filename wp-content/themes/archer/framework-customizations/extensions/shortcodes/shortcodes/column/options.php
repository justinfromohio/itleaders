<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'archer'),
        'desc' => __('Use default left and right spacing?', 'archer'),
        'help' => __("Default left and right spacings are set to 15px", "archer"),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'archer'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'archer'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'archer'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'archer'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'archer'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'archer'),
                'type' => 'short-text',
                'value' => '0',
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
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'archer'),
                'desc' => __('Select the background for your column', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'archer'),
                    'image' => __('Image', 'archer'),
                    'bgcolor' => __('Color', 'archer'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'archer'),
                    'help' => __('', 'archer'),
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
                'repeat' => array(
                    'label' => __('', 'archer'),
                    'desc' => __('Select how will the background repeat', 'archer'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'archer'),
                        'repeat' => __('Repeat', 'archer'),
                        'repeat-x' => __('Repeat-X', 'archer'),
                        'repeat-y' => __('Repeat-Y', 'archer'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'archer'),
                    'desc' => __('Select the horizontal background position', 'archer'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'archer'),
                        'center' => __('Center', 'archer'),
                        'right' => __('Right', 'archer'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'archer'),
                    'desc' => __('Select the vertical background position', 'archer'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'archer'),
                        'center' => __('Center', 'archer'),
                        'bottom' => __('Bottom', 'archer'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'archer'),
                    'desc' => __('Select the background size', 'archer'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'archer'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'archer'),
                        'cover' => __('Cover', 'archer'),
                        'contain' => __('Contain', 'archer'),
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'archer'),
                            'desc' => __('Enable image overlay color?', 'archer'),
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
                                'help' => __('', 'archer'),
                                'desc' => __('Select the overlay color', 'archer'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'archer'),
                    'help' => __('', 'archer'),
                    'desc' => __('Select the background color', 'archer'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'archer'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'archer'),
        'desc' => __('Select the alignment for your column', 'archer'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'none' => __('None', 'archer'),
            'text-left' => __('Left', 'archer'),
            'text-center' => __('Center', 'archer'),
            'text-right' => __('Right', 'archer'),
        ),
        'value' => 'none'
    ),
    'animation' => array(
        'label' => __('Animation', 'archer'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'archer'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'archer'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'archer'),
                    'bounce' => __('bounce', 'archer'),
                    'flash' => __('flash', 'archer'),
                    'pulse' => __('pulse', 'archer'),
                    'rubberBand' => __('rubberBand', 'archer'),
                    'shake' => __('shake', 'archer'),
                    'swing' => __('swing', 'archer'),
                    'tada' => __('tada', 'archer'),
                    'wobble' => __('wobble', 'archer'),
                    'jello' => __('jello', 'archer'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'archer'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'archer'),
                    'bounceInDown' => __('bounceInDown', 'archer'),
                    'bounceInLeft' => __('bounceInLeft', 'archer'),
                    'bounceInRight' => __('bounceInRight', 'archer'),
                    'bounceInUp' => __('bounceInUp', 'archer'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'archer'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'archer'),
                    'fadeInDown' => __('fadeInDown', 'archer'),
                    'fadeInLeft' => __('fadeInLeft', 'archer'),
                    'fadeInRight' => __('fadeInRight', 'archer'),
                    'fadeInUp' => __('fadeInUp', 'archer'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'archer'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'archer'),
                    'flipInX' => __('flipInX', 'archer'),
                    'flipInY' => __('flipInY', 'archer'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'archer'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'archer'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'archer'),
                    'rotateInDownRight' => __('rotateInDownRight', 'archer'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'archer'),
                    'rotateInUpRight' => __('rotateInUpRight', 'archer'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'archer'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'archer'),
                    'zoomInDown' => __('zoomInDown', 'archer'),
                    'zoomInLeft' => __('zoomInLeft', 'archer'),
                    'zoomInRight' => __('zoomInRight', 'archer'),
                    'zoomInUp' => __('zoomInUp', 'archer'),
                    'hinge' => __('hinge', 'archer'),
                    'rollIn' => __('rollIn', 'archer'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'archer'),
        'desc' => __('Choose the responsive tablet display for this column', 'archer'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'archer'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'archer'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'archer'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'archer'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'archer'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'archer'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'archer'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'archer'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'archer'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'archer'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'archer'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'archer'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'archer'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'archer'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'archer'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'archer'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'archer'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'archer'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'archer'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'archer'),
        'type' => 'text',
        'value' => '',
    ),
);
