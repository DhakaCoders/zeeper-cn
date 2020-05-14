<!DOCTYPE html>
<html <?php language_attributes(); ?> class="js">
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="http://themehoster.com/rp/zeeper/assets/images/favicon.png">    <!--[if IE]>
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
  $dlink = get_field('dlink', 'options');
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
    <div id="maplocation" data-homeurl="<?php echo THEME_URI; ?>"></div>
    <!--Start Header-->
    <header id="header" <?php if( !is_front_page() ): echo 'class="page-hdr"'; endif; ?>>
        <nav class="navbar navbar-default bootsnav on no-full affix-top" data-spy="affix" data-offset-top="10">
            <div class="container">
                <!-- Start Atribute Navigation -->
                <?php if( !empty($dlink) ): ?>
                <div class="attr-nav">
                    <ul>
                        <li>
                            <a href="<?php echo $dlink; ?>" download>
                                <i class="icofont-download"></i> Download
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                <?php endif; ?>

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
                    <?php 
                      $menuOptionsb = array( 
                          'theme_location' => 'cbv_main_menu', 
                          'menu_class' => 'nav navbar-nav navbar-right',
                          'container' => '',
                          'container_class' => ''
                        );
                      wp_nav_menu( $menuOptionsb ); 
                    ?>  
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="clearfix"></div>
    </header>
    <!--End Header-->