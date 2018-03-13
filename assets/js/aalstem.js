jQuery( function($) {

    jQuery('[data-toggle="offcanvas"]').on('click', function () {
      jQuery('.offcanvas-collapse').toggleClass('open')
    });

    jQuery('.owl-testimonials').owlCarousel({
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:false,
      // navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
      navText: false,
      items:1,
      slideBy: 1,
      dots: true,
      transitionStyle: "backSlide"
    });

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

});
