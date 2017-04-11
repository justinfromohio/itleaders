<?php
if (!defined('FW'))
    die('Forbidden');
/**
 * @var $atts
 */
$sep = $atts['separator'];
?>

<div class="fw-heading heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo!empty($atts['centered']) ? 'fw-heading-center' : ''; ?>  <?php echo esc_attr($atts['class']); ?> wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s">
    <?php
    $title_color = " style='color: {$atts['color']}'";
    $title = "<{$atts['heading']} class='fw-special-title' $title_color>{$atts['title']}</{$atts['heading']}>";
    $heading = $atts['title'] ? $title : '';
    ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-title-half' : ''; ?>"><?php echo $heading; ?></div>

    <?php if (!empty($atts['subtitle'])): ?>
        <?php
        $subtitle_color = " style='color: {$atts['subcolor']}'";
        $subheading = "<{$atts['subheading']} class='fw-special-subtitle' $subtitle_color>{$atts['subtitle']}</{$atts['subheading']}>"; ?>
        <div class="<?php echo empty($atts['centered']) ? 'fw-special-subtitle-half' : ''; ?>"><?php echo $subheading; ?></div>
    <?php endif; ?>

    <?php
    if ($sep['show_separator'] == 'yes') :
        ?>
        <div class="separator_wrap<?php echo empty($atts['centered']) ? '-left' : ''; ?>"> <div class="separator2"></div></div>
        <?php endif; ?>


</div>