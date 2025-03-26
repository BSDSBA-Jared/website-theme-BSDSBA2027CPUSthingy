
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( is_front_page() ) { ?>
   
    <h1 class="h1_title h2_title"><small>Hello And Welcome To </small> My Own<span> Theme</span> </h1>
 
  
  <?php }  ?> 


  <div class="entry-content"> 

    <?php the_content(); ?> 

    <!-- <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?> -->
    <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-content -->


</div><!-- #post-## -->
<?php endwhile; // end of the loop. ?>