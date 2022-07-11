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
            <form>
               <h1>Send us a message</h1>
               <h3>Your email address will not be published
               </h3>
               <div class="col-12 form-group">
                  <input type="text" id="Name" name="Name" class="form-control shadow fw-bold" placeholder="Name">
               </div>
               <div class="col-12 form-group">
                  <input name="text" id="Email" name="Name" class="form-control shadow fw-bold" placeholder="Email">
               </div>
               <div class="col-12 form-group">
                  <input type="text" class="form-control shadow fw-bold" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
               </div>
               <div class="col-12 form-group">
                  <select name="sizeSelect" id="sizeSelect" class="form-select shadow fw-bold"><option value="none" selected="selected">Select Service</option>
                     <option value="Automotive Repairs">Automotive Repairs</option>
                     <option value="Collision Repair & Paint">Collision Repair & Paint</option>
                     <option value="Hybrid Services">Hybrid Services</option>
                     <option value="Study in New Zealand">Study in New Zealand</option>
                     <option value="Investment in New Zealand">Investment in New Zealand</option>
                     <option value="Work in New Zealand">Work in New Zealand</option>
                     <option value="Insuarance / WINZ Quote">Insuarance / WINZ Quote</option>
                     <option value="Director Contact">Director Contact</option>
                     <option value="Feedback or complaint">Feedback or complaint</option>

                  </select>
               </div>
               <div class="col-12 form-group">
                  <textarea rows = "3" cols = "50" name ="message"  placeholder="Message" class="form-control shadow fw-bold">
                  </textarea>
               </div>
               <div class="col-12 form-group">
                  <button class="submit_btn btn">Send Message <i class="fa fa-angle-right"></i></button>
               </div>
            </form>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="form_text">
               <h1>We are here for help you! Arrange a meeting.</h1>
               <p>Holisticly engage inexpensive architectures via high-quality solutions. Efficiently 
                  implement synergistic applications vis-a-vis best-of-breed ecommerce onotonectally enable client-based portals</p>
               <h3>Opening Hours</h3>
               <p>
                  Mon - Sat : 8.00am To 6.30pm
               </p>
               <h3>Address</h3>
               <p>101 Springs Rd, Hornby, Christchurch 8042.</p>
                <h3>Customer Supports</h3>
               <p>0800 820 820</p>
            </div>
               
         </div>
      </div>
   </div>
</contact>


<div class="map">
   <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?amp;hl=en&amp;q=101 Springs Rd, Hornby, Christchurch 8042.&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
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