<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mozita
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mozita</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!---bootsrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

   
<!----preloader-->
    <div class="loader" id="preloader">
      <img src="<?php echo get_template_directory_uri(); ?>/resources/images/pre-loader.gif" alt="pre-loader" class="gif_video">
   </div>
<!-----end preloader-->




<!---top header line-->
    <div class="head_res" id="menu">
        <div class="row">
           <div  class="col-md-8">
              <ul class="social_icon_res">
                <li><a href="#"><i class="fa fa-envelope-o"></i>  &nbsp <?php the_field('company_email','option');?></a></li>
                <li><a href="#"><i class="fa fa-map-o"></i>  &nbsp <?php the_field('company_address','option');?></a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i> &nbsp <?php the_field('avaliblity','option');?></a></li>
              </ul>
           </div>
           <div  class="col-md-4">
            <ul class="email_call_res">
               <!--li> <i class="fa fa-search"></i>&nbsp&nbsp<input type="text" placeholder="Search.."> </li> 
               <li> &nbsp&nbsp | &nbsp&nbsp </li--->
               <?php if( have_rows('social_media','option') ): ?>
               
               <?php while( have_rows('social_media','option') ): the_row();?>
                 
                  <li><a href="<?php the_sub_field('link'); ?>"><i class="<?php the_sub_field('icon'); ?>"></i> </a></li> 
               <?php endwhile; ?>
            <?php endif; ?>
            </ul>
         </div>
        </div>
     </div>
<!---end top header line-->

<!-- header -->
     <header>
<!-- header inner -->
        <div class="header-top">
           <div class="header">
              <div class="container-fluid">
                 <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8 col-8 logo_section">
                       <div class="full">
                          <div class="center-desk">
                             <div class="logo">
                                <a href="index.html"><img src="<?php the_field('company_logo','option');?>" alt="#" width="110px" /> </a>
                             </div>
                          </div>
                       </div>
                     </div>            
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-4">
                       <div class="menu-area">
                          <div class="limit-box">                             
                             <nav class="main-menu">
                              <input type="checkbox" id="check">
                              <label for="check" class="checkbtn">
                                  <i class="fa fa-bars"></i>
                              </label>
							  <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id' => 'main-menu', 
									'container' => 'ul', 
									'container_class'    => 'menu-area-main',
									
								)
							);
							?>
                                
                             </nav>
                          </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 ">
                     <div class="heading_icons">
                        <ul>
                           <!---li><button class="head_icon_btn"><i class="fa fa-heart icons"></i></button></li>
                           <li><button class="head_icon_btn"><i class="fa fa-cart-arrow-down icons"></i></button></li-->
                           <li> <a href="<?php echo get_home_url(); ?>/contact-us"><button class="head_services_btn" href="contact.html"> Request Quote<i class="fa fa-angle-right"></i></button></a></li>
                        </ul>
                     </div>
                  </div>
                 </div>
              </div>
            </div>
            </div>
            
<!-- end header inner -->
