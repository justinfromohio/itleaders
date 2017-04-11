<?php
if (!defined('FW')) {
    die('Forbidden');
}

$mail_title = $atts['mailchimp_title'];
$mail_subtitle = $atts['mailchimp_subtitle'];
$mail_url = $atts['mailchimp'];
$mail_terms = $atts['mailchimp_terms'];

$tw_user_name = $atts['twitter_username'];
$tw_user_id = $atts['twitter_user_id'];
$tw_link = $atts['twitter_link'];
?>

<div class="site-footer">
    
    <div class="col-md-5 sub-form">
        <h3><?php echo esc_attr($mail_title); ?></h3>
        <p><?php echo esc_attr($mail_subtitle); ?></p>
        <form id="footer-subscribe-form" data-subscribe-form="<?php echo $mail_url;?>">
            <div id="footer-subscribe-mc-error"><i class="fa fa-exclamation-triangle"></i> <?php _e('Please enter a value', 'archer') ?></div>
            <div id="footer-subscribe-mc-success"><i class="fa fa-envelope"></i> <?php _e('Awesome! We have sent you a confirmation email', 'archer') ?></div>
            <div class="input-group"> <i class="fa fa-envelope"></i>
                <input type="email" class="form-control input-lg" placeholder="<?php _e('Your Email', 'archer') ?>" required id="mc-email">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-msg"><i class="fa fa-paper-plane"></i></button>
                </span> 
            </div>
        </form>
        <p class="form-terms"><?php echo wp_kses_post($mail_terms); ?></p>
    </div>

    <div class="col-md-7 text-center twitter-header">
        <i class="fa fa-twitter"></i>
        <p><?php _e('Follow', 'archer'); ?> <a  target="_blank" href="<?php echo esc_url($tw_link); ?>"><?php echo esc_attr($tw_user_name); ?></a> <?php _e('for updates', 'archer'); ?></p>
    </div>
    <div class="col-md-7 twt-single text-center">
        <div id="twitter-feeds" data-widget-id="<?php echo esc_attr($tw_user_id); ?>" class="twitter-feeds"></div>
    </div>

</div>


