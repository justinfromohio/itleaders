<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'works' => array(
        'type' => 'addable-popup',
        'label' => __('Works', 'archer'),
        'popup-title' => __('Add/Edit Works', 'archer'),
        'desc' => __('Add Works Item', 'archer'),
        'template' => '{{=title}}',
        'size' => 'large',
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'archer'),
                'desc' => __('Enter Works Title', 'archer'),
                'value' => 'Planning'
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => __('Description', 'archer'),
                'desc' => __('Enter Works Description', 'archer'),
                'value' => 'Duis suscipit, eros vel tincidunt mollis, sapien ligula mollismi, ac hendrerit ante tellus sit amet eros.'
            ),
            'image' => array(
                'type' => 'upload',
                'label' => __('Image', 'archer'),
                'desc' => __('Upload works image & image size should be 200*150(Ex: px)', 'archer'),
            ),
        )
    ),
);
