<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'partner_img' => array(
        'type' => 'addable-popup',
        'label' => __('Add partner image', 'archer'),
        'desc' => __(' Use maximum 6 in one row.', 'archer'),
        'template' => '{{- label }}',
        'limit' => 6,
        'add-button-text' => __('Add Partners', 'archer'),
        'popup-options' => array(
            'label' => array(
                'label' => __('Text', 'archer'),
                'type' => 'text',
                'desc' => __('Add your partner title.', 'archer'),
                
            ),
            'image' => array(
                'label' => __('Image', 'archer'),
                'type' => 'upload',
                'desc' => __('Add your partner image.', 'archer'),
                
            ),
            
        ),
    ),
    
);
