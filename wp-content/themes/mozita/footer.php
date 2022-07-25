<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mozita
 */

?>
<!------footer----->
<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 widget">
            <h1><?php the_field('footer_block_01_title','option');?></h1>
               <p><?php the_field('footer_block_01_description','option');?>
               </p>
               <a href="<?php echo get_home_url(); ?>/contact-us" id="map"><button class="footer_btn btn">View Map<i class="fa fa-map-marker"></i></button></a>
            </div>
         <!--div class="col-lg-4 col-md-4 col-sm-12 widget">
            <h1>Recent Posts</h1>
            <p>Conveniently integrate proactive resources after flexible total linkage. Globally 
               reintermediate unique value with client-centric interfaces. Holisticly repurposee.</p>
         </div-->
         <div class="col-lg-6 col-md-6 col-sm-12 widget">
            <h1><?php the_field('footer_block_02_title','option');?></h1>               
               <li><a href="#"><i class="fa fa-envelope-o"></i>  &nbsp <?php the_field('company_email','option');?></a></li>
               <li><a href="#"><i class="fa fa-map-o"></i>  &nbsp <?php the_field('company_address','option');?></a></li>
               <li><a href="#"><i class="fa fa-phone"></i>  &nbsp <?php the_field('comapany_telephone','option');?></a></li>
         </div>
      </div>
   </div>

   <div class="line">
         <div class="scroll_top"> 
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>         
         </div>

      <div class="col-lg-6 col-md-10 col-sm-10">
         <p>Copyright © <script>document.write(new Date().getFullYear())</script> <a href="#"> Mozita</a>. Website Powered by <a href="https://yogeemedia.com/" target="_blank">YogeeMedia</a></p>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/footer-payment.png">
      </div>
</footer>
<!--------end footer------>
<!--preloader-->
   <script>
      var loader = document.getElementById("preloader");

      window.addEventListener("load", function(){
         loader.style.display = "none";
      })
   </script>
<!----preloader end-->


<!----services owl carousel---->
   <script>
      $(".carousel").owlCarousel({
         margin:10,
         loop:true,
         autoplay:true,
         autoplayTimeout:2000,
         autoplayHoverPause:true,
         responsive:{
            0:{
               items:1,
               nav:false
            },
            600:{
               items:2,
               nav:false
            },
            1000:{
               items:3,
               nav:false
            }
         }
      })
   </script>
<!-----end services owl carousel----->
 
<!------counter-->
<script src="<?php echo get_template_directory_uri(); ?>/resources/js/counterup/counterup.min.js"></script>
<!----end counter-->


<script>
   //Get the button
   var mybutton = document.getElementById("myBtn");
   
   // When the user scrolls down 20px from the top of the document, show the button
   window.onscroll = function() {scrollFunction()};
   
   function scrollFunction() {
     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
       mybutton.style.display = "block";
     } else {
       mybutton.style.display = "none";
     }
   }

   // When the user clicks on the button, scroll to the top of the document
   function topFunction() {
     document.body.scrollTop = 0;
     document.documentElement.scrollTop = 0;
   }
</script>



<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script>
   // Handle Bootstrap carousel slide event
   $('.carousel').carousel({
      autoplay:true,
      interval:4000
   });
</script>


<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script type="text/javascript">
   $('.main-carousel').flickity({
  // options
  autoplay: true,
  interval: 2000,
  cellAlign: 'left',
  wrapAround: true,
  freeScroll: true,
});
</script>



<!----date---->
<script>
   var dt = new Date();
   document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
</script>



<?php wp_footer(); ?>

</body>
</html>
	