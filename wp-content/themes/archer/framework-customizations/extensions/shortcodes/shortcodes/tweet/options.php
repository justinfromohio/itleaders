<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'twitter' => array(
        'type' => 'addable-option',
        'label' => __('Twitter Status Link', 'archer'),
        'desc' => __('Add twitter status URL. you can check this how to get twitter status URL <b>http://bit.ly/1TL8XIL</b>', 'archer'),
        'option' => array('type' => 'text', 'value' => 'https://twitter.com/ChromiumDev/status/697415335172030464'),
        'add-button-text' => __('Add Status Link', 'archer'),
        'sortable' => true,
    )
);
