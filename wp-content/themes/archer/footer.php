<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
$footerlogo = archer_get_option( 'footer_logo' );

$logo = $footerlogo ? $footerlogo[ 'url' ] : '';

$footer_heading = archer_get_option( 'footer_heading' );
?>


<footer class="site-footer section-spacing footer-customcss">
    <div class="container">
        <div class="row">
            <div class="col-md-2 footer-logo"> <img src="<?php echo archer_get_image( 'menu_logo', ARCHER_IMAGES . '/logo-nav.png' ) ?>" alt="logo footer"></div>
            <div class="col-sm-4 col-md-2">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<ul class="footer-nav">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</ul>
				<?php endif; ?>
            </div>
            <div class="col-sm-4 col-md-2">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<ul class="footer-nav">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</ul>
				<?php endif; ?>
            </div>
            <div class="col-sm-4 col-md-3">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<ul class="footer-nav">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</ul>
				<?php endif; ?>
            </div>
            <div class="col-md-3">
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<ul class="footer-nav">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</ul>
				<?php endif; ?>
            </div>

        </div>
    </div>
	<?php if ( class_exists( 'Caldera_Forms' ) ) { ?>
		<a href="" class="chat-btn" data-toggle="modal" data-target="#modal-contact-form"></a> 
	<?php } ?>
</footer>
<!--Site footer end--> 

<!--Copyright terms-->

<div class="copyright-terms">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6"> <small> &copy; <?php echo esc_attr( $footer_heading ); ?></small> </div>
            <div class="col-sm-7 col-md-6">
                <ul class="terms-privacy">
					<?php
					if ( defined( 'FW' ) ):
						$footer_links = archer_get_option( 'footer_links' );
						foreach ( $footer_links as $link ):
							$unique_id = uniqid( 'modal-' );
							?>

							<li><a href="" data-toggle="modal" data-target="#<?php echo esc_attr( $unique_id ); ?>"><?php echo wp_kses_post( $link[ 'title' ] ); ?></a></li>

							<!--Site policy modal -->
							<div class="modal fade site-policy" id="<?php echo esc_attr( $unique_id ); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content text-left">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<div class="modal-header">
											<h2 class="modal-title text-center" id="<?php echo esc_attr( $unique_id ); ?>"><?php echo wp_kses_post( $link[ 'head_title' ] ); ?></h2>
										</div>
										<div class="modal-body">
											<?php echo wp_kses_post( $link[ 'content' ] ); ?>
										</div>
									</div>
								</div>
							</div>
							<?php
						endforeach;
					endif;
					?>
                </ul>
                <!--Site policy modal end--> 
            </div>
        </div>
    </div>
</div>

<!--Copyright terms end--> 

<!-- Google map modal -->
<div class="modal fade" id="modal-google-map" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="map">
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Google map modal end--> 



<!--contact form modal-->

<div class="modal fade" id="modal-contact-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body"> 
                <!--contact form-->
                <div class="contact-form text-center">
                    <img src="<?php echo ARCHER_IMAGES . '/support-icon.svg' ?>" alt="support icon">
					<?php
					$forms = archer_get_option( 'form_shortcode' );
					echo do_shortcode( $forms );
					?>
                </div>
                <!--contact form end-->
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>