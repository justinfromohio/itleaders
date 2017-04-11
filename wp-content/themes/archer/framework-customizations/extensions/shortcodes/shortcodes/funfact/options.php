<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'funfact' => array(
        'type' => 'addable-popup',
        'label' => __('Add Funfact Item', 'archer'),
        'desc' => __(' Use maximum 4 in one row.', 'archer'),
        'template' => '{{-title}}',
        'limit' => 4,
        'add-button-text' => __('Add Item', 'archer'),
        'popup-options' => array(
            'icon' => array(
                'label' => __('Funfact Icon', 'archer'),
                'type' => 'new-icon',
                'value' => 'fa fa-users',
            ),
            'counter_text' => array(
                'type' => 'fw-multi-inline',
                'label' => __('Funtact Counter', 'archer'),
                'desc' => __('This is the space between the element and the surrounding elements.', 'archer'),
                'value' => array(
                    'number' => '50',
                    'unit' => 'K+',
                ),
                'fw_multi_options' => array(
                    'number' => array(
                        'type' => 'short-text',
                        'title' => __('Number', 'archer'),
                        'value' => '50'
                    ),
                    'unit' => array(
                        'type' => 'short-text',
                        'title' => __('Unit', 'archer'),
                        'value' => 'K+'
                    ),
                )
            ),
            'title' => array(
                'label' => __('Funfact Title', 'archer'),
                'desc' => __('Add FunFact Title', 'archer'),
                'type' => 'text',
                'value' => 'Members',
            ),
        ),
    ),
);
