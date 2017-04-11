<?php if (!defined('FW')) die('Forbidden');
/**
 * @var string $submit_button_text
 */
?>
<div class="fw-col-sm-12 field-submit text-center">
    <button type="submit" class="<?php archer_theme_button_class('send_contact'); ?> btn btn-primary btn-lg"><i class="fa fa-send"></i> <?php echo esc_attr($submit_button_text) ?></button>
</div>