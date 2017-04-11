<?php
if (!defined('FW'))
    die('Forbidden');


$title = $atts['title'];
$subtitle = $atts['subtitle'];

$home_logo = fw_get_db_settings_option('home_logo');
$homepage_styles = $atts['homepage_style_settings'];
$home1 = $homepage_styles['home-1'];
?>



<?php if ($homepage_styles['homepage_style'] == 'home-1'): ?>

    <div class="text-center welcome-message">
        <?php if (!empty($title)) { ?>
            <h1><?php echo wp_kses_post($title); ?></h1>
        <?php } ?>

        <?php if (!empty($subtitle)) { ?>
            <h2><?php echo wp_kses_post($subtitle); ?></h2>
        <?php } ?>

        <?php foreach ($home1['button_settings'] as $btn): ?>

            <?php $style = $btn['tab_item']['selected_value']; ?>

            <?php
            $label = $btn['tab_item']['button']['label'];
            $link = $btn['tab_item']['button']['link'];
            $target = $btn['tab_item']['button']['target'];
            $btn_style = $btn['tab_item']['button']['style'];
            $letter_case = $btn['tab_item']['button']['letter_case'];
            ?>

            <?php if ($style == 'button'): ?>
                    <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
            <?php endif; ?>


            <?php
            $video_url = $btn['tab_item']['video']['video_url'];
            $video_title = $btn['tab_item']['video']['title'];
            ?>

            <?php if ($style == 'video'): ?>
                <div class="video-play-btn">
                    <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>

    </div>
<?php endif; ?>


<?php if ($homepage_styles['homepage_style'] == 'home-2'): ?>

    <?php $home2 = $homepage_styles['home-2']; ?>

    <div class="text-center welcome-message">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h2><?php echo wp_kses_post($subtitle); ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-6 sub-form center-block">
                <form id="home-form" data-home-form="<?php echo esc_url($home2['mailchimp']); ?>">
                    <div id="home-mc-error"><i class="fa fa-exclamation-triangle"></i> <?php echo esc_attr($home2['error']); ?></div>
                    <div id="home-mc-success"><i class="fa fa-envelope"></i> <?php echo esc_attr($home2['success']); ?></div>
                    <div class="input-group"> <i class="fa fa-envelope"></i>
                        <input type="email" class="form-control input-lg" placeholder="<?php _e('Email Address', 'archer') ?>" required id="mc-email">
                        <span class="input-group-btn">
                            <button type="submit" class="btn"><?php echo esc_attr($home2['button_text']); ?></button>
                        </span> </div>
                </form>
                <div class="form-terms"><?php echo wp_kses_post($home2['condition_text']); ?></div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php if ($homepage_styles['homepage_style'] == 'home-3'): ?>

    <?php $home3 = $homepage_styles['home-3']; ?>

    <div class="welcome-message home-3">
        <div class="row">
            <div class="col-md-5">
                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h2><?php echo wp_kses_post($subtitle); ?></h2>
                <?php } ?>

                <ul class="benefits-cta-list">
                    <?php foreach ($home3['benifit_list'] as $benifits) { ?>
                        <li> <i class="fa fa-check" aria-hidden="true"></i><?php echo wp_kses_post($benifits); ?></li>
                    <?php } ?>
                </ul>

            </div>
            <div class="col-md-7">
                <div class="embed-responsive embed-responsive-16by9 text-center"> 
                    <?php if (!empty($home3['video_url'])) { ?>
                        <iframe class="embed-responsive-item" src="<?php echo esc_url($home3['video_url']); ?>"></iframe>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="hero-sub-form">
            <div class="row">
                <div class="col-md-12 sub-form">
                    <h3><?php echo wp_kses_post($home3['form_top_txt']); ?></h3>
                    <form id="home-3-form" data-home-3-form="<?php echo esc_url($home3['mailchimp']); ?>">
                        <div id="home-3-mc-error"><i class="fa fa-exclamation-triangle"></i> <?php echo esc_attr($home3['error']); ?></div>
                        <div id="home-3-mc-success"><i class="fa fa-envelope"></i> <?php echo esc_attr($home3['success']); ?></div>
                        <div class="input-group"> <i class="fa fa-envelope"></i>
                            <input type="email" class="form-control input-lg" placeholder="<?php _e('Email Address', 'archer') ?>" required id="mc-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"><?php echo esc_attr($home3['button_text']); ?></button>
                            </span> </div>
                    </form>
                    <div class="form-terms"><?php echo wp_kses_post($home3['condition_text']); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php if ($homepage_styles['homepage_style'] == 'home-4'): ?>

    <?php $home4 = $homepage_styles['home-4']; ?>

    <div class="welcome-message home-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h2><?php echo wp_kses_post($subtitle); ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-6 col-sm-push-6"> 
                <?php if (!empty($home4['image'])) { ?>
                    <img src="<?php echo $home4['image']['url']; ?>" alt="<?php echo wp_kses_post($title); ?>" class="feature-cta-big-img"> 
                <?php } ?>
            </div>
            <div class="col-sm-5 col-md-offset-1 col-sm-pull-6">
                <ul class="feature-cta-list">
                    <?php foreach ($home4['feature_list'] as $features): ?>
                        <li> 
                            <?php if (!empty($features['icon'])) { ?>
                                <i class="<?php echo esc_attr($features['icon']); ?>"></i>
                            <?php } ?>

                            <?php if (!empty($features['title'])) { ?>   
                                <h4><?php echo wp_kses_post($features['title']); ?></h4>
                            <?php } ?>

                            <?php if (!empty($features['content'])) { ?>
                                <p><?php echo wp_kses_post($features['content']); ?></p>
                            <?php } ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php foreach ($home4['button_settings'] as $btn): ?>

                    <?php $style = $btn['tab_item']['selected_value']; ?>

                    <?php
                    $label = $btn['tab_item']['button']['label'];
                    $link = $btn['tab_item']['button']['link'];
                    $target = $btn['tab_item']['button']['target'];
                    $btn_style = $btn['tab_item']['button']['style'];
                    $letter_case = $btn['tab_item']['button']['letter_case'];
                    ?>

                    <?php if ($style == 'button'): ?>
                        
                            <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
                    
                    <?php endif; ?>


                    <?php
                    $video_url = $btn['tab_item']['video']['video_url'];
                    $video_title = $btn['tab_item']['video']['title'];
                    ?>

                    <?php if ($style == 'video'): ?>
                        <div class="video-play-btn">
                            <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
<?php endif; ?>



<?php if ($homepage_styles['homepage_style'] == 'home-5'): ?>

    <?php $home5 = $homepage_styles['home-5']; ?>

    <div class="welcome-message home-5">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">

                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h2><?php echo wp_kses_post($subtitle); ?></h2>
                <?php } ?>



                <?php foreach ($home5['button_settings'] as $btn): ?>

                    <?php $style = $btn['tab_item']['selected_value']; ?>

                    <?php
                    $label = $btn['tab_item']['button']['label'];
                    $link = $btn['tab_item']['button']['link'];
                    $target = $btn['tab_item']['button']['target'];
                    $btn_style = $btn['tab_item']['button']['style'];
                    $letter_case = $btn['tab_item']['button']['letter_case'];
                    ?>

                    <?php if ($style == 'button'): ?>
                        
                            <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
                        
                    <?php endif; ?>


                    <?php
                    $video_url = $btn['tab_item']['video']['video_url'];
                    $video_title = $btn['tab_item']['video']['title'];
                    ?>

                    <?php if ($style == 'video'): ?>
                        <div class="video-play-btn">
                            <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>


            </div>

        </div>

    </div>
