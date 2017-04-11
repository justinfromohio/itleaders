<?php
if (!defined('FW')) {
    die('Forbidden');
}
$id = uniqid('tab-');

$works = $atts['works'];
?>

<div class="how-it-works margin-bottom-30">
    <div class="col-md-11 center-block"> 
        <?php
        $cnt = 1;
        foreach ($works as $item):
            ?>
            <div class="row">
                <?php
                
                if ($cnt % 2 != 0) {
                    $imagepush = 'col-md-push-6';
                }else{
                    $imagepush = '';
                }
                if ($cnt % 2 != 0) {
                    $textpush = 'col-md-pull-6';
                }else{
                    $textpush = '';
                }
                
                $image = '<div class="col-md-6 '."$imagepush".'  text-center auto-margin-img"><img src="' . esc_url(archer_get_image($item['image'], '', true)) . '" alt="' . archer_theme_translate(esc_attr($item['title'])) . '" class="img-responsive"/> </div>';
                
                    echo $image;
                
                ?>
                <div class="col-md-6 <?php echo $textpush ?> works-text">
                    <div class="step-number"><span><?php echo $cnt; ?></span></div>

                    <?php if ($item['title']) { ?>
                        <h4><?php echo wp_kses_post($item['title']); ?></h4>
                    <?php } ?>

                    <?php if ($item['description']) { ?>
                        <p><?php echo wp_kses_post($item['description']); ?></p>
                    <?php } ?>

                </div>
                
            </div>
            <?php
            $cnt++;
        endforeach;
        ?>
    </div>
</div>










