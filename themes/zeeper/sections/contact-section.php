<?php
  $showhidework = get_field('showhidework', HOMEID);
  if( $showhidework ):
    $howwork = get_field('howwork', HOMEID);
?>
<!--Start Contact Section-->
<section id="contact" class="bg-gray">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Col-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <!--Start Heading-->
                <div class="section-heading text-center">
                <?php 
                if( !empty($howwork['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $howwork['title'] ); 
                if( !empty($howwork['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $howwork['description'] ); 
                ?>
                </div>
                <!--End Heading-->
            </div>
            <!--End Heading Col-->
        </div>
        <!--End Heading Row-->

        <!--Start Contact Info-->
        <div class="contact-info">
            <!--Start Row-->
            <div class="row">
                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="icofont icofont-email gradient-bg-1 color-white"></i>
                        <p>support@email.com <br> example@email.com</p>
                    </div>
                </div>
                <!--End Contact Info Single-->

                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.2s">
                        <i class="icofont icofont-phone gradient-bg-1 color-white"></i>
                        <p>+11 012345 6789 <br> +22 012345 6789</p>
                    </div>
                </div>
                <!--End Contact Info Single-->

                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="icofont-google-map gradient-bg-1 color-white"></i>
                        <p>345, Mountain View, <br> New York, USA</p>
                    </div>
                </div>
                <!--End Contact Info Single-->

                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.4s">
                        <i class="icofont-skype gradient-bg-1 color-white"></i>
                        <p>support.live <br> livesupport24</p>
                    </div>
                </div>
                <!--End Contact Info Single-->
            </div>
            <!--End Row-->
        </div>
        <!--End Contact Info-->

        <!--Start Contact Form Content-->
        <div class="contact-form-content">
            <!--Start Row-->
            <div class="row">
                <!--Start Contact Form-->
                <div class="col-md-6">
                    <div class="contact-form">
                        <?php 
                        if( !empty($howwork['title']) ) printf('<h3 class="font-600 text-center">%s</h3>', $howwork['title'] ); 
                        ?>
                        <form action="http://themehoster.com/rp/zeeper/mailer/config.php" method="post" id="ajax-contact">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="10" placeholder="Write Your Message"></textarea>
                            </div>
                            <div class="contact-btn">
                                <button class="font-500 gradient-bg-1 color-white" type="submit">Submit</button>
                            </div>
                        </form>
                        <div id="form-messages"></div>
                    </div>
                </div>
                <!--End Contact Form-->

                <!--Start Google Map-->
                <div class="col-md-6">
                    <div class="google-map">
                        <h3 class="font-600 text-center">Find Us In Google Map</h3>
                        <?php 
                        if( !empty($howwork['title']) ) printf('<h3 class="font-600 text-center">%s</h3>', $howwork['title'] ); 
                        ?>
                        <div id="map"></div>
                    </div>
                </div>
                <!--End Google Map-->
            </div>
            <!--End Row-->
        </div>
        <!--End Contact Form Content-->
    </div>
    <!--End Container-->
</section>
<!--End Contact Section-->
<?php endif; ?>