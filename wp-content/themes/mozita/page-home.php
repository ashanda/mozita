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
     <div class="carousel-item active" data-ride="carousel">
      
       <img src="<?php echo get_template_directory_uri(); ?>/resources/images/1.jpg">
       <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/1 - Copy.jpg">
         <div class="carousel-caption text-left fade-in-text">
            <h3>
               Best Service
            </h3>
            <h1>   
               Experienced<br/>
               Mechanics
            </h1>
            <p>
               It's not just our experience, at according auto service we provide you <br/>the 
            best service worth for the price in town.</h3>
            </p>
            <button class="banner_btn btn" a href="services.html" > Read more Details<i class="fa fa-angle-right"></i></button>

         </div>   
     </div>
     <div class="carousel-item" data-ride="carousel">

       <img src="<?php echo get_template_directory_uri(); ?>/resources/images/2.jpg" >
       <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/2 - Copy.jpg">

       <div class="carousel-caption text-left dark_h  fade-in-text">
         <h3>
            We provide
         </h3>
         <h1>   
            Collision<br/>
            Repair Services
         </h1>
         <p>
            Restoration or repair of damage to a motor vehicle resulting from collision or other occurrence.  </h3>
         </p>
         <a href="services.html"><button class="banner_btn btn" > Read more Details<i class="fa fa-angle-right"></i></button></a>

       </div>   
     </div>
     <div class="carousel-item" data-ride="carousel">
      <div class="notice">
         <span id="datetime"></span>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/resources/images/3.jpg">
      <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/3 - Copy.jpg">

      <div class="carousel-caption text-left  fade-in-text">
        <h3>
           Supportive & Understanding Staff
        </h3>
        <h1>   
           Hybrid <br/>
           Repair Services
        </h1>
        <p>
         In addition to general maintenance services, however, hybrid drivers face a few other common issues.<br/>
      Our staff will provie you the best services       </p>
      <a href="services.html"><button class="banner_btn btn" > Read more Details<i class="fa fa-angle-right"></i></button></a>

      </div>   
    </div>
    <div class="carousel-item" data-ride="carousel">
      <div class="notice">
         <span id="datetime"></span>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/resources/images/4.jpg">
      <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/4 - Copy.jpg">

      <div class="carousel-caption text-left dark_h  fade-in-text">
        <h3>
           We provide 
        </h3>
        <h1>   
            Career<br/>
           Opportunities
        </h1>
        <p>
         Are you looking for a new start-up for your life. Our aim is to provide<br/> more carrer opportunities for unemployed people.</h3>
        </p>
        <a href="services.html"><button class="banner_btn btn" > Read more Details<i class="fa fa-angle-right"></i></button></a>

      </div>   
    </div>
     <div class="carousel-item" data-ride="carousel">
      <div class="notice">
         <span id="datetime"></span>
      </div>
       <img src="<?php echo get_template_directory_uri(); ?>/resources/images/5.jpg" >
       <img class="img_response" src="<?php echo get_template_directory_uri(); ?>/resources/images/5 - Copy.jpg">

       <div class="carousel-caption text-left  fade-in-text">
         <h3>
            Pure Organic
         </h3>
         <h1>   
            Best<br/>
            Argan Oil
         </h1>
         <p>
            Naturally scented Argan Oil is best for skin problems where inflammation <br/>may be a problem or a “blotchy” 
            complexion. Genuine Argan Oil is grown organically.
         </h3>
         </p>
         <a href="shop.html"><button class="banner_btn btn" > Read more Details<i class="fa fa-angle-right"></i></button></a>

       </div>   
     </div>
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
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/about img (2).jpg">
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="about_text">
               <h3>Do You Know Us?
               </h3>
               <h1>   
                  Welcome to <span class="span">Mozita Group New Zealand</span>
               </h1>
               <p>
                  Mozita group has been a trusted Christchurch business, providing excellent services and competitive prices. We pride ourselves in our 
                  range of recruitment services, automotive service & repairs, Collision repair & paint, hybrid vehicle repairs and have long served our
                   community with trustworthy and high-quality work.
               </p>
               <a href="about.html"><button class="about_btn btn"> Read More<i class="fa fa-angle-right"></i></button></a>
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
            <h1>Our Services</h1>
            <p>Get in touch today about how we can help you, or browse the services we offer below.</p>
         </div>  
         <div class="main-carousel">
            <div class="cell">
               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/s1.jpg">
               <h1>Automotive Repairs </h1>
               <p class="service-overlay"> <span>Automotive Repairs</span><br/>
               </p>
               <p class="service-overlay">
                  If your car requires repairs, we're the team for you. We'll do our best to give you a quick turnaround and a price that 
                     won't break the bank. With a huge selection of car and repair parts and a large team of technicians, we're ready to help 
                      you<br/>
               </p>
               <p class="service-overlay">
                  <a href="Automotive Repairs.html"><button class="services_btn btn">View Service<i class="fa fa-angle-right"></i></button></a>
               </p>
            </div>
            <div class="cell">
               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/s2.jpg">
               <h1> Collision Repairs & Paint</h1>
               <p class="service-overlay"> <span>Collision Repairs & Paint</span><br/>
               </p>
               <p class="service-overlay">We can help you with a collision repair, a paint job, or both. We have the best people and the best equipment to make sure 
                  your car is fixed and looking great again.<br/>
               </p>
               <p class="service-overlay">
                  <a href="Collision.html"><button class="services_btn btn">View Service<i class="fa fa-angle-right"></i></button></a>
               </p>
            </div>
            <div class="cell">
               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/s3.jpg">
               <h1>Hybrid Repairs</h1>
               <p class="service-overlay"> <span>Hybrid Repairs</span><br/>
               </p>
                   <p class="service-overlay">Our trained team specialises in hybrid vehicle care. With the help of our experts, we can have your hybrid vehicle in great 
                              shape and running at top speed in no time.<br/>
                   </p>
                   <p class="service-overlay">
                     <a href="HybridR.html"><button class="services_btn btn">View Service<i class="fa fa-angle-right"></i></button></a>
                  </p>
            </div>
            <div class="cell">
               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/s4.jpg">
               <h1>Recritment Services</h1>
               <p class="service-overlay"> <span>Recritment Services</span><br/>
               </p>
               <p class="service-overlay">We provides range of tailor made talent sourcing solutions to match the present Human resource needs to candidates and New 
                  Zealand employers. A job opening is a stressful time for any business. Let us take some of the stress off your 
                  shoulders and help you find the perfect candidates.<br/>
               </p>
               <p class="service-overlay">
                  <a href="Recritment.html"><button class="services_btn btn">View Service<i class="fa fa-angle-right"></i></button></a>
               </p>
            </div>
            <div class="cell">
               <img src="<?php echo get_template_directory_uri(); ?>/resources/images/s5.jpg">
               <h1>Argon Oil</h1>
               <p class="service-overlay"> <span>Argon Oil</span><br/>
               </p>
               <p class="service-overlay">Argan oil has been used for centuries for a variety of culinary, cosmetic and medicinal purposes. It is rich in essential nutrients, antioxidants and anti-inflammatory compounds. 
                  Early research indicates that argan oil may help prevent chronic illnesses, including heart disease, diabetes and cancer.<br/>
               </p>
               <p class="service-overlay">
                  <a href="shop.html"><button class="services_btn btn">Shop Now<i class="fa fa-angle-right"></i></button></a>
               </p>
            </div>
         
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
                                 <h2 data-toggle="counter-up">170+</h2>
                                 <p>Workers</p>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="fact-icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/png/005-electric-car.png">
                           </div>
                           <div class="fact-text">
                                 <h2 data-toggle="counter-up">99+</h2>
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
<!-- Fact End -->
 
