<?php
  $showhidepricing = get_field('showhidepricing', HOMEID);
  if( $showhidepricing ):
    $pricingsec = get_field('pricingsec', HOMEID);
?>
<!--Start Pricing Section-->
<section id="pricing">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($pricingsec['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $pricingsec['title'] ); 
                if( !empty($pricingsec['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $pricingsec['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->

        <?php 
          $pricings = $pricingsec['pricings'];
          if( $pricings ){
        ?>
        <!--Start Pricing Row-->
        <div class="row">
            <?php $i = 1; foreach( $pricings as $pricerow ): ?>
            <!--Start Pricing Table-->
            <div class="col-md-3 col-sm-6">
                <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                    <div class="pricing-title">
                    <?php if( !empty($pricerow['title']) ) printf('<h3 class="font-700">%s</h3>', $pricerow['title'] ); ?>
                    </div>
                    <div class="price-amount">
                        <?php if( $pricerow['type'] == 'free' ){ ?>
                        <h2 class="font-700 color-base2">
                        <?php if( !empty($pricerow['free_duration']) ) printf('<span>%s</span>', $pricerow['free_duration']); ?>
                        </h2>
                        <?php 
                        } else {
                        ?>
                        <h2 class="font-700 color-base2">
                        <?php 
                            if( !empty($pricerow['price']) ){
                                $priceEx = explode('.', $pricerow['price']);
                                echo '<span>$</span> '.$priceEx[0].' <sup class="font-800">.'.$priceEx[1].'</sup>';
                            }else{
                                echo '<span>$</span> '.$pricerow['price'];
                            }
                        ?> 
                        <?php if( !empty($pricerow['duration']) ) printf('<sub class="font-600">/%s</sub>', $pricerow['duration']); ?>
                        </h2>
                        <?php } ?>
                    </div>
                    <?php  
                        $price_details = $pricerow['pricing_details']; 
                        if( $price_details ):
                    ?>
                    <div class="pricing-details">
                        <ul>
                            <?php foreach( $price_details as $pdetail ): ?>
                            <?php if( $pdetail['available'] == 'no'){ ?>
                                <li class="font-500 no"><?php echo $pdetail['title']; ?></li>
                            <?php } else { ?>
                                <li class="font-500"><?php echo $pdetail['title']; ?></li>
                            <?php } ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <div class="pricing-btn">
                    <?php 
                    if( !empty($pricerow['link']) ){
                        $slink = $pricerow['link'];
                    }else{
                        $slink = '#';
                    }
                    if( $pricerow['type'] == 'free' ){ 

                    ?>
                    <a class="font-600" href="<?php echo $slink; ?>">Start Trial</a>
                    <?php } else { ?>
                    <a class="font-600" href="<?php echo $slink; ?>">Start Now</a>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <!--End Pricing Table-->
            <?php $i++; endforeach; ?>
        </div>
        <!--End Pricing Row-->
        <?php } ?>
    </div>
    <!--End Container-->
</section>
<!--End Pricing Section-->
<?php endif; ?>