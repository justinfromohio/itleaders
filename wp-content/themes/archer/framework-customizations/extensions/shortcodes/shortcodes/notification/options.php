<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'archer'),
        'desc' => __('Select the notification type', 'archer'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'archer')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'archer')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'archer')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => ARCHER_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'archer')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'archer'),
        'desc' => __('Notification message', 'archer'),
        'type' => 'text',
        'value' => __('Message!', 'archer'),
    ),
);
