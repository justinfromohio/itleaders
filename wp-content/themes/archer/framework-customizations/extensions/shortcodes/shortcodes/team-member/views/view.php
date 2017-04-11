<?php
if (!defined('FW')) {
    die('Forbidden');
}
$teammember = $atts['teams'];
?>

<div class="text-center team-details">
    <div class="center-block">
        <div class="team-slider owl-carousel owl-theme"> 
            <?php foreach ($teammember as $team): ?>
                <div class="item"> 

                    <?php if ($team['image']) { ?>
                        <img src="<?php echo esc_url($team['image']['url']); ?>" alt="<?php echo esc_attr($team['title']); ?>" class="img-circle">
                    <?php } ?>

                    <h5>
                        <?php if ($team['name']) { ?>
                           <?php echo wp_kses_post($team['name']); ?>
                        <?php } ?>

                        <?php if ($team['title']) { ?>
                            <span class="team-position"><?php echo esc_attr($team['title']); ?></span>
                        <?php } ?>
                            
                    </h5>
                    <ul class="social">
                        <?php foreach ($team['socials'] as $item): ?>
                        <li><a target="_blank" href="<?php echo esc_url($item['link']); ?>" onMouseOver="this.style.backgroundColor='<?php echo esc_attr($item["bg"]); ?>';this.style.color='#fff';this.style.border='1px solid transparent'" onMouseOut="this.style.backgroundColor='#fff';this.style.color='#c1c6c8';this.style.border='1px solid #c1c6c8'"><i class="<?php echo esc_attr($item['icon']); ?>"></i></a></li>
                                <?php endforeach; ?>
                    </ul>
                    <p><?php echo esc_attr($team['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
