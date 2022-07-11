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
   

  <!-----service 1----->
<about>
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/automotive.jpg">
         </div>
         <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="about_text">
               <h1>   
                  Automotive Repairs
               </h1>
               <p>
                  If your car requires repairs, we're the team for you. We'll do our best to give you a quick turnaround and a price that 
                  won't break the bank. With a huge selection of car and repair parts and a large team of technicians, we're ready to help 
                   you
               </p>
               <a href="Automotive Repairs.html"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</about>

<!-----service 2----->
<about>
   <div class="container">
      <div class="row">

         <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="about_text">
               </h3>
               <h1>   
                  Collision Repairs & Paint
               </h1>
               <p>
                  We can help you with a collision repair, a paint job, or both. We have the best people and the best equipment to make sure 
                  your car is fixed and looking great again.               </p>
               <a href="Collision.html"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/collision.jpg">
         </div>
      </div>
   </div>
</about>

<!-----service 3----->
<about>
   <div class="container">
      <div class="row">
         <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/hybrid.jpg">
         </div>
         <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="about_text">
               <h1>   
                  Hybrid repairs
               </h1>
               <p>
                  Our trained team specialises in hybrid vehicle care. With the help of our experts, we can have your hybrid vehicle in great 
                  shape and running at top speed in no time.
               </p>
               <a href="HybridR.html"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</about>


<!-----service 4----->
<about>
   <div class="container">
      <div class="row">
         <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
            <div class="about_text">
               <h1>   
                  Recritment Services               </h1>
               <p>
                  We provides range of tailor made talent sourcing solutions to match the present Human resource needs to candidates and New 
                  Zealand employers. A job opening is a stressful time for any business. Let us take some of the stress off your 
                  shoulders and help you find the perfect candidates.               </p>
               <a href="Recritment.html"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/recruitmnet.jpg">
         </div>
      </div>
   </div>
</about>
 
 
 
 
 <!-----countdown---->
 <!-- Fact Start --
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
                                  <h2 data-toggle="counter-up">170+</h2>
                                  <p>Workers</p>
                            </div>
                         </div>
                         <div class="col-6">
                            <div class="fact-icon">
                               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/003-shopping-cart.png">
                            </div>
                            <div class="fact-text">
                                  <h2 data-toggle="counter-up">99+</h2>
                                  <p>Stores</p>
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
                                  <h2 data-toggle="counter-up">813+</h2>
                                  <p>Top Clients</p>
                            </div>
                         </div>
                         <div class="col-6">
                            <div class="fact-icon">
                               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/004-badge.png">
                            </div>
                            <div class="fact-text">
                                  <h2 data-toggle="counter-up">59+</h2>
                                  <p>Awards</p>
                            </div>
                         </div>
                      </div>
                </div>
             </div>
          </div>
       </div>
    </counter>
 -- Fact End -->



<?php get_footer(); ?>