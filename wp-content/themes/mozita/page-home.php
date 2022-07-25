<?php
/*
Template Name: Home
*/
 get_header();  ?>

<div class="banner">
              
<div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
   <ul class="carousel-indicators">
     <li data-target="#demo" data-slide-to="0" class="active"></li>
     <li data-target="#demo" data-slide-to="1"></li>
     <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
     <li data-target="#demo" data-slide-to="4"></li>

   </ul>
   <div class="carousel-inner" >
      <div class="notice">
         <span id="datetime"></span>
      </div>
     <?php if( have_rows('banner_slider') ): 
    $i=0;
    $block_class;
    ?>
    <?php while( have_rows('banner_slider') ): the_row(); 
        $image = get_sub_field('slider_image');
        if($i==1){
            $block_class = 'active';
        }else{
            $block_class = '';
        }  
        ?>
        <div class="carousel-item <?php echo $block_class;?>" data-ride="carousel">
      
               <img src="<?php echo $image['url']; ?>">
               <img class="img_response" src="<?php echo $image['url']; ?>">
               <div class="carousel-caption text-left fade-in-text">
                  <h3>
                  <?php the_sub_field('title'); ?>
                  </h3>
                  <h1>   
                  <?php the_sub_field('sub_title'); ?>
                  </h1>
                  <p>
                  <?php the_sub_field('description'); ?></h3>
                  </p>
                  <button class="banner_btn btn" a href="<?php the_sub_field('button_link'); ?>" > <?php the_sub_field('button_text'); ?><i class="fa fa-angle-right"></i></button>

               </div>   
         </div>
            
           
    <?php 
   $i++;
   endwhile; ?>
    
<?php endif; ?>
     

     
     
    
     
   </div>
   <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#demo" data-slide="next">
     <span class="carousel-control-next-icon"></span>
   </a>
 </div>
         </div>
      </div>
     </header>
<!-- end header -->

















<!-----about----->
<about>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="<?php the_field('section_01_right_image'); ?>">
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about_text">
               <h3><?php the_field('section_01_title'); ?>
               </h3>
               <h1>   
               <?php the_field('section_01_sub_title'); ?> <span class="span"><?php the_field('section_01_colour_sub_title_'); ?></span>
               </h1>
               <p>
               <?php the_field('section_01_description'); ?>
               </p>
               <a href="<?php the_field('section_01_button_link'); ?>"><button class="about_btn btn"> <?php the_field('section_01_button_text'); ?><i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</about>
 
<!-------------------------------------------------------------services------------------------------------->
<services>

   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <h1><?php the_field('section_02_title'); ?></h1>
            <p><?php the_field('section_02_description'); ?></p>
         </div>  
         <div class="main-carousel">
         <?php if( have_rows('section_02_slider') ): ?>
            
            <?php while( have_rows('section_02_slider') ): the_row(); 
               $image = get_sub_field('service_image');
               ?>
                     <div class="cell">
                        <img src="<?php echo $image['url']; ?>">
                        <h1><?php the_sub_field('service_title'); ?></h1>
                        <p class="service-overlay"> <span><?php the_sub_field('service_title'); ?></span><br/>
                        </p>
                        <p class="service-overlay">
                        <?php the_sub_field('description'); ?><br/>
                        </p>
                        <p class="service-overlay">
                           <a href="<?php the_sub_field('button_link'); ?>"><button class="services_btn btn"><?php the_sub_field('button_text'); ?><i class="fa fa-angle-right"></i></button></a>
                        </p>
                     </div>
            <?php endwhile; ?>
            
         <?php endif; ?>
          </div>
         
      </div>
   </div>
</services> 





<!-----countdown---->
<!-- Fact Start -->
   <counter>
      <div class="fact">
         <div class="container-fluid">
            <div class="row counters">
               <div class="col-md-6 ">
                     <div class="row">
                        <div class="col-6">
                           <div class="fact-icon">
                                 <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/002-working.png">
                           </div>
                           <div class="fact-text">
                                 <h2 data-toggle="counter-up"><?php the_field('workers_count');?>+</h2>
                                 <p>Workers</p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="fact-icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/005-electric-car.png">
                           </div>
                           <div class="fact-text">
                                 <h2 data-toggle="counter-up"><?php the_field('service_count');?>+</h2>
                                 <p>Services</p>
                           </div>
                        </div>
                     </div>
               </div>
               <div class="col-md-6 ">
                     <div class="row">
                        <div class="col-6">
                           <div class="fact-icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/001-people.png">
                           </div>
                           <div class="fact-text">
                                 <h2 data-toggle="counter-up"><?php the_field('top_client_count');?>+</h2>
                                 <p>Top Clients</p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="fact-icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/004-badge.png">
                           </div>
                           <div class="fact-text">
                                 <h2 data-toggle="counter-up"><?php the_field('awards_count');?>+</h2>
                                 <p>Awards</p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </counter>
