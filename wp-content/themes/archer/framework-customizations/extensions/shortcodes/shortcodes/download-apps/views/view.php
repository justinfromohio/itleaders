<?php
if (!defined('FW')) {
    die('Forbidden');
}

$download = $atts['download'];
$download_style = $download['download_style'];

$downloads_one = $download['download-1'];
$downloads_two = $download['download-2'];
?>

<?php if ($download_style == 'download-1'): ?>
    <div class="app-download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-2 text-left">
                    <?php if (!empty($atts['title'])) { ?>
                    <h2 class="text-white"><span class="text-white"><?php echo $atts['title']; ?></span><?php echo $atts['subtitle']; ?></h2>
                    <?php } ?>

                    <div class="app-store-btn">
                        <?php foreach ($downloads_one['apps'] as $button): ?>
                            <?php if ($button): ?>
                                <a target="_blank" href="<?php echo esc_url($button['link']) ?>"> <img src="<?php echo esc_url($button['image']['url']) ?>" alt="<?php echo $button['title']; ?>"></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php if ($download_style == 'download-2'): ?>
    <div class="app-download">
        <div class="container">
            <header class="section-header text-center">
                <?php if (!empty($atts['title'])) { ?>
                    <h2><?php echo wp_kses_post($atts['title']); ?></h2>
                <?php } ?>

                <?php if (!empty($atts['subtitle'])) { ?>
                    <h3><?php echo wp_kses_post($atts['subtitle']); ?></h3>
                <?php } ?>

            </header>
            <div class="row">
                <div class="col-md-12">
                    <div class="app-download-slider owl-carousel owl-theme text-center">
                        <?php foreach ($downloads_two['sliders'] as $slider): ?>
                                <div class="item"> <img src="<?php echo esc_url($slider['image']['url']);?>" alt="<?php echo $slider['title']; ?>" class="app-download-img"> </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="app-store-btn">
                        <?php foreach ($downloads_two['apps'] as $button): ?>
                            <?php if ($button): ?>
                                <a target="_blank" href="<?php echo esc_url($button['link']) ?>"><img src="<?php echo esc_url($button['image']['url']); ?>" alt="<?php echo $button['title']; ?>"></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
 endif; 
