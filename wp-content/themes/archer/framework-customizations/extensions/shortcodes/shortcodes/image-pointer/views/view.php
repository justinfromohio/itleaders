<?php if (!defined('FW')) die('Forbidden'); ?>

<?php $pointer = $atts['pointer']; ?>

<div class="col-md-10 center-block">
    <figure class="new-feature-img text-center"> 
        <?php
        foreach ($pointer as $point):
            $title = $point['title'];
            $desc = $point['desc'];
            $point['top'] = (int) $point['top'];
            $point['left'] = (int) $point['left'];

            if ($point['top'] != 0 || $point['left'] != 0) {
                $style = 'style="top: ' . $point['top'] . '% ;left: ' . $point['left'] . '% "';
            }
            ?>
            <a class="pointer" <?php echo $style; ?> data-toggle="popover" title="<?php echo $title; ?>" data-content="<?php echo $desc; ?>"> <span class="plus"><i class="fa fa-plus"></i></span> <span class="minus"><i class="fa fa-minus"></i></span></a> 
                <?php endforeach; ?>
                <?php if (!empty($atts['image'])) { ?>
            <img src="<?php echo $atts['image']['url']; ?>" alt="app"> 
        <?php } ?>
    </figure>
</div>






