<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'archer'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'archer'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'archer'),
        'desc' => __('Video width in pixels', 'archer'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'archer'),
        'desc' => __('Video height in pixels', 'archer'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'archer'),
        'desc' => __('Add a border to your video?', 'archer'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'archer'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'archer'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'archer'),
        'value' => '',
    ),
);
