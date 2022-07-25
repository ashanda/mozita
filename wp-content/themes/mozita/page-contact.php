<?php
/*
Template Name: Contact
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
                  Contact Us
               </h1>
               <h3>
                  <i class="fa fa-home"></i> Home > Contact Us
               </h3>
            </div>         
      </div>
   </div>
</div>
</header>
<!-- end header -->






<!-----form----->
<contact>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            
               <h1>Send us a message</h1>
               <h3>Your email address will not be published
               </h3>
               
               <?php echo do_shortcode('[contact-form-7 id="112" title="Contact us"]'); ?>
            
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form_text">
               <h1>We are here for help you! Arrange a meeting.</h1>
               <p>Holisticly engage inexpensive architectures via high-quality solutions. Efficiently 
                  implement synergistic applications vis-a-vis best-of-breed ecommerce onotonectally enable client-based portals</p>
               <h3>Opening Hours</h3>
               <p>
                  <?php the_field('avaliblity','option');?>
               </p>
               <h3>Address</h3>
               <p><?php the_field('company_address','option');?></p>
                <h3>Customer Supports</h3>
               <p><?php the_field('comapany_telephone','option');?></p>
            </div>
               
         </div>
      </div>
   </div>
</contact>


<div class="map">
   <div class="mapouter"><div class="gmap_canvas">
   <?php the_field('google_map','option');?>
      </div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
</div>



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



<?php get_footer(); ?>