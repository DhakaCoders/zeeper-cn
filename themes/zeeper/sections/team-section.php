<?php
  $showhideteam = get_field('showhideteam', HOMEID);
  if( $showhideteam ):
    $team = get_field('teamsec', HOMEID);
    if( $team ):
?>
<!--Start Team Section-->
<section id="team" class="bg-gray">
    <!--Start Container-->
    <div class="container">
        <!--Start Heading Row-->
        <div class="row">
            <!--Start Heading Content-->
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="section-heading text-center">
                <?php 
                if( !empty($team['title']) ) printf('<h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">%s</h2>', $team['title'] ); 
                if( !empty($team['description']) ) printf('<p class="wow fadeInUp" data-wow-delay="0.2s">%s</p>', $team['description'] ); 
                ?>
                </div>
            </div>
            <!--End Heading Content-->
        </div>
        <!--End Heading Row-->
        <?php 
          $teams = $team['teams'];
          if( $teams ){
        ?>
        <!--Start Team Row-->
        <div class="row">
            <?php $i = 1; foreach( $teams as $teamrow ): ?>
            <!--Start Team Single-->
            <div class="col-md-3 col-sm-6">
                
                <div class="team-single fix wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                    <div class="team-member-img position-relative fix">
                        <?php if(!empty($teamrow['image'])): echo cbv_responsive_image_tag($teamrow['image']); endif; ?>

                        <?php if( !empty($teamrow['social_media']) ): ?>
                        <div class="team-social">
                            <ul>
                                <?php foreach( $teamrow['social_media'] as $smedia ): ?>
                                <li>
                                    <a href="<?php echo $smedia['link']; ?>">
                                        <i class="icofont-<?php echo $smedia['icon']; ?>"></i>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="team-member-info text-center fix">
                    <?php if( !empty($teamrow['name']) ) printf('<h4 class="font-600 m-0 color-base2">%s</h4>', $teamrow['name'] );?>
                    <?php if( !empty($teamrow['position']) ) printf('<p>%s</p>', $teamrow['position'] );?>
                    </div>
                </div>
            </div>
            <!--End Team Single-->
            <?php $i++; endforeach; ?>
        </div>
        <!--End Team Row-->
        <?php } ?>
    </div>
    <!--End Container-->
</section>
<!--End Team Section-->
<?php endif; ?>
<?php endif; ?>