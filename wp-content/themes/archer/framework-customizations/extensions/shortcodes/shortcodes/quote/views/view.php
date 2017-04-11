<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="col-sm-8 col-md-7 testimonial">
    <blockquote class="<?php echo esc_attr($atts['text_align']); ?> <?php echo esc_attr($atts['class']); ?>">
        <?php echo wp_kses_post($atts['text']); ?>
        <footer> 
            <cite>
                <?php if ($atts['author'] != '') : ?>
                    <?php echo archer_theme_translate(esc_attr($atts['author'])); ?>
                <?php endif; ?>, 
                <i>
                    <?php if ($atts['position'] != '') : ?>
                        <?php echo archer_theme_translate(esc_attr($atts['position'])); ?>
                    <?php endif; ?>
                </i>
            </cite> 
        </footer>
    </blockquote>
</div>

