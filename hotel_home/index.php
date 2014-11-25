<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang=""en" xml:lang="en""> <![endif]-->
<!--[if gt IE 8]> <html class="no-js newie" lang='"en" xml:lang="en"'> <![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <title>Hotel Management Software</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <script src="js/modernizr-2.6.2.js"></script>

  <!-- <link rel="icon" type="image/png" href="favicon.png" /> -->
  

  <!--Internet Explorer 8 or older doesn't support media query. This script helps ie7 and ie8 to recognize media queries-->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

    
</head>
<body>
  <div id="preloader"></div>

  <div class="layout">


    <!-- BEGIN HEADER -->
    <header>
      <div class="container">
        <a href="#home_slider" id="logo">Hotel</a>
        <nav>
          <ul>
            <li><a href="#home_slider">Hotel</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#location">Find us</a></li>
            <li><a href="#contact">Be Connected</a></li>
          </ul> 
        </nav>
      </div>
    </header> 
    <!-- END HEADER -->
 

    <!-- BEGIN CONTENT -->
    <div class="content">

        <!-- Begin of #home_slider  --> 
        <section id="home_slider">
 
            <!-- Begin of  .cycle-slideshow --> 
            <div class="cycle-slideshow" 
              data-cycle-slides='.slide'
              data-cycle-next='> .cycle-next'
              data-cycle-prev='> .cycle-prev'
              data-cycle-timeout="114000"
              data-cycle-fx= "scrollHorz"
              >
            
              <div class='slide'>
                <img src="images/slider/img1.jpg" alt="">
                <div class="text_wrap">
                  <div class="text">
                    <div class="text_cell">
                      <h1>Best and beautiful most hotel in the heart of Dhaka</h1>
                      <h2>Deluxe and standard rooms</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class='slide'>
                <img src="images/slider/img2.jpg" alt="">
                <div class="text_wrap">
                  <div class="text">
                    <div class="text_cell">
                      <h1>10% accommodation discount</h1><br>
                      <h2>for guests that have visited us more than 10 times</h2>         
                    </div>                   
                  </div>
                </div>
              </div>
              <div class='slide'>
                <img src="images/slider/img3.jpg" alt="">
                <div class="text_wrap">
                  <div class="text">
                    <div class="text_cell">
                      <h1>We provide Company discount</h1>
                      <h2>Hotel offers certain contract defined discounts.</h2>         
                    </div>                   
                  </div>
                </div>
              </div>
              <div class='slide'>
                <img src="images/slider/img4.jpg" alt="">
                <div class="text_wrap">
                  <div class="text">
                    <div class="text_cell">
                      <h1>Deluxe rooms</h1>
                      <h2>Deluxe rooms in central Dhaka, with easy connection to Airport</h2>
                    </div>                   
                  </div>
                </div>
              </div>
              <div class='slide'>
                <img src="images/slider/img5.jpg" alt="">
                <div class="text_wrap">
                  <div class="text">
                    <div class="text_cell">
                      <h1>single rooms at affordable prices</h1>
                      <h2>Weekend package for 2 persons. Only BDT15,000 per night.</h2>         
                    </div>                   
                  </div>
                </div>
              </div>
            
              <div class="cycle-next main-slider-nav"></div>
              <div class="cycle-prev main-slider-nav"></div>
            </div>
            <!-- End of .cycle-slideshow  -->       
        </section>
        <!-- End of #home_slider  -->

        <!-- Begin of #services  --> 
        <section id="services">
          <div class="container">
            <form class="order" action="order_data.php" method="post" novalidate>
              <div class="text">
                <div class="wrap">
                  <div class="text_wrap">
                    <h1>Online Booking</h1>
                    <p>Make a reservation</p>
                  </div>
                </div>
              </div>
              <label class='medium first_inputs'>
                <span>Type of room:</span>
                <select class='select_white' name='type' >
                  <option disabled selected>Room Type</option> 
                  <option value="single">Single Bed</option>
                  <option value="double">Double Bed</option>
				  <option value="triple">Club suite</option>
                </select>              
              </label>    
              <label class='medium first_inputs'>
                <span>Check-in date:</span>
                <input type="text" class="datepicker" name='check_in'>
              </label>          
              <label class='medium first_inputs'>
                <span>Check-out date:</span>
                <input type="text" class="datepicker" name='check_out'>
              </label>          
              <label class='medium first_inputs'>
                <span>No. of Room:</span>
                <select class='select_white' name='rooms'>
                  <option disabled selected>0</option> 
                  <option>1</option>
                  <option>2</option>
				  <option>3</option>
				  <option>4</option>
                </select>              
              </label>   
              <label for="" class='button'>
                <span>book</span>
                <a href='#' class="btn">Book now</a>             
              </label>
              <div class="clearfix"></div>
              <div class="hidden_elements">
                <label for="" class='first_inputs'>
                  <span>First Name</span>
                  <input type="text" name='fname'>
                </label>
				<label for="" class='first_inputs'>
                  <span>Last Name</span>
                  <input type="text" name='lname'>
                </label>
                <label for="" class='first_inputs'>
                  <span>Email</span>
                  <input type="email" name='email1'>
                </label>				
                <label for="" class='textarea'>
                  <span>Details</span>
                  <textarea name='comments'></textarea>
                </label>
                <label for="" class='button submit'>
                  <span>book</span>
                  <button class="btn" type='submit'>Book now</button>
                </label>
                <div class="clearfix"></div>
              </div>
            </form>

            <div id="video_section">
         
                <h1>Hotel presentation</h1>
                <p><b>The Hotel</b> offer a variety of exciting, luxury and affordable packages including fantastic last minute rates, weekend leisure breaks and luxury romantic packages. Naturally summer party events, corporate christmas party packages, <b>luxury suite deals</b>.</p>

                <p>Our hotel is located directly opposite of BRAC University, Mohakhali, Dhaka!</p>
              </div>
            <ul>
              <li>
                <img src="images/img1.jpg" alt="">
                <h2>Single bed room at BDT10,000</h2>
                <p>Single bedroom with a kitchen, mini-fridge, bathroom with slippers and hair-dryer, LCD TV and free Wi-Fi.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p><br/><b>Room size:</b> 14 square meters. <br/><b>Beds:</b> Standard bed and the possibility of French bed room.</p>
                  <a href="" class="show_less">Show less</a>   
                </div>
              </li>
              <li>
                <img src="images/img1.jpg" alt="">
                <h2>Double bed room at BDT15,000</h2>
                <p>Double room with a kitchen, mini-fridge, bathroom with slippers and hair-dryer, LCD TV and free Wi-Fi.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p><br/><b>Room size:</b> 20 square meters. <br/><b>Beds:</b> Two beds or a double bed, according to your desires and vacancy.</p>
                  <a href="" class="show_less">Show less</a>
                </div>
              </li>
              <li>
                <img src="images/img1.jpg" alt="">
                <h2>Club suite at BDT20,000</h2>
                <p>Club suite with a kitchen, mini-fridge, bathroom with slippers and hair-dryer, LCD TV and free Wi-Fi.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p><br/><b>Room size:</b> 25 square meters. <br/><b>Beds:</b> 3 single beds or one double bed, according to your desires and vacancy.</p>
                  <a href="" class="show_less">Show less</a>   
                </div>
              </li>
            </ul>
          </div>
        </section>
        <!-- End of #services  -->

        <!-- Begin of #about  --> 
        <section id="about">
          <div class="container">
            <div class="header">
              <h1>Give us a chance to serve you.</h1>
              <p>Hotel offers you a pleasant and comfortable stay, and when you visit us you will see for yourself that there is nothing we cherish more than the quality of service and satisfaction of our guests.</p>
            </div>
            <ul>
              <li>
                <img src="images/img4.jpg" alt="">
                <h2>Dry cleaning and laundry</h2>
                <p>We offer the option of dry cleaning and washing your clothes.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p>Our service will provide you later than a few hours of receiving the of clothes, deliver washed and pressed clothes.</p>
                  <a href="" class="show_less">Show less</a>   
                </div>                
              </li>
              <li>
                <img src="images/img5.jpg" alt="">
                <h2>24-hour Room Service</h2>
                <p>Hotel room service is sure to make your stay a delight.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p>We can bring breakfast, dinner or a late night snack to you. </p>
                  <a href="" class="show_less">Show less</a>   
                </div>                
              </li>
              <li>
                <img src="images/img6.jpg" alt="">
                <h2>Wireless internet in rooms</h2>
                <p>The Hotel offers complementary WiFi anywhere in the hotel.</p>
                <a href="" class="read_more">Read more</a>
                <div class="hidden">
                  <p>Wireless internet connection with own laptop in the rooms and in the public areas are available.</p>
                  <a href="" class="show_less">Show less</a>   
                </div>                
              </li>
            </ul>
          </div>
        </section>
        <!-- End of #about  -->

        <!-- Begin of #gallery  --> 
        <section id="gallery">
          <div class="container">
            <div class="header">
              <h1>Pictures of Hotel</h1>
              <p>See pictures of our Hotel with all the features and activities. Click on the image to see larger resolution.</p>
            </div>
          </div>
          <div class="gallery_wrap">
             <ul class="flexisel">
              <li>
                <a href='images/gallery/img1_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img1.jpg" alt="">
                </a>
              </li>
              <li>
                <a href='images/gallery/img2_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img2.jpg" alt="">
                </a>
              </li>
              <li>
                <a href='images/gallery/img3_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img3.jpg" alt="">
                </a>
              </li>
              <li>
                <a href='images/gallery/img4_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img4.jpg" alt="">
                </a>
              </li>
              <li>
                <a href='images/gallery/img5_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img5.jpg" alt="">
                </a>
              </li>
              <li>
                <a href='images/gallery/img6_large.jpg' rel='prettyPhoto[pp_gal]'>
                  <img src="images/gallery/img6.jpg" alt="">
                </a>
              </li>

            </ul>
          </div>
        </section>
        <!-- End of #gallery  -->

        <!-- Begin of #location  --> 
        <section id="location">
          <h1>Our Location</h1>
          <div class="map_wrapper">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3651.0708527497914!2d90.40765780107702!3d23.780491158824702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1416751216559" width="100%" height="450" frameborder="0" style="border:0"></iframe></div>
            <div class="info"> 
              <h2>More info</h2>
              <div>
                <span><b>Address:</b> 66 Mohakhali</span>
                <span><b>Place:</b> Dhaka</span>
                <span><b>Phone:</b> +880-2-8824051-4</span>
                <span><b>Email:</b> support@hotel.com</span></div>
            </div>
          </div>
        </section>
        <!-- End of #location  -->

        <!-- Begin of #contact  --> 
        <section id="contact">
          <div class="container">
            <h1>Let us know about your experience!</h1>
            <form action="form_data.php" method="post" class='contact-form'>
              <label>
                <span>Name</span>
                <input type="text" name='name'>
              </label>
              <label class='email_label'>
                <span>Email</span>
                <input type="email" name='email'>
              </label>
			  <label for="" class='first_inputs'>
                  <span>Rating</span>
                  <select class='select_white' name='rating'>
					  <option selected>5</option>
					  <option>4</option>
					  <option>3</option>
					  <option>2</option>
					  <option>1</option>
                 </select>  
                </label>
              <label class='message_box'>
                <span>Review</span>
                <textarea name='message'></textarea>
              </label>
              <button type="submit" class="btn">Post Review</button>
            </form>
          </div>
        </section>
        <!-- End of #contact  -->

    </div>
    <!-- END CONTENT -->


    <div class='layout_footer'></div>
    
  </div> 


  <!-- BEGIN FOOTER -->
  <footer>
    <div class="container">
      <small>&copy; 2014 The Hotel. All Rights Reserved. Developed by <b>Group F</b></small>
      <nav class="right">
        <ul>
          <li><a href="#home_slider">Hotel</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </footer> 
  <!-- END FOOTER -->

  <!-- script for map -->
  

  <!-- JavaScript at the bottom for fast page loading -->
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery.autosize.js"></script>
  <script src="js/selectivizr-min.js"></script>
  <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/jquery.cycle2.min.js"></script>
  <script src="js/jquery.cycle2.carousel.min.js"></script>
  <script src="js/jquery.flexisel.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.inview.min.js"></script>
  <script src="js/jquery.validate.js"></script>

  <script src="js/init.js"></script>

  <!-- Make visible media queries to IE7 , IE8 (visible only on server or localhost) -->
    <script src="js/respond.src.js"></script>

    
</body>
</html>
