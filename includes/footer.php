<!--Footer -->
<footer>
      <div class="footer_top">
        <div class="wrapper">

          <div class="gmap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35081.46905532465!2d123.90668414999999!3d10.325926699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99940ee6ed46b%3A0xbd7dddf03bef15c7!2sAyala%20Center%20Cebu!5e1!3m2!1sen!2sph!4v1741939281987!5m2!1sen!2sph"></iframe>
          </div>

          <div class="footer_top_con">

            <div class="footer_top_flex_holder">

              <div class="contact_info_ul">
                <?php dynamic_sidebar('contact_info_ul'); ?>
                
              </div>

              <div class="footer_logo_holder">
                <div class="footer_logo">
                  <a href="<?php //echo get_home_url(); ?>">
                    <figure><img src="<?php bloginfo('template_url');?>/images/footer-logo.png" alt="<?php //echo get_bloginfo('name');?>"></figure>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer_btm">
        <div class="wrapper">
          <div class="footer_btm_con">
            <div class="footer_nav">
              <!--?php wp_nav_menu( array('theme_location' => 'secondary' ) ); ?-->
              <ul>
                <li class="current_page_item"><a href="index.php">Home</a></li>
                <li><a href="javscript:;">About Us</a></li>
                <li><a href="javscript:;">Services</a></li>
                <li><a href="javscript:;">Our Team</a></li>
                <li><a href="javscript:;">Careers</a></li>
                <li><a href="javscript:;">Blog</a></li>
                <li><a href="javscript:;">Contact Us</a></li>
              </ul>
            </div>

            <div class="copyright">
              &copy; Copyright
              <q>2025</q>
              <span class="privacy_policy"><a href="privacy-policy">Privacy Policy</a></span>
              <span class="copyright_text_block">Designed by Proweaver</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <span class="back_top"></span>

  </div>

  <script src="<?php bloginfo('template_url');?>/js/modernizr-custom-v2.7.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery-3.7.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery-migrate-3.5.0.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/calcheight.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/jquery.skitter.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/responsiveslides.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/wow.min.js"></script>

  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>

  <?php wp_footer(); ?>
</body>

</html>
<!-- End Footer -->