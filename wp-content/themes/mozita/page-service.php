<?php
/*
Template Name: Service
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
                  Services
               </h1>
               <h3>
                  <i class="fa fa-home"></i> Home > Services
               </h3>
            </div>         
      </div>
   </div>
</div>
</header>
<!-- end header -->
   
<center>
  <!-----service 1----->
  <?php
    $args = array(
        'post_type' => 'services',
        'order' => 'ASC',
    );

    $post_query = new WP_Query($args);
    $i=1;
    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            ?>
            <?php if($i % 2 == 0){?>
               <about>
                  <div class="container">
                     <div class="row">

                        <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12">
                           <div class="about_text">
                              </h3>
                              <h1>   
                                 <?php the_title(); ?>
                              </h1>
                              
                              <?php echo get_the_servicepage_excerpt(119); ?>
                              <a href="<?php the_permalink(); ?>"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                           <img src="<?php echo $featured_img_url; ?>">
                        </div>
                     </div>
                  </div>
               </about>
            <?php }else{ ?>
               <about>
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                           <img src="<?php echo $featured_img_url; ?>">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                           <div class="about_text">
                              <h1>   
                              <?php the_title(); ?>
                              </h1>
                              <?php echo get_the_servicepage_excerpt(119); ?>
                              <a href="<?php the_permalink(); ?>"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </about>
            <?php } ?>
            
            <?php
            $i++;
            }
        }
?>



</center>
 
 
 
 


<?php get_footer(); ?>