<!-- Fact End -->
 
<!-----testimonals---->
   <testimonals>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h1><?php the_field('main_title_01');?></h1>
            <p><?php the_field('description');?></p>
            </div>
         </div>


         <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">

                <div class="row">
                    <div class="col-md-6">      
                      <div class="p-3">
                      <?php if( have_rows('reviews') ): 
                        $i=0;
                        $expand;
                        ?>
                        <ul class="testimonial-list">
                        <?php while( have_rows('reviews') ): the_row(); 
                           if($i==0){
                              $expand='true';
                           }else{
                              $expand='false';
                           }
                           
                           ?>
                           <li>
                                <div class="card p-3" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="<?php echo $expand;?>" aria-controls="collapse<?php echo $i;?>">      
                                 <div class="d-flex flex-row align-items-center">
                                    <img src="<?php the_sub_field('client_avatar'); ?>" width="50" class="rounded-circle">
                                    <div class="d-flex flex-column ml-2">
                                    <span class="font-weight-normal"><?php the_sub_field('client_name'); ?></span>
                                    <span><?php the_sub_field('client_jobrole_and_country'); ?></span>
                                    </div>  
                                 </div> 
                              </div>     
                           </li>
                        <?php 
                     $i++;
                     endwhile; ?>
                        </ul>
                     <?php endif; ?>
                        </div>
                    </div>
       
                    <div class="col-md-6">
                     <div class="p-3 testimonials-margin">
                     <?php if( have_rows('reviews') ): 
                        $i=0;
                        $expand;
                        ?>
                        
                        <?php while( have_rows('reviews') ): the_row(); 
                           if($i==0){
                              $expand='show';
                           }else{
                              $expand='';
                           }
                           
                           ?>

                        <div id="collapse<?php echo $i;?>" class="collapse <?php echo $expand;?>" aria-labelledby="heading<?php echo $i;?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4><?php the_sub_field('review_title'); ?></h4>
                                <div class="ratings">
       
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 
                                  
                                </div>
       
                                <p><?php the_sub_field('review_decription'); ?></p>
                            </div>
                        </div>
                        <?php 
                     $i++;
                     endwhile; ?>  
                     <?php endif; ?>
                        </div>
       
                    </div>
       
            </div>
       
        </div>


      </div>
   </testimonals>
<!---------end testimonals----->



<!-----form----->
<forms>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <?php echo do_shortcode('[contact-form-7 id="99" title="Contact form 1"]'); ?>
            
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="form_text">
               <h3><?php the_field('sub_title'); ?>
               </h3>
               <h1>   
               <?php the_field('main_title_02'); ?>
               </h1>
               <p>
               <?php the_field('description_'); ?>
               </p>
               <div class="dates">
                  <div class="card">
                     <h3>
                        Days
                     </h3>
                     <p>
                        :
                     </p>
                  </div>
                  <div class="card">
                     <h3>
                        Hours
                     </h3>
                     <p>
                        :
                     </p>
                  </div>
                  <div class="card">
                     <h3>
                        Minutes
                     </h3>
                     <p>
                        :
                     </p>
                  </div>
               </div>
               <br/>
            </div>
         </div>
      </div>
   </div>
</forms>



<div class="hero">
   <div class="highway"></div>
   <div class="city"></div>
      <div class="car">
         <img src="<?php echo get_template_directory_uri(); ?>/resources/images/car.png">
      </div>
      <div class="wheel">
         <img src="<?php echo get_template_directory_uri(); ?>/resources/images/wheel.png" class="back-wheel">
         <img src="<?php echo get_template_directory_uri(); ?>/resources/images/wheel.png" class="front-wheel">
      </div>
</div>














 



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
                     $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 3,'orderby' => 'rand') );
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