<!-----testimonals---->
   <testimonals>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h1>Client's Reviews</h1>
            <p>Dramatically target proactive infrastructures before interactive growth strategies. Compellingly fashion global leadership 
               skills and multidisciplinary infrastructures.</p>
            </div>
         </div>


         <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">

                <div class="row">
                    <div class="col-md-6">      
                      <div class="p-3">
                        <ul class="testimonial-list">
                          <li>
                           
                             <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       
                               <div class="d-flex flex-row align-items-center">
       
                                 <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
       
                                 <div class="d-flex flex-column ml-2">
       
                                   <span class="font-weight-normal">Milton Austin</span>
                                   <span>Sales Manager, Stack</span>
                                   
                                 </div>
                                 
                               </div>
                               
                             </div>   
                          </li>
       
                          <li>
                           <div class="card p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       
                               <div class="d-flex flex-row align-items-center">
       
                                 <img src="https://i.imgur.com/udGH5tO.jpg" width="50" class="rounded-circle">
       
                                 <div class="d-flex flex-column ml-2">
       
                                   <span class="font-weight-normal">John Reeves</span>
                                   <span>Head of Sales, Asana</span>
                                   
                                 </div>
                                 
                               </div>
                               
                             </div> 
                          </li>
       
                          <li>
                           <div class="card p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       
                               <div class="d-flex flex-row align-items-center">
       
                                 <img src="https://i.imgur.com/Uz4FjGZ.jpg" width="50" class="rounded-circle">
       
                                 <div class="d-flex flex-column ml-2">
       
                                   <span class="font-weight-normal">Luke Harper</span>
                                   <span>Sales Team Lead,Sketch</span>
                                   
                                 </div>
                                 
                               </div>
                               
                             </div> 
                          </li>
       
                        </ul>
                        </div>
                    </div>
       
                    <div class="col-md-6">
                     <div class="p-3 testimonials-margin">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>It was a great experience</h4>
                                <div class="ratings">
       
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 
                                  
                                </div>
       
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
       
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>Thanks for this great service</h4>
                                <div class="ratings">
       
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                  
                                </div>
       
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
       
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <h4>You all are awesome thanks alot</h4>
                                <div class="ratings">
       
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                  
                                </div>
       
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            </div>
                        </div>
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
            <form>
               <div class="col-12 form-group">
                  <label for="brandName" class="lable">Email </label>
                  <input type="text" id="Email" name="Email" class="form-control shadow fw-bold" placeholder="email@example.com">
               </div>
               <div class="col-12 form-group">
                  <label for="sizeSelect" class="lable">Input your Brand name</label>
                  <input type="text" id="brandName" name="brandName" class="form-control shadow fw-bold" placeholder="Brand Name">
               </div>
               <div class="col-12 form-group">
                  <label class="lable">I Need</label>
               </div>
               <div class="col-12">
                  <input type="radio" id="service" name="wheelType" checked="checked">
                  <label for="readyMadeWheel" class="lable">Repair my vehicle</label> &nbsp
                  <input type="radio" id="service" name="wheelType">
                  <label for="customMadeWheel" class="lable">Get an Estimate</label> &nbsp
                  <input type="radio" id="service" name="wheelType">
                  <label for="customMadeWheel" class="lable">WOF</label>

               </div>
               <div class="col-12 form-group">
                  <label for="apNumber" class="lable">Your phone number</label>
                  <input type="text" class="form-control shadow fw-bold" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
               </div>
               <div class="col-12 form-group">
                  <button class="submit_btn btn">Submit Now <i class="fa fa-angle-right"></i></button>
               </div>
            </form>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="form_text">
               <h3>50% off services for first time
               </h3>
               <h1>   
                  Get a Service
               </h1>
               <p>
                  Dramatically target proactive infrastructures before interactive growth strategies. Compellingly fashion global leadership uthoritatively expedite performance based manufactured products and high standards
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
                  <div class="col-lg-4 col-md-4 col-sm-12" >
                        <div class="blog-item" >
                           <div class="blog-img">
                              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/collision.jpg" alt="Image">
                           </div>
                           <div class="blog-title" >
                              <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ex earum minima nulla vel quo non facilis  </h3>
                              <a href="#">Read more <i class="fa fa-angle-right"></i></a><br/><br/>
                           </div>
                           <div class="blog-text">
                              <p>
                                 <i class="fa fa-folder"> Wheel Alignment</i> &nbsp&nbsp | &nbsp&nbsp <i class="fa fa-user"> John Smith</i>
                              </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12" >
                     <div class="blog-item" >
                        <div class="blog-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/resources/images/automotive.jpg" alt="Image">
                        </div>
                           <div class="blog-title">
                              <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ex earum minima nulla vel quo non facilis </h3>
                              <a href="#">Read more <i class="fa fa-angle-right"></i></a> <br/><br/>
                           </div>
                           <div class="blog-text">
                              <p>
                                 <i class="fa fa-folder"> Wheel Alignment</i> &nbsp&nbsp | &nbsp&nbsp <i class="fa fa-user"> John Smith</i>
                              </p>
                           </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12" >
                     <div class="blog-item" >
                        <div class="blog-img">
                           <img src="<?php echo get_template_directory_uri(); ?>/resources/images/collision.jpg" alt="Image">
                        </div>
                           <div class="blog-title">
                              <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda ex earum minima nulla vel quo non facilis </h3>
                              <a href="#">Read more <i class="fa fa-angle-right"></i></a> <br/><br/>
                           </div>
                           <div class="blog-text">
                              <p>
                                 <i class="fa fa-folder"> Wheel Alignment</i> &nbsp&nbsp | &nbsp&nbsp <i class="fa fa-user"> John Smith</i>
                              </p>
                           </div>
                        </div>
                  </div>
                  
                  
               </div>
            </div>
   </blog>
  <!-- Blog End -->


<?php get_footer(); ?>