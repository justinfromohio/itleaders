<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'faqs' => array(
        'type' => 'addable-popup',
        'limit' => '4',
        'label' => 'FAQ',
        'desc' => 'Add FAQ item',
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'type' => 'text',
                'label' => __('Title', 'archer'),
            ),
            'content' => array(
                'label' => __('Description', 'archer'),
                'desc' => __('Enter the FAQ description', 'archer'),
                'type' => 'textarea',
            ),
        ),
    ),
);
