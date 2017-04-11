<?php if (!defined('FW')) die('Forbidden'); ?>


<?php
$icon = $before_btn = $after_btn = '';
$btn_alignment = $atts['btn_alignment'];


    $before_btn = '<div class="'. $btn_alignment .'">';
    $after_btn = '</div>';

?>

<?php echo $before_btn; ?> 
<?php foreach ($atts['button_settings'] as $btn): ?>

    <?php $style = $btn['tab_item']['selected_value']; ?>

    <?php
    $label = $btn['tab_item']['button']['label'];
    $link = $btn['tab_item']['button']['link'];
    $target = $btn['tab_item']['button']['target'];
    $btn_style = $btn['tab_item']['button']['style'];
    $letter_case = $btn['tab_item']['button']['letter_case'];
    ?>

    <?php
    if ($btn['tab_item']['button']['icon'] != '') {
        $icon_position = $btn['tab_item']['button']['icon_position'];
        $icon = '<i class="' . $btn['tab_item']['button']['icon_position'] . ' ' . $btn['tab_item']['button']['icon'] . '"></i>';
    }
    ?>

    <?php if ($style == 'button'): ?>
        <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($label); ?></a>
    <?php endif; ?>


    <?php
    $video_url = $btn['tab_item']['video']['video_url'];
    $video_title = $btn['tab_item']['video']['title'];
    ?>

    <?php if ($style == 'video'): ?>
        <div class="video-play-btn">
            <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
        </div>
    <?php endif; ?>

<?php endforeach; ?>

<?php echo $after_btn; ?>
