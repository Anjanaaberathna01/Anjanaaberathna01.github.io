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
        <title>WeddingWing</title>
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
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="css/hover-style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
           
            <a href="home.php" class="logo">WeddingWing</a>
            <a href="logout.php" class="login">LogOut</a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            
            <nav class="main-menu top-menu">
                <ul>
                   
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="Testimonials.php">Testimonials</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    <li><a href="userac.php">MY Account</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->
        
        <!-- Header Slider Start -->
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider/1.jpg" alt="WeddingWing">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">hotel booking</h1>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="img/slider/2.jpg" alt="WeddingWing">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInLeft">wedding planning</h1>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/slider/3.jpg" alt="WeddingWing">
                    <div class="carousel-caption">
                        <h1 class="animated fadeInRight">successful marriage</h1>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Header Slider End -->
        
        <!-- Search Section Start -->
        <div id="search">
            <div class="container">
                <div class="form-row">
                    <div class="control-group col-md-3">
                        <label>District</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-3" data-target-input="nearest">
                                <!-- District Select list -->
                                   <select class="custom-select" id="country" name="country">
                                         <option>Select District</option>
                                         <option value="AF">Ampara</option>
                                         <option value="AX">Anuradhapura</option>
                                         <option value="AL">Badulla</option>
                                         <option value="DZ">Batticaloa</option>
                                         <option value="AS">Colombo</option>
                                         <option value="AD">Galle</option>
                                         <option value="AO">Gampaha</option>
                                         <option value="AI">Hambantota</option>
                                         <option value="AQ">Jaffna</option>
                                         <option value="AG">Kalutara</option>
                                         <option value="AR">Kandy</option>
                                         <option value="AM">Kegalle</option>
                                         <option value="AW">Kilinochchi</option>
                                         <option value="AU">Kurunegala</option>
                                         <option value="AT">Mannar</option>
                                         <option value="AZ">Matale</option>
                                         <option value="BS">Matara</option>
                                         <option value="BH">Moneragala</option>
                                         <option value="BD">Mullaitivu</option>
                                         <option value="BB">Nuwara Eliya</option>
                                         <option value="BY">Polonnaruwa</option>
                                         <option value="BE">Puttalam</option>
                                         <option value="BZ">Ratnapura</option>
                                         <option value="BJ">Trincomalee</option>
                                         <option value="BM">Vavuniya</option>
    
                                    </select>
                                 
                                
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <label>Date</label>
                        <div class="form-group">
                            <div class="input-group date" id="date-4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#date-4"/>
                                <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <div class="form-row">
                            <div class="control-group col-md-6">
                                <label>Adult</label>
                                <input type="number" name="custom-select" class="custom-select">
                            </div>
                            <div class="control-group col-md-6 kid">
                                <label>Kid</label>
                                <input type="number" name="custom-select" class="custom-select">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="control-group col-md-3">
                        <button class="btn btn-block">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Welcome to WeddingWing </h3>
                <p>
                    You have come to the right place to make your wedding the way you like it.
                    All you have to do is find the right partner. Everything else is from us in one place
                </p>
                <a href="payment.php">Book Now</a>
            </div>
        </div>
        <!-- Welcome Section End -->
        
        <!-- Amenities Section Start -->
        <div id="amenities" class="home-amenities">
            <div class="container">
                <div class="section-header">
                    <h2>Amenities & Services</h2>
                    <p>
                        Experience an elegant and luxurious wedding celebration in our sophisticated venue, 
                        where every detail is exquisitely tailored to create an unforgettable experience
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-2"></i>
                        <h3>Wedding-Hall</h3>
                        <p>You can select the wedding hall.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-3"></i>
                        <h3>Event-Planer</h3>
                        <p>You can select the top-level event planners.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-4"></i>
                        <h3>Air Conditioner</h3>
                        <p>You can choose either AC or NON-AC.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-6"></i>
                        <h3>Packages</h3>
                        <p>You can select packages.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                       
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-7"></i>
                        <h3>WiFi</h3>
                        <p>Free WiFi.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-9"></i>
                        <h3>Mini Bar</h3>
                        <p>You can arrange a Mini Bar.</p>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Amenities Section Start -->
        
        <!-- hotel Section Start -->
        <div id="hotels">
            <div class="container">
                <div class="section-header">
                    <h2>Our Packages</h2>
                    <p>
                        We have several packages for you based on your needs. Get the most suitable package for you.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hotel-img">
                                    <div class="box12">
                                        <img src="img/hotel-slider/Royal Celebration 4.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Royal Celebration</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id-royal"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hotel-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id-royal">Royal Celebration</a></h3>
                                    <p>This is the perfect package for you to take your wedding in royal style.</p>
                                   <br>
                                    <ul class="hotel-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class=" packages">
                                    <h3>From</h3>
                                    <h1>$1000</h1>
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hotel-img">
                                    <div class="box12">
                                        <img src="img/hotel-slider/paradise-wedding-7.jpg">
                                        <div class="box-content">
                                            <h3 class="title">Tropical Paradise</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id-paradise"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hotel-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id-paradise">Tropical Paradise</a></h3>
                                    <p>This is an ideal package for you to have your wedding near a beach.</p>
                                    <br>
                                    <ul class="hotel-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="packages">
                                    <h3>From</h3>
                                    <h1>$750</h1>
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="hotel-img">
                                    <div class="box12">
                                        <img src="img/hotel-slider/Rustic Charm 5.jpeg">
                                        <div class="box-content">
                                            <h3 class="title">Rustic Charm</h3>
                                            <ul class="icon">
                                                <li><a href="#" data-toggle="modal" data-target="#modal-id-Charm"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hotel-des">
                                    <h3><a href="#" data-toggle="modal" data-target="#modal-id-Charm">Rustic Charm</a></h3>
                                    <p>This is a perfect package for you to keep your wedding simple.</p>
                                    <br>
                                    <ul class="hotel-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="packages">
                                    <h3>From</h3>
                                    <h1>$500</h1>
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- hotel Section End -->
        
        <!-- Modal for hotel Section Start -->
        <div id="modal-id-royal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    <div><img src="img/hotel-slider/Royal Celebration 1.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 2.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 4.jpg "></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 6.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 7.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 8.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    <div><img src="img/hotel-slider/Royal Celebration 1.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 2.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 4.jpg "></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 6.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 7.jpg"></div>
                                    <div><img src="img/hotel-slider/Royal Celebration 8.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2>Royal Celebration</h2>
                                <p>
                                This is the perfect package for you to take your wedding in royal style.     
                               </p>
                                <div class="modal-link">
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-id-paradise" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    
                                    <div><img src="img/hotel-slider/paradise-wedding-3.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-5.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-6.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-7.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-8.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-9.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    
                                    <div><img src="img/hotel-slider/paradise-wedding-3.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-5.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-6.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-7.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-8.jpg"></div>
                                    <div><img src="img/hotel-slider/paradise-wedding-9.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2>Tropical Paradise</h2>
                                <p>
                                This is an ideal package for you to have your wedding near a beach. 
                                </p>
                                <div class="modal-link">
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-id-Charm" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    <div><img src="img/hotel-slider/Rustic Charm 1.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 2.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 3.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 4.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 5.jpeg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 6.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    <div><img src="img/hotel-slider/Rustic Charm 1.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 2.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 3.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 4.jpg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 5.jpeg"></div>
                                    <div><img src="img/hotel-slider/Rustic Charm 6.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2>Rustic Charm</h2>
                                <p>
                                This is a perfect package for you to keep your wedding simple
                                </p>
                                <div class="modal-link">
                                    <a href="payment.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for hotel Section End -->
     
         
       <!-- Contact Section Start -->
        <div id="contact">
            <div class="container">
                <div class="section-header">
                    <h2>Contact</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="control-group col-sm-6">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="E.g. John Sina" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="E.g. email@example.com" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="subject" placeholder="E.g. Hotel Booking" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <label>Message</label> 
                                    <textarea class="form-control" id="message" rows="5" placeholder="E.g. I need a premium Hotel" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="button"><button type="submit" id="sendMessageButton">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
        
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
                      
                        <a href="about.php" >About Us </a> <br>
                        <a href="contact.php" >Contact Us</a> <br>
                        <a href="Testimonials.php" >Reviews</a>    
                           
                       
                   </div>
                   <div class="col-2">
                          
                       <a href="amenities.php" >Services</a><br>
                       <a href="gallery.php" >Gallery </a>  <br> 
                       <a href="faqs.php" >FAQs</a>    
                    
                
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
        
        <!-- Booking Javascript File -->
        <script src="js/booking.js"></script>
        <script src="js/jqBootstrapValidation.min.js"></script>
  
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>