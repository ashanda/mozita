<?php
/*
Template Name: Blog
*/
 get_header();  ?>
<div class="inner_banner">
   <div class="notice">
      <span id="datetime"></span>
   </div>         
      <div class="sub_pg_img">
         <img src="<?php echo get_template_directory_uri(); ?>/resources/images/3 - Copy (2).jpg" >
         <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/3 - Copy.jpg">



            <div class="carousel-caption text-left  fade-in-text">
               <h1>   
                  Project
               </h1>
               <h3>
                  <i class="fa fa-home"></i> Home > Project
               </h3>
            </div>         
      </div>
   </div>
</div>
</header>
<!-- end header -->



<!-----------blog-------->
<blog>
    <div class="container" >
    <div class="row">
       <div class="col-md-12">
                <h1>Our Projects </h1>
       </div>
    </div>
       <div class="row" >
       <?php
                     $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => -1,'orderby' => 'rand') );
                     if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
                        ?>
                  <div class="col-lg-4 col-md-4 col-sm-12" >
                        <div class="blog-item" >
                           <div class="blog-img">
                              <img src="<?php echo $featured_img_url; ?>" alt="Image">
                           </div>
                           <div class="blog-title" >
                              <h3><?php echo get_the_frontpage_excerpt(119); ?></h3>
                              <br/><br/>
                           </div>
                           <div class="blog-text">
                              <p>
                                 <i class="fa fa-folder"><?php the_field('job');?></i> &nbsp&nbsp | &nbsp&nbsp <i class="fa fa-user"> <?php the_field('client_name');?></i>
                              </p>
                              </div>
                        </div>
                  </div>
                  <?php endwhile;
                     endif;
                     wp_reset_postdata();
                  ?>
         
         
         
         
         
          
          
       </div>
    </div>
</blog>
<!-- Blog End -->




<?php get_footer(); ?>