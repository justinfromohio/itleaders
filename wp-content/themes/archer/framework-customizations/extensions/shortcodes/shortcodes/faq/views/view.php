<?php
if (!defined('FW')) {
    die('Forbidden');
}
$fags = $atts['faqs'];
?>

<ul class="faq-list">
    <?php foreach ($fags as $item): ?>

        <li class="col-sm-6">
            <?php if (!empty($item['title'])) { ?>
                <h4><?php echo wp_kses_post($item['title']); ?></h4>
            <?php } ?>

            <?php if (!empty($item['content'])) { ?>
                <p> <?php echo wp_kses_post($item['content']); ?></p>
            <?php } ?>
        </li>

    <?php endforeach; ?>
</ul>

