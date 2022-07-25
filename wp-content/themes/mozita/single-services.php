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
   
<products>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php the_post_thumbnail_url(); ?>">
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="products_text">
               <h3><?php the_field('sub_title');?>
               </h3>
               <h1>   
                 <?php the_title();?>
               </h1>
               <?php the_content();?>

 
               <a href="<?php echo get_home_url(); ?>/contact-us"><button class="products_btn btn"> Contact Us<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</products>

<!----------cards------->
<product_cards>
   <div class="container-fluid">
      <div class="row">
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card">
               <div class="card_text">
                  <h1><?php the_field('left_side_title');?></h1>
              </div>
              <?php the_field('left_side_data');?>        
            </div>
         </div>

         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
            <div class="card">
            <?php the_field('right_side_data');?>
            
              <div class="card_text">
                  <h1><?php the_field('right_side_title');?></h1>
              </div>
            </div>
         </div>
      </div>
   </div>
</product_cards>



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




 
 
 
 


<?php get_footer(); ?>