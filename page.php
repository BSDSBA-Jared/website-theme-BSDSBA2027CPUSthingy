<!-- <!?php include 'includes/head.php' ?>
<!?php include 'includes/header.php' ?> -->




<!-- <body class="<!?php echo is_front_page() ? 'front_page' : '' ?>"> -->
<?php include 'includes/head.php'   ?>
<?php include 'includes/header.php'   ?>
<?php include 'includes/nav.php'   ?>
<?php include 'includes/banner.php'   ?>
<?php if (is_front_page()) {include 'includes/middle.php'; }  ?>





    <!-- Main -->
    <div id="main_area">
      <div class="wrapper">
        <div class="main_con">

          <main>
            <?php if(!is_front_page()) { ?><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}?><?php }?>

            <?php get_template_part( 'loop', 'page' ); ?>
            
          </main>

          <?php if (is_front_page()) {include 'includes/sidebar.php';}  ?>
        </div>
      </div>
    </div>
    <!-- End Main ff-->


    <?php if (is_front_page()) {include 'includes/bottom.php';}   ?>
    <?php include 'includes/footer.php'   ?>