<?php endif; ?>


<?php if ($homepage_styles['homepage_style'] == 'home-6'): ?>

    <?php $home6 = $homepage_styles['home-6']; ?>

    <section class="welcome-message home-6">
        <div class="row">
            <div class="col-md-11 center-block">
                <div class="row">

                    <div class="col-md-6">

                        <?php if (!empty($title)) { ?>
                            <h1><?php echo wp_kses_post($title); ?></h1>
                        <?php } ?>

                        <?php if (!empty($subtitle)) { ?>
                            <h2><?php echo wp_kses_post($subtitle); ?></h2>
                        <?php } ?>

                        <?php foreach ($home6['button_settings'] as $btn): ?>

                            <?php $style = $btn['tab_item']['selected_value']; ?>

                            <?php
                            $label = $btn['tab_item']['button']['label'];
                            $link = $btn['tab_item']['button']['link'];
                            $target = $btn['tab_item']['button']['target'];
                            $btn_style = $btn['tab_item']['button']['style'];
                            $letter_case = $btn['tab_item']['button']['letter_case'];
                            ?>

                            <?php if ($style == 'button'): ?>
                                
                                    <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
                               
                            <?php endif; ?>


                            <?php
                            $video_url = $btn['tab_item']['video']['video_url'];
                            $video_title = $btn['tab_item']['video']['title'];
                            ?>

                            <?php if ($style == 'video'): ?>
                                <div class="video-play-btn">
                                    <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>

                    <div class="col-md-6">
                        <section class="cta-light">
                            <?php
                            if (class_exists('Caldera_Forms')) {
                            $quote = $home6['form_shortcode'];
                            echo do_shortcode($quote);
                            }
                            ?>
                        </section>
                    </div>


                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($homepage_styles['homepage_style'] == 'home-7'): ?>

    <?php $home7 = $homepage_styles['home-7']; ?>

    <div class="text-center welcome-message home-7">
        <div class="row">
            <div class="col-md-12">

                <?php if (!empty($title)) { ?>
                    <h1><?php echo wp_kses_post($title); ?></h1>
                <?php } ?>

                <?php if (!empty($subtitle)) { ?>
                    <h2><?php echo wp_kses_post($subtitle); ?></h2>
                <?php } ?>

                <?php foreach ($home7['button_settings'] as $btn): ?>

                    <?php $style = $btn['tab_item']['selected_value']; ?>

                    <?php
                    $label = $btn['tab_item']['button']['label'];
                    $link = $btn['tab_item']['button']['link'];
                    $target = $btn['tab_item']['button']['target'];
                    $btn_style = $btn['tab_item']['button']['style'];
                    $letter_case = $btn['tab_item']['button']['letter_case'];
                    ?>

                    <?php if ($style == 'button'): ?>
                        
                            <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
                       
                    <?php endif; ?>


                    <?php
                    $video_url = $btn['tab_item']['video']['video_url'];
                    $video_title = $btn['tab_item']['video']['title'];
                    ?>

                    <?php if ($style == 'video'): ?>
                        <div class="video-play-btn">
                            <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>

                <figure class="hero-image"> 
                    <?php
                    $pointer = $home7['pointer'];
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



                    <?php if (!empty($home7['image'])) { ?>
                        <img src="<?php echo $home7['image']['url']; ?>" alt="app"> 
                    <?php } ?>
                </figure>

            </div>
        </div>
    </div>
