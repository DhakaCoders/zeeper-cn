<?php
  $showhidecontact = get_field('showhidecontact', HOMEID);
  if( $showhidecontact ):
    $contact = get_field('contactsec', HOMEID);
    if( $contact ):
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
                if( !empty($contact['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $contact['title'] ); 
                if( !empty($contact['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $contact['description'] ); 
                ?>
                </div>
                <!--End Heading-->
            </div>
            <!--End Heading Col-->
        </div>
        <!--End Heading Row-->
        <?php $coninfo = $contact['contact_info'];  ?>
        <!--Start Contact Info-->
        <div class="contact-info">
            <!--Start Row-->
            <div class="row">
                <!--Start Contact Info Single-->
                <?php if( !empty($coninfo['email_address_1']) OR !empty($coninfo['email_address_2'])): ?>
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="icofont icofont-email gradient-bg-1 color-white"></i>
                        <p>
                        <?php 
                        if(!empty($coninfo['email_address_1'])) printf('%s', $coninfo['email_address_1']);
                        if(!empty($coninfo['email_address_2'])) printf('<br> %s', $coninfo['email_address_2']);
                        ?>
                        </p>
                    </div>
                </div>
                <!--End Contact Info Single-->
                <?php endif; ?>
                <?php if( !empty($coninfo['telephone_1']) OR !empty($coninfo['telephone_2'])): ?>
                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.2s">
                        <i class="icofont icofont-phone gradient-bg-1 color-white"></i>
                        <p>
                        <?php 
                        if(!empty($coninfo['telephone_1'])) printf('%s', $coninfo['telephone_1']);
                        if(!empty($coninfo['telephone_2'])) printf('<br> %s', $coninfo['telephone_2']);
                        ?>
                        </p>
                    </div>
                </div>
                <!--End Contact Info Single-->
                <?php endif; ?>
                <?php if( !empty($coninfo['address'])): ?>
                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="icofont-google-map gradient-bg-1 color-white"></i>
                        <p>
                        <?php 
                        if(!empty($coninfo['address'])) printf('%s', $coninfo['address']);
                        ?>
                        </p>
                    </div>
                </div>
                <!--End Contact Info Single-->
                <?php endif; ?>
                <?php if( !empty($coninfo['skype_1']) OR !empty($coninfo['email_address_2'])): ?>
                <!--Start Contact Info Single-->
                <div class="col-sm-3">
                    <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.4s">
                        <i class="icofont-skype gradient-bg-1 color-white"></i>
                        <p>
                        <?php 
                        if(!empty($coninfo['skype_1'])) printf('%s', $coninfo['skype_1']);
                        if(!empty($coninfo['skype_2'])) printf('<br> %s', $coninfo['skype_2']);
                        ?>
                        </p>
                    </div>
                </div>
                <!--End Contact Info Single-->
                <?php endif; ?>
            </div>
            <!--End Row-->
        </div>
        <!--End Contact Info-->
        <?php $form = $contact['form']; ?>
        <!--Start Contact Form Content-->
        <div class="contact-form-content">
            <!--Start Row-->
            <div class="row">
                <!--Start Contact Form-->
                <div class="col-md-6">
                    <div class="contact-form">
                        <?php 
                        if( !empty($form['title']) ) printf('<h3 class="font-600 text-center">%s</h3>', $form['title'] ); 
                        if( !empty($form['shortcode']) ) echo do_shortcode( $form['shortcode'] ); 
                        ?>
                    </div>
                </div>
                <!--End Contact Form-->
                <?php $gmap = $contact['google_map']; ?>
                <!--Start Google Map-->
                <div class="col-md-6">
                    <div class="google-map">
                        <?php 
                        if( !empty($gmap['title']) ) printf('<h3 class="font-600 text-center">%s</h3>', $gmap['title'] ); 
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
<?php endif; ?>