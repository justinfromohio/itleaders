<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'homepage_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'homepage_style' => array(
                'label' => __('Homepage Style', 'archer'),
                'type' => 'image-picker',
                'value' => 'home-1',
                'desc' => __('Select Home page style.', 'archer'),
                'choices' => array(
                    'home-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style1.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style1.png'
                        ),
                    ),
                    'home-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style2.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style2.png'
                        ),
                    ),
                    'home-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style3.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style3.png'
                        ),
                    ),
                    'home-4' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style4.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style4.png'
                        ),
                    ),
                    'home-5' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style5.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style5.png'
                        ),
                    ),
                    'home-6' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style6.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style6.png'
                        ),
                    ),
                    'home-7' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style7.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style7.png'
                        ),
                    ),
                    'home-8' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style8.png'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => ARCHER_IMAGES . '/image-picker/home-style8.png'
                        ),
                    )
                ),
            ),
        ),
        'choices' => array(
            'home-1' => array(
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
                )
            ),
            'home-2' => array(
                'mailchimp' => array(
                    'type' => 'text',
                    'label' => __('Mailchimp URL', 'archer'),
                    'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'archer'),
                    'value' => 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb',
                ),
                'button_text' => array(
                    'type' => 'text',
                    'label' => __('Button Text', 'archer'),
                    'value' => __('Get Started', 'archer'),
                ),
                'error' => array(
                    'type' => 'text',
                    'label' => __('Error Message Text', 'archer'),
                    'value' => __('Please enter a value', 'archer'),
                ),
                'success' => array(
                    'type' => 'text',
                    'label' => __('Success Message Text', 'archer'),
                    'value' => __('Awesome! We have sent you a confirmation email', 'archer'),
                ),
                'condition_text' => array(
                    'type' => 'wp-editor',
                    'label' => __('Terms & Condition Text', 'archer'),
                    'value' => __('By signing up you agree to our terms', 'archer'),
                )
            ),
            'home-3' => array(
                'benifit_list' => array(
                    'type' => 'addable-option',
                    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                    'label' => __('Benifit List', 'archer'),
                    'desc' => __('Add your product benifits list one by one', 'archer'),
                    'option' => array('type' => 'text', 'value' => __('Pellentesque varius finibus condimentum', 'archer')),
                    'add-button-text' => __('Add', 'archer'),
                    'sortable' => true,
                ),
                'video_url' => array(
                    'label' => __('Video URL', 'archer'),
                    'desc' => __('Insert your favorite video URL', 'archer'),
                    'type' => 'text',
                    'value' => 'http://www.youtube.com/embed/ofI0kpdKAIk?rel=0&amp;showinfo=0&amp;controls=0&amp;iv_load_policy=3',
                ),
                'mailchimp' => array(
                    'type' => 'text',
                    'label' => __('Mailchimp URL', 'archer'),
                    'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'archer'),
                    'value' => 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb',
                ),
                'button_text' => array(
                    'type' => 'text',
                    'label' => __('Button Text', 'archer'),
                    'value' => __('Get Started', 'archer'),
                ),
                'form_top_txt' => array(
                    'type' => 'text',
                    'label' => __('Form Top Text', 'archer'),
                    'value' => __('Enter your email address below and join the waiting list', 'archer'),
                ),
                'error' => array(
                    'type' => 'text',
                    'label' => __('Error Message Text', 'archer'),
                    'value' => __('Please enter a value', 'archer'),
                ),
                'success' => array(
                    'type' => 'text',
                    'label' => __('Success Message Text', 'archer'),
                    'value' => __('Awesome! We have sent you a confirmation email', 'archer'),
                ),
                'condition_text' => array(
                    'type' => 'wp-editor',
                    'label' => __('Terms & Condition Text', 'archer'),
                    'value' => __('By signing up you agree to our terms', 'archer'),
                ),
            ),
            'home-4' => array(
                'image' => array(
                    'type' => 'upload',
                    'label' => __('Featured Image', 'archer'),
                    'desc' => __('Upload your featured image', 'archer'),
                ),
                'feature_list' => array(
                    'type' => 'addable-popup',
                    'size' => 'medium',
                    'label' => __('Feature Item', 'archer'),
                    'desc' => __('Add your feature item', 'archer'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'icon' => array(
                            'label' => __('Icon', 'archer'),
                            'desc' => __('Choose your feature item icon', 'archer'),
                            'type' => 'new-icon'
                        ),
                        'title' => array(
                            'label' => __('Title', 'archer'),
                            'desc' => __('Type your feature item title', 'archer'),
                            'type' => 'text',
                            'value' => 'Pellentesque varius',
                        ),
                        'content' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Type your feature items description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        )
                    ),
                ),
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
                )
            ),
            'home-5' => array(
                'button_settings' => array(
                    'type' => 'addable-popup',
                    'label' => __('Button', 'archer'),
                    'desc' => __('Create Your Favorite Simple Button', 'archer'),
                    'size' => 'medium',
                    'template' => '{{- label }}',
                    'popup-options' => array(
                        'label' => array(
                            'label' => __('Button Title', 'archer'),
                            'desc' => __('Add Your Favorite Simple Button or Video Button', 'archer'),
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
            ),
            'home-6' => array(
                'form_shortcode' => array(
                    'type' => 'text',
                    'label' => __('Form shortcode', 'archer'),
                    'desc' => __('Genarate a shortcode from calerda form. ', 'archer'),
                    'value' => __('[caldera_form id="CF57a642b8f06bb"]', 'archer'),
                ),
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
            ),
            'home-7' => array(
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
                'image' => array(
                    'label' => __('Feature Image', 'archer'),
                    'desc' => __('Uplod your feature image', 'archer'),
                    'type' => 'upload'
                ),
                'pointer' => array(
                    'type' => 'addable-popup',
                    'label' => __('Image Pointer', 'archer'),
                    'desc' => __('Add image pointer', 'archer'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'archer'),
                            'desc' => __('Enter your tooltip title', 'archer'),
                            'type' => 'text',
                            'value' => 'Feature Title',
                        ),
                        'desc' => array(
                            'label' => __('Description', 'archer'),
                            'desc' => __('Enter your tooltip description', 'archer'),
                            'type' => 'textarea',
                            'value' => 'Fusce finibus condimentum purus. Sed sagittis erat sed posuere cursus.',
                        ),
                        'top' => array(
                            'type' => 'slider',
                            'value' => 40,
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => __('Top', 'archer'),
                            'desc' => __('How top your feature pointer position (<b>Ex:</b> 20%)', 'archer'),
                            'help' => __('Drag your pointer range that How top your feature pointer position & it should be counted by percentage(%)', 'archer'),
                        ),
                        'left' => array(
                            'type' => 'slider',
                            'value' => 14,
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => __('Left', 'archer'),
                            'desc' => __('How left your feature pointer position (<b>Ex:</b> 30%)', 'archer'),
                            'help' => __('Drag your pointer range that How left your feature pointer position & it should be counted by percentage(%)', 'archer'),
                        ),
                    ),
                )
            ),
            'home-8' => array(
                'image' => array(
                    'label' => __('Right Apps Image', 'archer'),
                    'desc' => __('Uplod your right apps image', 'archer'),
                    'type' => 'upload'
                ),
                'socials' => array(
                    'type' => 'addable-popup',
                    'label' => __('Home Top Social', 'archer'),
                    'desc' => __('Add Home Top Socials Icon', 'archer'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'archer'),
                            'desc' => __('Enter your social title', 'archer'),
                            'type' => 'text',
                            'value' => 'Share',
                        ),
                        'icon' => array(
                            'label' => __('Icon', 'archer'),
                            'desc' => __('Select your social icon', 'archer'),
                            'type' => 'new-icon',
                            'value' => 'fa fa-facebook',
                        ),
                        'link' => array(
                            'label' => __('Link', 'archer'),
                            'desc' => __('Input your social share link', 'archer'),
                            'type' => 'text',
                            'value' => '#',
                        ),
                    ),
                ),
                'apps' => array(
                    'type' => 'addable-popup',
                    'label' => __('Home Apps Image', 'archer'),
                    'desc' => __('Add Home Apps Image', 'archer'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'archer'),
                            'desc' => __('Enter your social title', 'archer'),
                            'type' => 'text',
                            'value' => 'Apps Image 1',
                        ),
                        'image' => array(
                            'label' => __('Image', 'archer'),
                            'desc' => __('Upload your favorite apps image', 'archer'),
                            'type' => 'upload'
                        ),
                        'link' => array(
                            'label' => __('Image Link', 'archer'),
                            'desc' => __('Input your apps image link', 'archer'),
                            'type' => 'text',
                            'value' => '#',
                        ),
                    ),
                ),
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
            )
        ),
        'show_borders' => false,
    ),
    'title' => array(
        'label' => __('Home Main Title', 'archer'),
        'type' => 'text',
        'value' => 'Landing page for your product or service',
        'desc' => __('Type Your Homepage Title', 'archer'),
    ),
    'subtitle' => array(
        'label' => __('Home Sub Title', 'archer'),
        'type' => 'textarea',
        'value' => 'Use this template to promote and describe the benefits of your product.',
        'desc' => __('Type Your Homepage Title', 'archer'),
    )
);
