<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<div class="attractions">
    <div class="grid">
        <div class="grid-sizer"></div>
        <?php foreach ($atts['attractions'] as $attraction) : ?>

            <div class="grid-item <?php echo esc_attr($attraction['width']) . ' ' . esc_attr($attraction['height']); ?>">
                <!--Attraction link start-->
                <div class="attraction-link">
                        <?php $large  = $attraction['largeimage'] ? $attraction['largeimage']['url'] : ''?>
                        <?php $img = $attraction['image'] ? $attraction['image']['url'] : ''?>
                    <a href="<?php echo esc_url($large); ?>" class="portfolio">
                        <div class="attraction-img">
                            <div class="the-img" style="background-image:url('<?php echo esc_url($img); ?>');"></div>
                        </div>

                    </a>
                </div>
                <!--Attraction link end-->
            </div>

        <?php endforeach; ?>
    </div>
</div>