<?php if (!defined('FW')) die('Forbidden'); ?>

<div class="cta-form cta-dark">
    <div class="row">
        <div class="col-sm-8 col-md-5 center-block">
            <?php
           if (class_exists('Caldera_Forms')) {
            $newsletter = $atts['form_shortcode'];
            echo do_shortcode($newsletter);
           }
            ?>
        </div>
    </div>

</div>


