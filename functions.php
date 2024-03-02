<?php
    function add_css()
    {
       
      wp_register_style( 'GoogleFonts', 'https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' );
      wp_enqueue_style('GoogleFonts');

     
       wp_register_style('first', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
       wp_enqueue_style( 'first');

      // wp_register_style( 'bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' );
      // wp_enqueue_style('bootstrapcss');


       wp_register_style('second', get_template_directory_uri() . '/assets/css/nice-select.css', false,'1.1','all');
       wp_enqueue_style( 'second');

      //  wp_register_style('five', get_template_directory_uri() . '/assets/css/owl-carousel.css', false,'1.1','all');
      //  wp_enqueue_style( 'five');

      wp_register_style( 'owlcarauselcss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css' );
      wp_enqueue_style('owlcarauselcss');

       wp_register_style('third', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false,'1.1','all');
       wp_enqueue_style( 'third');

       wp_register_style('twelve', get_template_directory_uri() . '/assets/css/icofont.css', false,'1.1','all');
       wp_enqueue_style( 'twelve');

       wp_register_style('four', get_template_directory_uri() . '/assets/css/slicknav.min.css', false,'1.1','all');
       wp_enqueue_style( 'four');

       wp_register_style('six', get_template_directory_uri() . '/assets/css/datepicker.css', false,'1.1','all');
       wp_enqueue_style( 'six');

       wp_register_style('seven', get_template_directory_uri() . '/assets/css/animate.min.css', false,'1.1','all');
       wp_enqueue_style( 'seven'); 

      wp_register_style( 'animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
      wp_enqueue_style('animatecss');

       wp_register_style('eight', get_template_directory_uri() . '/assets/css/magnific-popup.css', false,'1.1','all');
       wp_enqueue_style( 'eight');

       wp_register_style('nine', get_template_directory_uri() . '/assets/css/normalize.css', false,'1.1','all');
       wp_enqueue_style( 'nine');

       wp_register_style('ten', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
       wp_enqueue_style( 'ten');

       wp_register_style('eleven', get_template_directory_uri() . '/assets/css/responsive.css', false,'1.1','all');
       wp_enqueue_style( 'eleven');

      



    }
    add_action('wp_enqueue_scripts', 'add_css');



    function add_script()
    {
       wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
       wp_enqueue_script( 'js-script');

       wp_register_script('migratejs', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array ( 'js-script' ), 1.1, true);
       wp_enqueue_script( 'migratejs');

       wp_register_script('jqueryui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array ( 'migratejs' ), 1.1, true);
       wp_enqueue_script( 'jqueryui');

       wp_register_script('easingjs', get_template_directory_uri() . '/assets/js/easing.js', array ( 'jqueryui' ), 1.1, true);
       wp_enqueue_script( 'easingjs');



      //  wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
      //  wp_enqueue_script( 'bootstrapjs');  

      wp_register_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', null, null, true );
      wp_enqueue_script('bootstrapjs');

       wp_register_script('colorjs', get_template_directory_uri() . '/assets/js/colors.js', array ( 'bootstrapjs' ), 1.1, true);
       wp_enqueue_script( 'colorjs');

       wp_register_script('popperjs', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'bootstrapjs' ), 1.1, true);
       wp_enqueue_script( 'popperjs');

       wp_register_script('datepickerjs', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array ( 'bootstrapjs' ), 1.1, true);
       wp_enqueue_script( 'datepickerjs');

       wp_register_script('jquerynav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array ( 'easingjs' ), 1.1, true);
       wp_enqueue_script( 'jquerynav');

      //  wp_register_script( 'owlcarauseljs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', null, null, true );
      //  wp_enqueue_script('owlcarauseljs');
       

       wp_register_script('owlcarauseljs', get_template_directory_uri() . '/assets/js/owl-carousel.js', array ( 'jquerynav' ), 1.1, true);
       wp_enqueue_script( 'owlcarauseljs');

       wp_register_script('slicknavjs', get_template_directory_uri() . '/assets/js/slicknav.min.js', array ( 'owlcarauseljs' ), 1.1, true);
       wp_enqueue_script( 'slicknavjs');

       wp_register_script('scrollupjs', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'scrollupjs');

       wp_register_script('niceselectjs', get_template_directory_uri() . '/assets/js/niceselect.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'niceselectjs');

       wp_register_script('tiltjs', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'tiltjs');


       wp_register_script('counterupjs', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'counterupjs');

       wp_register_script('stellerjs', get_template_directory_uri() . '/assets/js/steller.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'stellerjs');

       wp_register_script('wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'wowjs');

       wp_register_script('mpopupjs', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'mpopupjs');

       wp_register_script( 'cupjs', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', null, null, true );
       wp_enqueue_script('cupjs');


       wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array ( 'slicknavjs' ), 1.1, true);
       wp_enqueue_script( 'mainjs');

    };

    add_action('wp_enqueue_scripts', 'add_script');

    add_theme_support( 'menus' );


//     <!-- Favicon -->
//     <link rel="icon" href="img/seee-icon.png">
  
