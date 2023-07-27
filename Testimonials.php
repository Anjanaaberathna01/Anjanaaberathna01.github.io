<?php
session_start();
?>
<?php
$ltime=$_SESSION['logintime'];
$sduration=(time()-$ltime);



if($sduration>=30)
{
	header('location:logout.php');
}

if($_SESSION['status']==0)
{
	header('location:index.html');
}
$_SESSION['logintime']=time();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WeddingWing </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/hover-style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/Testimonials.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
           
            <a href="index.php" class="logo">WeddingWing</a>
            <a href="logout.php" class="login">LogOut</a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            
            <nav class="main-menu top-menu">
                <ul>
                   
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="active"><a href="Testimonials.php">Testimonials</a></li>
                    <li ><a href="contact.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->
        
        <div class="wrapper">
            <div class="box">
              <i class="fas fa-quote-left quote"></i>
              <p>We recently booked our wedding accommodation at through their website, and we couldn't be happier with
                 our experience. From the moment we made the reservation, the hotel staff went above and beyond to ensure
                  that our special day was perfect. The hotels were beautifully appointed, clean, and comfortable,
                   providing a luxurious retreat for us and our guests. The hotel's attention to detail was exceptional,
                    as they even surprised us with a personalized congratulatory note and a bottle of champagne in our 
                    suite. The location was ideal, with stunning views of, adding an extra touch of romance to our 
                    celebration. </p>
              <div class="content">
                <div class="info">
                  <div class="name">Alex Smith</div>
                  <div class="job">Designer | Developer</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-1.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="box">
              <i class="fas fa-quote-left quote"></i>
              <p>
                "We had the most amazing experience booking our wedding accommodation at. 
                From the moment we reached out to inquire about availability, the hotel staff demonstrated 
                exceptional professionalism and warmth. They worked closely with us to understand our needs and
                 preferences, ensuring that every detail was taken care of. The hotel itself was a dream venue for 
                 our special day. The elegant and tastefully decorated hotels provide a comfortable and luxurious retreat 
                 for our guests. The beautiful ballhotel, where our reception took place, was absolutely stunning and
                  exceeded all our expectations. </p>
              <div class="content">
                <div class="info">
                  <div class="name">Steven Chris</div>
                  <div class="job">YouTuber | Blogger</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-2.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="box">
              <i class="fas fa-quote-left  quote"></i>
              <p>We recently had the pleasure of booking our wedding accommodation at, and it was an absolute 
                delight from start to finish. The hotel staff displayed exceptional professionalism and genuine 
                care, making us feel special from the moment we walked through the door. The hotels were not only 
                luxurious and beautifully designed but also provided a sense of comfort and tranquility amidst the 
                wedding chaos. The hotel's attention to detail was remarkable. They went above and beyond to ensure 
                that everything was perfect for our big day. </p>
              <div class="content">
                <div class="info">
                  <div class="name">Kristina Bellis</div>
                  <div class="job">Freelancer | Advertiser</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-3.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
          
          <div class="wrapper">
            <div class="box">
              <i class="fas fa-quote-left quote"></i>
              <p>Our wedding at was an absolute dream come true, and we owe a great deal of gratitude to the incredible 
                staff and accommodations provided by the hotel. From the moment we began planning, the hotel's wedding 
                coordinator worked tirelessly to ensure that every detail of our special day was perfect. They listened 
                attentively to our vision and executed it flawlessly. The hotel itself was a stunning venue that exuded 
                elegance and charm. The beautifully decorated event spaces provided the perfect backdrop for our ceremony 
                and reception, and our guests were in awe of the breathtaking views offered by the hotel's picturesque 
                location. The accommodations were equally impressive. The hotels were spacious, well-appointed, and 
                provided a luxurious retreat for us and our guests.</p>
              <div class="content">
                <div class="info">
                  <div class="name">Alex Smith</div>
                  <div class="job">Designer | Developer</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-1.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="box">
              <i class="fas fa-quote-left quote"></i>
              <p>Our wedding weekend at was an absolute fairytale, thanks to the exceptional accommodations and service 
                provided by the hotel. From the moment we stepped foot into the hotel, we were greeted with warmth and 
                professionalism that made us feel like royalty. The staff went above and beyond to ensure that every 
                aspect of our wedding was executed flawlessly. The hotel's event spaces were nothing short of 
                breathtaking, with elegant decor and stunning views that created a magical ambiance for our ceremony 
                and reception. Our guests were equally impressed with the luxurious accommodations and the attention to 
                detail that the hotel offered. The hotels were beautifully designed, providing a comfortable and inviting 
                retreat for our loved ones. </p>
              <div class="content">
                <div class="info">
                  <div class="name">Steven Chris</div>
                  <div class="job">YouTuber | Blogger</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-2.jpeg" alt="">
                </div>
              </div>
            </div>
            <div class="box">
              <i class="fas fa-quote-left  quote"></i>
              <p>
                "We had the most incredible wedding experience. From the moment we arrived, we were greeted with warmth 
                and hospitality. The hotel's stunning venue, coupled with its impeccable service, created an enchanting 
                atmosphere that made our celebration truly magical. The attention to detail and the luxurious 
                accommodations provided an unforgettable experience for us and our guests. Our wedding day was 
                a dream come true, thanks. We can't recommend them highly enough for creating lifelong memories."
              </p>
              <div class="content">
                <div class="info">
                  <div class="name">Kristina Bellis</div>
                  <div class="job">Freelancer | Advertiser</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="image">
                  <img src="images/profile-3.jpeg" alt="">
                </div>
              </div>
            </div>
          </div>
        
        
        
        
        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    
                        <div class="logo col-4">
                            <h1 style="color: #ffd700;">WeddingWing</h1>
 
                        </div>
                        <div class="col-4">
                          <h3 style="color: #ffd700;">Pages</h3>   
                        </div>
                        <div class=" col-4" >
                            <h3 style="color: #ffd700;">Join Us</h3>
                        </div>
                </div>
                <div class="row">
                    <div class="col-4">
                       <br> <p style="color: #ffd700;">All your wedding needs in one place.</p>
                    </div>
                    <div class="col-2">
                      
                         <a href="index.php" >About Us </a> <br>
                         <a href="index.php" >Contact Us</a> <br>
                         <a href="index.php" >Reviews</a>    
                            
                        
                    </div>
                    <div class="col-2">
                           
                        <a href="index.php" >Services</a><br>
                        <a href="index.php" >Gallery </a>  <br> 
                        <a href="index.php" >FAQs</a>    
                    
                
            </div>
                    <div class="social col-4" >
                        <br>
                        <a href=""><li class="fa fa-instagram"></li></a>
                        <a href=""><li class="fa fa-twitter"> </li></a>
                        <a href=""><li class="fa fa-facebook-f"> </li></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Vendor JavaScript File -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/stickyjs/sticky.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/tempusdominus/js/moment.min.js"></script>
        <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="js/jqBootstrapValidation.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
