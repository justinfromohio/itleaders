<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$partners = $atts['partner_img'];
?>

<ul class="clients-list">
    <?php
    if (!empty($partners)) {
        foreach ($partners as $partner) {
            ?>
            <li class="col-sm-4">
                <?php if ($partner['image']) { ?>
                    <figure> <img src="<?php echo $partner['image']['url'] ?>" alt="<?php echo $partner['label'] ?>"> </figure>
                <?php } ?>
            </li>
            <?php
        }
    }
    ?>
</ul>


