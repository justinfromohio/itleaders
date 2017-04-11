<?php
if (!defined('FW')) {
    die('Forbidden');
}


$testimonial = $atts['testimonials'];
?>

<div class="user-reviews text-center">
    <div class="col-md-9 center-block">
        <div class="reviews-slider owl-carousel owl-theme">
            <?php foreach ($testimonial as $item): ?>
                <?php if (!empty($item)) { ?>
                    <div class="item"> 
                        <blockquote>
                            <?php if ($item['image']) { ?>
                                <figure> <img src="<?php echo $item['image']['url']; ?>" alt="user" class="img-circle"> </figure>
                                <?php } ?>

                            <?php if ($item['content']) { ?>
                                <p>“<?php echo $item['content']; ?>”</p>
                            <?php } ?>

                            <footer> <cite><?php echo $item['author_name']; ?>, <i><?php echo $item['author_title']; ?></i></cite> </footer>
                        </blockquote>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
