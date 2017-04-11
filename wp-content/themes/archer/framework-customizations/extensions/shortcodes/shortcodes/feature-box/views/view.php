<?php
if (!defined('FW')) {
die('Forbidden');
}

$feature = $atts['feature'];
$feature_style = $feature['feature_style'];

$features_one = $feature['feature-1'];
$features_two = $feature['feature-2'];
$features_three = $feature['feature-3'];
?>

<?php if ($feature_style == 'feature-1'): ?>
<div class="features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-center feature-bg" style="background:url(<?php echo $features_one['image']['url'] ? $features_one['image']['url'] : '' ?>) center center no-repeat;"> 
                <img src="<?php echo $features_one['image']['url'] ? $features_one['image']['url'] : '' ?>" alt="feature" class="hidden-md hidden-lg"> </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="section-spacing row-margin">
                    <header class="section-header">

                        <?php if (!empty($atts['title'])) { ?>
                        <h2><?php echo wp_kses_post($atts['title']); ?></h2>
                        <?php } ?>

                        <?php if (!empty($atts['subtitle'])) { ?>
                        <h3><?php echo wp_kses_post($atts['subtitle']); ?></h3>
                        <?php } ?>
                    </header>
                    <div class="row"> 
                        <!--features 1-->
                        <?php foreach ($features_one['iconbox'] as $item): ?>
                        <div class="col-sm-6 box-item"> 
                            <i class="<?php echo $item['icon']; ?>"></i>
                            <?php if (!empty($item['title'])) { ?>
                            <h4><?php echo $item['title']; ?></h4>
                            <?php } ?>

                            <?php if (!empty($item['content'])) { ?>
                            <p><?php echo $item['content']; ?></p>
                            <?php } ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($feature_style == 'feature-2'): ?>
<div class="features section-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-margin text-center">
                    <header class="section-header">
                        <?php if (!empty($atts['title'])) { ?>
                        <h2><?php echo wp_kses_post($atts['title']); ?></h2>
                        <?php } ?>

                        <?php if (!empty($atts['subtitle'])) { ?>
                        <h3><?php echo wp_kses_post($atts['subtitle']); ?></h3>
                        <?php } ?>
                    </header>
                    <div class="row"> 
                        <?php foreach ($features_two['iconbox'] as $item): ?>
                        <div class="col-sm-4 box-item"> 

                            <i class="<?php echo $item['icon']; ?>"></i>

                            <?php if (!empty($item['title'])) { ?>
                            <h4><?php echo $item['title']; ?></h4>
                            <?php } ?>

                            <?php if (!empty($item['content'])) { ?>
                            <p><?php echo $item['content']; ?></p>
                            <?php } ?>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if ($feature_style == 'feature-3'): ?>
<div class="features section-spacing">
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
            <div class="col-sm-3">
                <?php foreach ($features_three['feature_left'] as $item): ?>
                <div class="row"> 
                    <div class="col-sm-12 box-item text-center"> 
                        <i class="<?php echo $item['icon']; ?>"></i>

                        <?php if (!empty($item['title'])) { ?>
                        <h4><?php echo $item['title']; ?></h4>
                        <?php } ?>

                        <?php if (!empty($item['content'])) { ?>
                        <p><?php echo $item['content']; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-sm-6">
                <figure class="feature-app-img text-center">
                    <img src="<?php echo $features_three['image']['url'] ? $features_three['image']['url'] : '' ?>" alt="feature">
                </figure>
            </div>

            <div class="col-sm-3">
                <?php foreach ($features_three['feature_right'] as $item): ?>
                <div class="row"> 
                    <div class="col-sm-12 box-item text-center"> 
                        <i class="<?php echo $item['icon']; ?>"></i>

                        <?php if (!empty($item['title'])) { ?>
                        <h4><?php echo $item['title']; ?></h4>
                        <?php } ?>

                        <?php if (!empty($item['content'])) { ?>
                        <p><?php echo $item['content']; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif;