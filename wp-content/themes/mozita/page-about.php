<?php
/*
Template Name: About us
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
                     About Us
                  </h1>
                  <h3>
                     <i class="fa fa-home"></i> Home > About us
                  </h3>
               </div>         
         </div>
      </div>
   </div>
</header>
   <!-- end header -->
   
     
<!-----about----->
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



<?php get_footer(); ?>