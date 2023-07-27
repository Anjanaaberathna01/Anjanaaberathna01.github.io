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
                    <li class="active"><a href="about.php">About Us</a></li>
                    <li><a href="packages.php">Packages</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="Testimonials.php">Testimonials</a></li>
                    <li ><a href="contact.php">Contact Us</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->
        
        <!-- About Section Start -->
        <div id="about">
            <div class="container">
                <div class="section-header">
                    <h2>About WeddingWing</h2>
                    <p>
                        Make your wedding exactly as you envision it and in one place.Onward with twenty years of unbroken faith   
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="img/about/about-1.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Wedding Halls </h3>
                            <p>
                                A large number of halls have joined us to make your weddings very beautiful for the money
                                 you have, from the super-class hotels that are full of modern technology.
                            </p>
                            <p>
                                It is also possible to change the wedding hall according to your needs
                            </p>
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="row">
                    <div class="col-md-6 img-cols d-block d-md-none">
                        <div class="img-col">
                            <img class="img-fluid" src="img/about/about-2.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Event Planners</h3>
                            <p>
                                We have event planners with many years of experience and they will give you the best support 
                                to arrange your wedding beautifully they will work with you until the end of your wedding and 
                                they will work with you in a very friendly manner.
                             </p>
                        </div>
                    </div>
                    <div class="col-md-6 img-cols d-none d-md-block">
                        <div class="img-col">
                            <img class="img-fluid" src="img/about/about-2.jpg">
                        </div>
                    </div>
                </div>
                
                <hr>
                
                <div class="row">
                    <div class="col-md-6 img-cols">
                        <div class="img-col">
                            <img class="img-fluid" src="img/about/about-3.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 content-cols">
                        <div class="content-col">
                            <h3>Lakshan - Admin:</h3>
                            <p>
                            Lakshan is our dedicated and efficient administrator, responsible for overseeing the overall operations of the hotel reservation system. With excellent organizational skills and attention to detail, Lakshan ensures smooth communication and coordination among team members, as well as with clients. They are the go-to person for resolving any administrative issues and ensuring the system runs seamlessly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
        
          
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
                           
                        <a href="service.php" >Services</a><br>
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