<?php endif; ?>


<?php if ($homepage_styles['homepage_style'] == 'home-8'): ?>

    <?php $home8 = $homepage_styles['home-8']; ?>

    <div class="welcome-message home-8">
        <div class="row">
            <div class="col-md-11 center-block">
                <div class="row">
                    <div class="col-md-6"> 
                        <div class="share-btn"> 
                            <?php foreach ($home8['socials'] as $social) { ?>
                                <a target="_blank" href="<?php echo esc_url($social['link']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"></i><?php echo wp_kses_post($social['title']); ?></a> <span class="share-seperator">|</span> 
                            <?php } ?>

                            <?php if (!empty($title)) { ?>
                                <h1><?php echo wp_kses_post($title); ?></h1>
                            <?php } ?>

                            <?php if (!empty($subtitle)) { ?>
                                <h2><?php echo wp_kses_post($subtitle); ?></h2>
                            <?php } ?>

                            <!--app store btn-->
                            <div class="app-store-btn">
                                <?php foreach ($home8['apps'] as $apps): ?>
                                    <a target="_blank" href="<?php echo esc_url($apps['link']); ?>"><img src="<?php echo esc_url($apps['image']['url']); ?>" alt="<?php echo esc_attr($apps['title']); ?>"></a>
                                <?php endforeach; ?>
                            </div>
                            <!--app store btn end-->

                            <?php foreach ($home8['button_settings'] as $btn): ?>

                                <?php $style = $btn['tab_item']['selected_value']; ?>

                                <?php
                                $label = $btn['tab_item']['button']['label'];
                                $link = $btn['tab_item']['button']['link'];
                                $target = $btn['tab_item']['button']['target'];
                                $btn_style = $btn['tab_item']['button']['style'];
                                $letter_case = $btn['tab_item']['button']['letter_case'];
                                ?>

                                <?php if ($style == 'button'): ?>
                                    
                                        <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>"  class="<?php archer_theme_button_class($btn_style); ?> text-<?php echo $letter_case; ?>"> <?php echo wp_kses_post($label); ?></a>
                                   
                                <?php endif; ?>


                                <?php
                                $video_url = $btn['tab_item']['video']['video_url'];
                                $video_title = $btn['tab_item']['video']['title'];
                                ?>

                                <?php if ($style == 'video'): ?>
                                    <div class="video-play-btn">
                                        <a href="<?php echo esc_url($video_url); ?>" class="play-btn"><i class="fa fa-play fa-2x"></i> </a><span><?php echo wp_kses_post($video_title); ?></span>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; ?>

                        </div>

                    </div>

                    <div class="col-md-6 text-center"> 
                        <?php if ($home8['image']) { ?>
                            <img src="<?php echo esc_url($home8['image']['url']); ?>" alt="<?php echo $title; ?>"> 
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php

 endif;



