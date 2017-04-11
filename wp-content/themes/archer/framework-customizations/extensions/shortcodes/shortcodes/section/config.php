<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
        'tab' => __('Layout Elements', 'archer'),
        'title' => __('Section', 'archer'),
        'description' => __('Add a Section', 'archer'),
        'popup_size' => 'medium',
        'title_template' => '{{-title}}{{ if (o.section_title) { }} : <strong>{{= o.section_title}}</strong>{{ } }}',
        
        'type' => 'section' // WARNING: Do not edit this
    ),
);
