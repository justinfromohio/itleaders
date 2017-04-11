jQuery( document ).ready( function ( $ ) {
    "use strict";




    /* ==========================================================================
     Home 1 Mailchimp Form   
     ========================================================================== */
    var homeChimp = jQuery( '#home-form' ).attr( 'data-home-form' );
    jQuery( '#home-form' ).ajaxChimp( {
        callback: callbackFunctions,
        url: homeChimp
    } );

    function callbackFunctions( resp ) {
        if ( resp.result === 'success' ) {
            jQuery( '#home-mc-error' ).slideUp();
            jQuery( '#home-mc-success' ).slideDown();
        } else if ( resp.result === 'error' ) {
            jQuery( '#home-mc-success' ).slideUp();
            jQuery( '#home-mc-error' ).slideDown();
        }
    }

    /* ==========================================================================
     Home 3 Mailchimp Form   
     ========================================================================== */
    var homeChimp3 = jQuery( '#home-3-form' ).attr( 'data-home-3-form' );
    jQuery( '#home-3-form' ).ajaxChimp( {
        callback: callbackFunction3,
        url: homeChimp3
    } );

    function callbackFunction3( resp ) {
        if ( resp.result === 'success' ) {
            jQuery( '#home-3-mc-error' ).slideUp();
            jQuery( '#home-3-mc-success' ).slideDown();
        } else if ( resp.result === 'error' ) {
            jQuery( '#home-3-mc-success' ).slideUp();
            jQuery( '#home-3-mc-error' ).slideDown();
        }
    }

    /* ==========================================================================
     Footer Subscribe Form   
     ========================================================================== */

    var footerChimp = jQuery( '#footer-subscribe-form' ).attr( 'data-subscribe-form' );
    jQuery( '#footer-subscribe-form' ).ajaxChimp( {
        callback: callbackFunction,
        url: footerChimp
    } );

    function callbackFunction( resp ) {
        if ( resp.result === 'success' ) {
            jQuery( '#footer-subscribe-mc-error' ).slideUp();
            jQuery( '#footer-subscribe-mc-success' ).slideDown();
        } else if ( resp.result === 'error' ) {
            jQuery( '#footer-subscribe-mc-success' ).slideUp();
            jQuery( '#footer-subscribe-mc-error' ).slideDown();
        }
    }

    /* ==========================================================================
     Pre-loader  
     ========================================================================== */

    jQuery( window ).load( function () {
        jQuery( ".preloader" ).fadeOut();
        jQuery( ".plus-loader" ).delay( 1000 ).fadeOut( "slow" );
    } );


    /* ==========================================================================
     Masonary Portfolio   
     ========================================================================== */

    jQuery( '.grid' ).masonry( {
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        percentPosition: true
    } );



    /* ===========================================================
     TWITTER FEED
     ============================================================== */
    function handleTweets( tweets ) {
        var x = tweets.length,
            n = 0,
            element = document.getElementById( 'twitter-feeds' ),
            html = '<div class="slides">';
        while ( n < x ) {
            html += '<div>' + tweets[n] + '</div>';
            n++;
        }
        html += '</div>';
        element.innerHTML = html;

        /* Twits attached to owl-carousel */
        jQuery( "#twitter-feeds .slides" ).owlCarousel( {
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            pagination: false,
            transitionStyle: "fade",
            singleItem: true
        } );
    }

    if ( jQuery( '#twitter-feeds' ).length ) {
        var widgetId = jQuery( '#twitter-feeds' ).attr( 'data-widget-id' );

        var config_feed = {
            "id": widgetId,
            "domId": 'twitter-feeds',
            "maxTweets": 5,
            "enableLinks": true,
            "showUser": false,
            "showTime": true,
            "dateFunction": '',
            "showRetweet": false,
            "customCallback": handleTweets,
            "showInteraction": false
        };

        twitterFetcher.fetch( config_feed );
    }




    /* ==========================================================================
     Product statistics counter
     ========================================================================== */
    jQuery( '.count' ).counterUp( {
        delay: 10,
        time: 2000
    } );

    /* ==========================================================================
     Navbar button animation
     ========================================================================== */

    var btnCon = jQuery( '.navbar-nav #toggle, .mobile-nav a' );

    jQuery( btnCon ).on( "click", function () {

        if ( $( btnCon ).hasClass( 'active' ) ) {
            jQuery( btnCon ).removeClass( 'active' );
        } else {

            jQuery( btnCon ).addClass( 'active' );
        }


        jQuery( '#mobile-nav-overlay' ).toggleClass( 'open' );
    } );


    /* ==========================================================================
     litebox
     ========================================================================== */

    jQuery( '.hero-section .play-btn, .video-play-btn .play-btn, .video-intro .play-btn, .video-tour .play-btn' ).magnificPopup( {
        type: 'iframe'
    } );

    /* ===========================================================
     MAGNIFIC POPUP
     ============================================================== */
    jQuery( '.portfolio' ).magnificPopup( {
        type: 'image',
        gallery: {
            enabled: true
        }

    } );

    /* ==========================================================================
     Reviews slider
     ========================================================================== */
    jQuery( '.reviews-slider' ).owlCarousel( {
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        transitionStyle: "fade",
        autoPlay: 7000
    } );

    /* ==========================================================================
     Download slider
     ========================================================================== */
    jQuery( '.app-download-slider' ).owlCarousel( {
        navigation: false,
        slideSpeed: 300,
        dots: false,
        pagination: false,
        paginationSpeed: 800,
        singleItem: true,
        transitionStyle: "fade",
        autoPlay: 7000
    } );

    /* ==========================================================================
     Tooltip 
     ========================================================================== */

    jQuery( "[data-toggle=tooltip]" ).tooltip();

    /* ==========================================================================
     Popover
     ========================================================================== */

    jQuery( '[data-toggle="popover"]' ).popover( {
        placement: 'auto',
        trigger: 'hover focus'

    } );


    /* ==========================================================================
     Play btn animation
     ========================================================================== */

    jQuery( '.video-intro .play-btn i, .video-tour .play-btn i' ).waypoint( function () {
        jQuery( this.element ).addClass( 'play-btn-animation' );


        this.destroy();

    }, {
        offset: '60%'
    } );

    /* ==========================================================================
     Team slider
     ========================================================================== */

    var owlTeam = jQuery( '.team-slider' );

    owlTeam.owlCarousel( {
        itemsCustom: [
            [ 0, 1 ],
            [ 450, 1 ],
            [ 600, 1 ],
            [ 700, 2 ],
            [ 1000, 3 ],
            [ 1200, 3 ],
            [ 1400, 3 ],
            [ 1600, 3 ]
        ],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left fa-2x'></i>",
            "<i class='fa fa-angle-right fa-2x'></i>"
        ]

    } );


    /* ==========================================================================
     twitter reviews slider
     ========================================================================== */

    var owl = jQuery( '.twitter-reviews-slider' );

    owl.owlCarousel( {
        itemsCustom: [
            [ 0, 1 ],
            [ 450, 1 ],
            [ 600, 1 ],
            [ 700, 2 ],
            [ 1000, 3 ],
            [ 1200, 3 ],
            [ 1400, 3 ],
            [ 1600, 3 ]
        ],
        navigation: false

    } );



    /* ==========================================================================
     Chat button
     ========================================================================== */


    jQuery( '.site-footer' ).waypoint( function () {
        jQuery( '.chat-btn' ).addClass( 'fixed' );

    }, {
        offset: '80%'

    } );



    /* ==========================================================================
     Smooth scroll
     ========================================================================== */


    jQuery( '.navbar, .mobile-nav, .cta' ).find( 'a[href*="#"]:not([href="#"])' ).click( function () {
        if ( location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname ) {
            var target = $( this.hash );
            target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
            if ( target.length ) {
                $( 'html,body' ).animate( {
                    scrollTop: ( target.offset().top - 80 )
                }, 1000 );
                if ( $( '.navbar-toggle' ).css( 'display' ) != 'none' ) {
                    $( this ).parents( '.container' ).find( ".navbar-toggle" ).trigger( "click" );
                }
                return false;
            }
        }
    } );

//Make equal column  for service section

    function ResetGridColumns() {
        $( '.equalcol .row' ).each( function () {

            // find all columns
            var $cs = $( this ).children( '[class*="col-"]' );

            // reset the height
            $cs.css( 'height', 'auto' );

            // set the heights per row
            var rowWidth = $( this ).width();
            var $curCols = $();
            var curMax = 0;
            var curWidth = 0;
            $cs.each( function () {
                var w = $( this ).width();
                var h = $( this ).height();
                if ( curWidth + w <= rowWidth ) {
                    $curCols = $curCols.add( this );
                    curWidth += w;
                    if ( h > curMax )
                        curMax = h;
                } else {
                    if ( $curCols.length > 1 )
                        $curCols.css( 'height', curMax + 'px' );
                    $curCols = $( this );
                    curWidth = w;
                    curMax = h;
                }
            } );
            if ( $curCols.length > 1 )
                $curCols.css( 'height', curMax + 'px' );

        } );
    }

    $( document ).ready( function () {
        $( window ).resize( function () {
            ResetGridColumns();
        } );
        ResetGridColumns();
    } );


    var checkXsIsMobile = {
        iOS: function () {
            return navigator.userAgent.match( /iPhone|iPad|iPod/i );
        }
    };
    if ( checkXsIsMobile.iOS() ) {
        jQuery( '.parallax-section' ).css( 'background-attachment', 'scroll' );
    }
    ;

} );