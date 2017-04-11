<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'archer'),
                'desc' => __('Add list items', 'archer'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'archer'),
                                'desc' => __('Enter an item in list', 'archer'),
                                'type' => 'text',
                            ),
                            'sublist_items' => array(
                                'type' => 'addable-popup',
                                'label' => __('Sublist Items', 'archer'),
                                'desc' => __('Add sublist items', 'archer'),
                                'template' => '{{=subitem}}',
                                'popup-options' => array(
                                    'subitem' => array(
                                        'label' => __('Sublist Item', 'archer'),
                                        'desc' => __('Enter a sublist item', 'archer'),
                                        'type' => 'text',
                                    ),
                                    'btn_link_group' => array(
                                        'type' => 'group',
                                        'options' => array(
                                            'link' => array(
                                                'label' => __('Link', 'archer'),
                                                'desc' => __('you can add link if you want', 'archer'),
                                                'type' => 'text',
                                            ),
                                            'target_subitem' => array(
                                                'type' => 'switch',
                                                'label' => __('', 'archer'),
                                                'desc' => __('Open link in new window?', 'archer'),
                                                'value' => '_self',
                                                'right-choice' => array(
                                                    'value' => '_blank',
                                                    'label' => __('Yes', 'archer'),
                                                ),
                                                'left-choice' => array(
                                                    'value' => '_self',
                                                    'label' => __('No', 'archer'),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'archer'),
                                'desc' => __('you can add link if you want', 'archer'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'archer'),
                                'desc' => __('Open link in new window?', 'archer'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'archer'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'archer'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'archer'),
                'desc' => __('Separate each list item by a line?', 'archer'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'archer'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'archer'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'archer'),
                'desc' => __('Make a numbered list or add an icon to list items', 'archer'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'archer'),
                    'list-numbers' => __('Number', 'archer'),
                    'list-icon' => __('Icon', 'archer'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'archer')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'archer'),
        'desc' => __('Enter custom CSS class', 'archer'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'archer'),
    ),
);
