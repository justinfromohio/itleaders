<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="450">
    <div class="container">
        <div class="navbar-header"> 
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" alt="logo" src="<?php echo archer_get_image( 'transparent_logo', ARCHER_IMAGES . '/logo-nav.png' ) ?>">
                <img class="logo-nav" alt="logo-nav" src="<?php echo archer_get_image( 'menu_logo', ARCHER_IMAGES . '/logo-nav.png' ) ?>">
            </a> 
        </div>
		<ul class="nav navbar-nav navbar-right navbar-custom hidden-xs hidden-sm">
			<?php
			$cta_menu = archer_get_option( 'cta_menu' );

			if ( defined( 'FW' ) ):


				foreach ( $cta_menu as $menu ):
					$menu_style = $menu[ 'cta_type' ];
					?>
					<?php if ( $menu_style == 'link' && $menu[ 'title' ] != '' ): ?>
						<li><a target="<?php echo esc_attr( $menu[ 'target' ] ); ?>" href="<?php echo esc_url( $menu[ 'url' ] ); ?>" class="btn-links"><?php echo esc_attr( $menu[ 'title' ] ); ?></a></li>
					<?php endif; ?>

					<?php if ( $menu_style == 'button' && $menu[ 'title' ] != '' ): ?>
						<li><a target="<?php echo esc_attr( $menu[ 'target' ] ); ?>" href="<?php echo esc_url( $menu[ 'url' ] ); ?>" class="btn btn-nav"><?php echo esc_attr( $menu[ 'title' ] ); ?></a></li>
					<?php endif; ?>

					<?php
				endforeach;
			endif;
			?>
		</ul>
		<?php
		wp_nav_menu( array(
			'menu'			 => 'primary',
			'theme_location' => 'primary',
			'menu_class'	 => 'nav navbar-nav navbar-right hidden-xs hidden-sm',
			'fallback_cb'	 => 'archer_xs_navwalker::fallback',
			'walker'		 => new archer_xs_navwalker() )
		);
		?>

        <ul class="nav navbar-nav navbar-right hidden-md hidden-lg">
			<?php
			if ( defined( 'FW' ) ):


				foreach ( $cta_menu as $menu ):
					$menu_style = $menu[ 'cta_type' ];
					?>
					<?php if ( $menu_style == 'link' && $menu[ 'title' ] != '' ): ?>
						<li><a target="<?php echo esc_attr( $menu[ 'target' ] ); ?>" href="<?php echo esc_url( $menu[ 'url' ] ); ?>" class="btn-links"><?php echo esc_attr( $menu[ 'title' ] ); ?></a></li>
					<?php endif; ?>

					<?php if ( $menu_style == 'button' && $menu[ 'title' ] != '' ): ?>
						<li><a target="<?php echo esc_attr( $menu[ 'target' ] ); ?>" href="<?php echo esc_url( $menu[ 'url' ] ); ?>" class="btn btn-nav"><?php echo esc_attr( $menu[ 'title' ] ); ?></a></li>
					<?php endif; ?>

					<?php
				endforeach;
			endif;
			?>
            <li><a id="toggle"><i class="fa fa-bars fa-2x"></i><i class="fa fa-times fa-2x"></i></a></li>
        </ul>

    </div>
</nav>

<!--navigation end--> 

<!--mobile navigation-->

<div class="mobile-nav-overlay hidden-md hidden-lg" id="mobile-nav-overlay">
	<?php
	wp_nav_menu( array(
		'menu'				 => 'primary',
		'theme_location'	 => 'primary',
		'container_class'	 => 'mobile-nav',
		'container'			 => 'nav',
		'fallback_cb'		 => 'archer_xs_navwalker::fallback',
		'walker'			 => new archer_xs_navwalker() )
	);
	?>
</div>

<!--mobile navigation end--> 