<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'teams' => array(
        'type' => 'addable-popup',
        'label' => __('Team Member', 'archer'),
        'desc' => __('Add team members data', 'archer'),
        'template' => '{{=name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Image', 'archer'),
                'desc' => __('Upload your team image', 'archer'),
                'type' => 'upload',
            ),
            'name' => array(
                'label' => __('Name', 'archer'),
                'desc' => __('Enter your team name', 'archer'),
                'type' => 'text',
                'value' => 'Nicole Ortega'
            ),
            'title' => array(
                'label' => __('Job Title', 'archer'),
                'desc' => __('Enter your team job title', 'archer'),
                'type' => 'text',
                'value' => 'Founder'
            ),
            'desc' => array(
                'label' => __('Description', 'archer'),
                'desc' => __('Enter team member description', 'archer'),
                'value' => 'Fusce laoreet lectus tellus, aliquam maximus magna auctor suscipit. Praesent sed lacinia lectus. Ut laoreet finibus odio quis laoreet.',
                'type' => 'textarea',
            ),
            'socials' => array(
                'type' => 'addable-popup',
                'label' => __('Social Links', 'archer'),
                'desc' => __('Add social links', 'archer'),
                'template' => '{{=name}}',
                'popup-options' => array(
                    'name' => array(
                        'label' => __('Name', 'archer'),
                        'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'archer'),
                        'type' => 'text',
                    ),
                    'icon' => array(
                        'type' => 'new-icon',
                        'value' => 'fa fa-facebook',
                        'label' => 'Icon',
                    ),
                    'link' => array(
                        'label' => __('Link', 'archer'),
                        'desc' => __('Enter your social URL link', 'archer'),
                        'type' => 'text',
                        'value' => '#',
                    ),
                    'bg' => array(
                        'label' => __('Social BG', 'archer'),
                        'desc' => __('Select your social background color', 'archer'),
                        'type' => 'color-picker',
                        'value' => '#3b5998',
                    )
                ),
            ),
        ),
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css.', 'archer'),
    ),
);
