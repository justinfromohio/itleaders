<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'mailchimp_title' => array(
        'label' => __('Mailchimp Title', 'archer'),
        'type' => 'text',
        'value' => 'Subscribe',
        'desc' => __('Enter your mailchimp title', 'archer'),
    ),
    'mailchimp_subtitle' => array(
        'label' => __('Mailchimp SubTitle', 'archer'),
        'type' => 'text',
        'value' => 'Get news delivered directly to your inbox.',
        'desc' => __('Enter your mailchimp subtitle', 'archer'),
    ),
    'mailchimp' => array(
        'label' => __('Mailchimp URL', 'archer'),
        'type' => 'text',
        'value' => 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb',
        'desc' => __('Enter the mailchimp url', 'archer'),
    ),
    'mailchimp_terms' => array(
        'label' => __('Mailchimp Terms Text', 'archer'),
        'type' => 'wp-editor',
        'value' => 'By signing up you agree to our terms.',
    ),
    'twitter_username' => array(
        'type' => 'text',
        'label' => __('Twitter Username', 'archer'),
        'value' => '@envato',
    ),
    'twitter_user_id' => array(
        'type' => 'text',
        'label' => __('Twitter ID', 'archer'),
        'value' => '644499500418117632',
        'desc' => '<p>You can create your own Twitter user ID <b><i>URL : http://bit.ly/1VXXo2N</i></b></p>',
    ),
    'twitter_link' => array(
        'type' => 'text',
        'label' => __('Twitter Link', 'archer'),
        'value' => '#',
    ),
);
