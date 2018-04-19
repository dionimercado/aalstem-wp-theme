jQuery( function($) {

    // Offcanvas Menu
    jQuery('[data-toggle="offcanvas"]').on('click', function () {
      jQuery('.offcanvas-collapse').toggleClass('open')
    });

    // Smooth scrolling
  	jQuery('.smooth-scrolling').bind('click', function(event) {
  		var $anchor = jQuery(this);
  		jQuery('html, body').stop().animate({
  				scrollTop: (jQuery($anchor.attr('href')).offset().top - 0)
  		}, 800, 'easeInOutExpo');
  		event.preventDefault();
  	});

    // Testimonials Carousel
    jQuery('.owl-testimonials').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:30000,
      autoplayHoverPause:false,
      // navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
      navText: false,
      items:1,
      slideBy: 1,
      dots: true,
      transitionStyle: "backSlide"
    });


    // Social Media Stream
    jQuery('#social-stream').dcSocialStream({
      feeds: {
        twitter: {
          id: 'aalstem',
          out: 'intro,thumb,text',
          url: '/wp-content/themes/aalstem/inc/social-stream/twitter.php'
        },
        facebook: {
          id: 'aalstem',
          out: 'intro,thumb,text',
          url: '/wp-content/themes/aalstem/inc/social-stream/facebook.php'
        },
        // youtube: {
        //   id: 'VASports/UCqXV-VvTowRqVSxOpH_ChFA',
        //   thumb: 'medium',
        //   out: 'intro,thumb,title'
        // },
        instagram: {
          id: '!4794443499',
          accessToken: '4794443499.3a81a9f.0e2a39da24c041f2b16532e760271014',
          out: 'thumb,user'
        }
      },
      rotate: {
        delay: 0
      },
      style: {
        layout: 'modern',
        colour: 'light'
      },
      twitterId: 'designchemical',
      control: false,
      filter: false,
      wall: true,
      center: true,
      order: 'random',
      cache: false,
      max: 'limit',
      limit: 6,
      iconPath: 'images/dcsns-dark/',
      imagePath: 'images/dcsns-dark/'
    });

    $countdown = jQuery('[data-countdown]');
    $countdown.countdown($countdown.data('countdown'))
    .on('update.countdown', function(event) {
      var format = ''
        + '<div class="time-box"><span class="time">%H</span><span class="label">hours</span></div>'
        + '<div class="time-box"><span class="time">%M</span><span class="label">min</span></div>'
        + '<div class="time-box"><span class="time">%S</span><span class="label">sec</span></div>';
      if(event.offset.totalDays > 0) {
        format = '<div class="time-box"><span class="time">%-d</span><span class="label">day</span></div>' + format;
      }
      if(event.offset.weeks > 0) {
        format = '<div class="time-box"><span class="time">%-w</span><span class="label">week</span></div>' + format;
      }
      jQuery(this).html(event.strftime(format));
    })
    .on('finish.countdown', function(event) {
      jQuery(this).html('<h4 class="text-center w-100 mb-0">This event has passed.</h4>')
        .parent().addClass('disabled');

    });
});
