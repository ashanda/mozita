<?php
/*
Template Name: Recritement
*
*/
 get_header();  ?>

<products>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/images/recruitmnet.jpg">
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="products_text">
               <h3>We provide you the best service
               </h3>
               <h1>   
                  Recritment <span class="span">Service</span>
               </h1>
               <p>
                Recruitment agencies are external firms that find suitable candidates for employers.   
                </p>
                <p>
                We provides range of tailor made talent sourcing solutions to match the present Human resource needs to candidates and New 
                Zealand employers. A job opening is a stressful time for any business. Let us take some of the stress off your 
                shoulders and help you find the perfect candidates.             </p>

 
               <a href="contact.html"><button class="products_btn btn"> Contact Us<i class="fa fa-angle-right"></i></button></a>
            </div>
         </div>
      </div>
   </div>
</products>

<!----------cards------->
<product_cards>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
            <div class="card">
               <div class="card_text">
                  <h1>Apply Now</h1>
              </div>
                  <form>
                     <div class="col-12 form-group">
                        <label>Name :</label>
                        <input type="text" id="Name" name="Name" class="form-control shadow fw-bold" placeholder="example">
                     </div>
                     <div class="col-12 form-group">
                        <label> Email :</label>
                        <input name="text" id="Email" name="Name" class="form-control shadow fw-bold" placeholder="abc@example.com">
                     </div>
                     <div class="col-12 form-group">
                        <label>Contact Number :</label>
                        <input type="text" class="form-control shadow fw-bold" placeholder="0000 000 000" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                     </div>
                     <div class="col-12 form-group">
                        <label>Application reference | Job title :</label>
                        <input name="title" id="title" name="title" class="form-control shadow fw-bold" placeholder="Ex - Mechanic">
                     </div>
                     <div class="col-12 form-group">
                        <label>Upload your CV :</label>
                        <input type="file" class="form-control shadow fw-bold" placeholder="Upload your CV">
                     </div>
                     <div class="col-12 form-group">
                        <button class="submit_btn btn">Submit <i class="fa fa-angle-right"></i></button>
                     </div>
                  </form>
               </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="card">
              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/recruiment.jpg">           
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



<!--------description product--
<products>
   <div class="container-fluid">
      <div class="row">
         
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="products_text">
               <h3>Grab your one soon
               </h3>
               <h1>   
                  Benifits of<span class="span"> Argan Oil</span>
               </h1>
               <p>
                  1. Contains Essential Nutrients<br/>
                  2. Has Antioxidant and Anti-Inflammatory Properties<br/>
                  3. May Boost Heart Health               <br/>
                  4. May Have Benefits for Diabetes<br/>
                  5. May Have Anticancer Effects        <br/>     
                  6. May Reduce Signs of Skin Aging          <br/>      
                  7. May Treat Some Skin Conditions               <br/>  
                  8. May Promote Wound Healing              <br/>
                  9. May Moisturize Skin and Hair                <br/>
                  10. Often Used to Treat and Prevent Stretch Marks   <br/>             
                  11. Sometimes Used to Treat Acne               <br/>
                  12. Easy to Add to Your Routine               <br/>
               </p>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <img src="images/product (2).jpg">
         </div>
      </div>
   </div>
</products-->


<?php get_footer(); ?>