<?php
if (!defined('FW')) {
    die('Forbidden');
}

$icon = $before_btn = $after_btn = '';

if (isset($btn) && $btn != '') {
    $before_btn = '<div class="' . $btn . '">';
    $after_btn = '</div>';
}
?>


<?php
$action_style = $atts['action_style'];
$content = $atts['content'];

if ($action_style == 'action_one') :
    ?>
    <div class="col-md-8 center-block text-center cta">
        <h2><?php echo $content; ?></h2>

        <?php echo $before_btn; ?> 
        <?php
        foreach ($atts['button_settings'] as $btn):
            if ($btn['icon'] != '') {
                $icon_position = $btn['icon_position'];
                $icon = '<i class="' . $btn['icon_position'] . ' ' . $btn['icon'] . '"></i>';
            }
            ?>

            <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="<?php archer_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['label']); ?></a>
            <?php
        endforeach;
        echo $after_btn;
        ?>

        <!--<a href="#cta-form" class="btn">Get Started</a>-->
    </div>
    <?php
endif;
if ($action_style == 'action_two') :
    ?>

    <div class="cta-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $content; ?>
                        <?php echo $before_btn; ?> 
                        <?php
                        foreach ($atts['button_settings'] as $btn):
                            if ($btn['icon'] != '') {
                                $icon_position = $btn['icon_position'];
                                $icon = '<i class="' . $btn['icon_position'] . ' ' . $btn['icon'] . '"></i>';
                            }
                            ?>

                            <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="btn <?php archer_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['label']); ?></a>
                            <?php
                        endforeach;
                        echo $after_btn;
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>