<!-- Banner -->
<div id="banner">

      <div class="wrapper">
        <div class="bnr_con">
        <?php if (is_front_page()) { ?>
          <div class="slider">
            <ul>
              <li><video loop muted playsinline autoplay>
                  <source src="<?php bloginfo('template_url');?>/images/video/video.mp4" type="video/mp4">
                </video></li>
            </ul>
          </div>

          <div class="bnr_info wow bounceInUp" data-wow-duration='2536ms'>
            <?php dynamic_sidebar('bnr_info'); ?>
            
          </div>
          
<?php } else { ?>
      <div class="non_ban">
        <div class="non_ban_img">
        <figure>
          <?php if(is_home() && is_author() && is_category() && is_tag() && is_single()) { ?>
          <?php if (has_post_thumbnail() ) {?>
          <?php the_post_thumbnail('full');?>
          <?php }else{ ?>
          <img src="<?php bloginfo('template_url');?>/images/non-home-banner.jpg" alt="DummyBannerAltValue" />
          <?php } ?>
          <?php } elseif (!is_home() && !is_author() && !is_category() && !is_tag() && !is_single() && has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail('full');?>
          <?php } else { ?>
          <img src="<?php bloginfo('template_url'); ?>/images/non-home-banner.jpg" alt="DummyBannerAltValue">
          <?php } ?>
          </figure>
        </div>
<?php } ?>

          
        </div>
      </div>
    </div>
    </div>
    <!-- End Banner -->