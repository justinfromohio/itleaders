<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'form_shortcode' => array(
        'type' => 'text',
        'label' => __('Form Shortcode', 'archer'),
        'desc' => __('Genarate a shortcode from calerda form. ', 'archer'),
        'value' => __('[caldera_form id="CF574aee44dad93"]', 'archer'),
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css.', 'archer'),
    ),
);
