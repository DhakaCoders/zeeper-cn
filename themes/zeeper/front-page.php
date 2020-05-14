<!DOCTYPE html>
<html <?php language_attributes(); ?> class="js">
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="http://themehoster.com/rp/zeeper/<?php echo THEME_URI; ?>/assets/images/favicon.png">
    <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
    <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/icofont/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/mailer-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
        @-webkit-keyframes _gm4362 {
        0% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }
        50% { -webkit-transform: translate3d(0px,-20px,0); -webkit-animation-timing-function: ease-in; }
        100% { -webkit-transform: translate3d(0px,0px,0); -webkit-animation-timing-function: ease-out; }
        }
    </style>
    <style>
    .dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}.dismissButton:hover{background-color:rgba(66,133,244,0.04);border:1px solid #d2e3fc}.dismissButton:focus{background-color:rgba(66,133,244,0.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd}.dismissButton:active{background-color:rgba(66,133,244,0.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('logo_header', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?> 
    <div class="wrapper">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header id="header">
            <nav class="navbar navbar-default bootsnav on no-full affix-top" data-spy="affix" data-offset-top="10">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icofont-download"></i> Download
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                        <a class="navbar-brand logo-cntlr" href="<?php echo esc_url(home_url('/')); ?>">
                          <?php echo $logo_tag; ?>
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#features">Feature</a></li>
                            <li><a href="#app-screenshot">Screenshot</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#faq">Faq</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#latest-blog">Blog</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <!--End Header-->

        <?php 
          get_template_part('sections/intro', 'section'); 
          get_template_part('sections/about', 'section'); 
          get_template_part('sections/features', 'section'); 
          get_template_part('sections/choose', 'section'); 
          get_template_part('sections/screenshot', 'section'); 
          get_template_part('sections/video', 'section'); 
          get_template_part('sections/work', 'section'); 
          get_template_part('sections/counter', 'section'); 
          get_template_part('sections/pricing', 'section');
          get_template_part('sections/faq', 'section');
          get_template_part('sections/testimonial', 'section');
          get_template_part('sections/download', 'section');
          get_template_part('sections/team', 'section');
          get_template_part('sections/newsletter', 'section');
          get_template_part('sections/blog', 'section');
          get_template_part('sections/contact', 'section');
        ?>
        <?php 
          $smedias = get_field('sociale_media', 'options');
        ?>
        <!--Start Footer-->
        <footer id="footer">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Footer Social-->
                    <div class="col-sm-4">
                        <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer Social-->

                    <!--Start Copyright Text-->
                    <div class="col-sm-8">
                        <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s" style="visibility: hidden; animation-delay: 0.2s; animation-name: none;">
                            <p class="color-white">© 2020 All Rights Reserved & Develop By <a class="color-base" href="#">DhakaCoders</a></p>
                        </div>
                    </div>
                    <!--End Copyright Text-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->

            <!--Start ClickToTop-->
            <div class="click-to-top">
                <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a>
            </div>
            <!--End ClickToTop-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->



    

    <!--jQuery JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/jquery.min.js.download"></script>
    <!--Google Map API-->
    <script src="<?php echo THEME_URI; ?>/assets/js/js" async="" defer=""></script>
    <!--Counter JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/waypoints.js.download"></script>
    <script src="<?php echo THEME_URI; ?>/assets/js/jquery.counterup.min.js.download"></script>
    <!--Bootstrap JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js.download"></script>
    <!--Magnic PopUp JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/magnific-popup.min.js.download"></script>
    <!--Owl Carousel JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/owl.carousel.min.js.download"></script>
    <!--Wow JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/wow.min.js.download"></script>
    <!--Bootsnavs JS-->
    <script src="<?php echo THEME_URI; ?>/assets/js/bootsnav.js.download"></script>
    <!--Contact Form JS-->
    
    <!--Main-->
    
    <script src="<?php echo THEME_URI; ?>/assets/js/custom.js.download"></script>
     <script src="<?php echo THEME_URI; ?>/assets/js/map.js(1).download"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>

</div>
<?php wp_footer(); ?>
</body>
</html>