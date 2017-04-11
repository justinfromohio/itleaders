<?php
/**
 * page.php
 *
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>
<div class="page-hero-bg">
    <div class="page-hero">
    </div>
</div>
<div class="main-content blog-wrap"  role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
			 <?php if (have_posts()) : ?>
                    <?php woocommerce_content(); ?>
                <?php endif; ?>
            </div> <!-- end main-content -->
        </div>
    </div>
</div> 
<?php get_footer(); ?>