<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => esc_html__('Blog Settings', 'archer'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => esc_html__('Posts Header', 'archer'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => esc_html__('Header Image', 'archer'),
                                        'desc' => esc_html__('Upload a header image', 'archer'),
                                        'help' => esc_html__("This default header image will be used for all your posts.", "archer"),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => esc_html__('', 'archer'),
                                        'desc' => esc_html__('Select the image overlay color', 'archer'),
                                        'help' => esc_html__('', 'archer'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
            'blog' => array(
                'title' => esc_html__('Blog Settings', 'archer'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => esc_html__('Post Date', 'archer'),
                                'desc' => esc_html__('Show post date?', 'archer'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'archer')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'archer')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => esc_html__('Post Author', 'archer'),
                                'desc' => esc_html__('Show post author?', 'archer'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'archer')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'archer')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => esc_html__('Post Categories', 'archer'),
                                'desc' => esc_html__('Show post categories?', 'archer'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'archer')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'archer')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => esc_html__('Post Comment', 'archer'),
                                'desc' => esc_html__('Show post Comment?', 'archer'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'archer')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'archer')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
