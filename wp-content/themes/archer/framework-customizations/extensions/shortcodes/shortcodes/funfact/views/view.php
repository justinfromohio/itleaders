<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$funfact = $atts['funfact'];
?>

<div class="center-block">
    <ul class="product-statistics text-center">
        <?php foreach ($funfact as $item): ?>
            <li class="col-sm-3"> <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                <h3>
                    <?php 
                    $counter = $item['counter_text'];
                    if (!empty($counter)) { ?>
                    <?php
                    $number = $counter['number'] ? $counter['number'] : '';
                    $unit = $counter['unit'] ? $counter['unit'] : '';
                    ?>
                    <span class="count"><?php echo esc_attr($number); ?></span><?php echo esc_attr($unit); ?>
                    <?php }?>
                    
                    <?php if ($item['title']) { ?>
                    <span class="statistics-achieved"><?php echo esc_attr($item['title']); ?></span>
                    <?php } ?>
                </h3>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

