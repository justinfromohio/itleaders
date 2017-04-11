<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'archer'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'archer'),
        'type' => 'text',
        'value' => 'https://vimeo.com/109054393'
    ),
   
    'left_text' => array(
        'label' => __('Left Text', 'archer'),
        'desc' => __('Enter Left Text', 'archer'),
        'type' => 'text',
        'value' => 'Cant decide?'
    ),
    'right_text' => array(
        'label' => __('Right Text', 'archer'),
        'desc' => __('Enter Right Text', 'archer'),
        'type' => 'text',
        'value' => 'Take a tour'
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
