<?php
if (!defined('FW')) {
    die('Forbidden');
}


$video = $atts['video'];
$left = $atts['left_text'];
$right = $atts['right_text'];
$class = $atts['class'];
?>
<?php if (!empty($video)): ?>
    <div class="video-tour text-center <?php echo $class; ?>">
        <h2>
            <em><?php echo esc_attr($left); ?></em>
            <?php if (!empty($video)) { ?>
                <a href="<?php echo esc_attr($video); ?>" class="play-btn"> <i class="fa fa-play fa-2x"></i></a>
                <?php } ?>
            <span>
                <?php echo esc_attr($right); ?>
            </span>
        </h2>
    </div>
<?php endif; ?>
