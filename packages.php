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
    </head>

    <body>
        <!-- Header Section Start -->
        <header id="header">
           
            <a href="home.php" class="logo">WeddingWing</a>
            <a href="logout.php" class="login">LogOut</a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            
            <nav class="main-menu top-menu">
                <ul>
                   
                    <li ><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="active"><a href="packages.php">Packages</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="Testimonials.php">Testimonials</a></li>
                    <li ><a href="contact.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->
        
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
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus. 
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
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus. 
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
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus. 
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
        
        <!-- Contact Javascript File -->
        <script src="js/jqBootstrapValidation.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
