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

        <link rel="stylesheet" href="css/payment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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



    <div class = "bodypay">
        
          <div class="containerf">

            <form method = "post" action="paymentprocess.php">
        
                <div class="row">
        
                    <div class="col">
        
                        <h3 class="title">billing address</h3>
        
                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" name="uname" placeholder="Kamal Fernando" required>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" name="uemail" placeholder="kamalfernando@gmail.com" required>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" name="uadress" placeholder="No 1 Main Rd,Collombo 11" required>
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" name="ucity" placeholder="Colombo 11" required>
                        </div>
        
                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" name="ustate" placeholder="Sri Lanka" required>
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="number" name="uzip" placeholder="123 456" required>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col">
        
                        <h3 class="title">payment</h3>
        
                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="img/card_img.png" alt="bank cards">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" name="unameoncard" placeholder="Mr. Kamal Fernando" required>
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" name="ucardnumber" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" name="uexpmonth" placeholder="january" required>
                        </div>
        
                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" name="uexpyear" placeholder="2025" required>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="number" name="ucvv" placeholder="1234" required>
                            </div>
                        </div>
        
                    </div>
            
                </div>
        
                <input type="submit" value="proceed to checkout" class="submit-btn">
        
            </form>
        
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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>