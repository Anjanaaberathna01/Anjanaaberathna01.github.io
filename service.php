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
        <title>WeddingWing  </title>
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
                    <li><a href="packages.php">Packages</a></li>
                    <li class="active"><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="Testimonials.php">Testimonials</a></li>
                    <li ><a href="contact.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->
        
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
