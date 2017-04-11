<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'testimonials' => array(
        'label' => __('Testimonials', 'archer'),
        'popup-title' => __('Add/Edit Testimonial', 'archer'),
        'desc' => __('Here you can add, remove and edit your Testimonials.', 'archer'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Testimonal',
        'template' => '{{=author_name}}',
        'popup-options' => array(
            'image' => array(
                'label' => __('Photo', 'archer'),
                'desc' => __('Upload your favorite photo', 'archer'),
                'type' => 'upload',
            ),
            'content' => array(
                'label' => __('Quote', 'archer'),
                'desc' => __('Enter the testimonial here', 'archer'),
                'type' => 'textarea',
                'teeny' => true
            ),
            'author_name' => array(
                'label' => __('Name', 'archer'),
                'desc' => __('Enter the Name of the Person', 'archer'),
                'type' => 'text'
            ),
            'author_title' => array(
                'label' => __('Title', 'archer'),
                'desc' => __('Enter the Address of the Person', 'archer'),
                'type' => 'text'
            ),
        )
    ),
);
