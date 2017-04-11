<?php
if (!defined('FW'))
    die('Forbidden');


$twitter = $atts['twitter'];


?>


<div class="twitter-reviews-slider owl-carousel owl-theme">
    <?php foreach ($twitter as $twieet) {?>
        <div class="item"> 
            <?php if (!empty($twieet)) { ?>
                <blockquote class="twitter-tweet" data-cards="hidden" data-lang="en">
                    <a href="<?php echo esc_attr($twieet);?>"></a>
                </blockquote>
            <?php } ?>
        </div>  
    <?php } ?>
</div>