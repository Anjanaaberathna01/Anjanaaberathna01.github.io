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
    
        


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <style>
                 .faq-container {
                      max-width: 600px;
                      margin: 50px auto;
                      }
                 .faq-container .card {
                       margin-bottom: 20px;
                     }
                 .faq-container .card-header {
                      cursor: pointer;
                     }
        </style>
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
                    <li><a href="service.php">Service</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="Testimonials.php">Testimonials</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li class="active"><a href="faqs.php">FAQs</a></li>
                    <li><a href="userac.php">MY Account</a></li>
                    

                </ul>
            </nav>
            
        </header>
        <!-- Header Section End -->


  <div class="container faq-container">
    <h2>Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Question 1:  How do I make a reservation for a wedding at your hotel?

            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 1: To make a reservation for a wedding at our hotel, you can either call our reservations team directly or use our online booking system on our website. Provide the necessary details, such as the desired wedding date, number of guests, and any specific requirements you may have.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Question 2: Can I book multiple hotels for my wedding guests?

            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 2: Yes, you can book multiple hotels for your wedding guests. When making a reservation, specify the number of hotels you need, along with the hotel types and any additional preferences. Our reservations team will assist you in securing the required accommodations.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Question 3:  Is there a minimum or maximum number of hotels we can reserve for our wedding guests?

            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 3:There is no strict minimum or maximum number of hotels you can reserve for your wedding guests. We strive to accommodate your needs, whether you require a small number of hotels or a large block for a large-scale wedding. However, hotel availability may vary, especially during peak seasons, so we recommend booking well in advance.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Question 4:  Can I get a discounted rate for reserving a large number of hotels for my wedding?

            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 4: Yes, we offer special group rates for reserving a large number of hotels for wedding parties. When you contact our reservations team, inform them about your group booking for a wedding, and they will provide you with the available discounted rates and any applicable terms and conditions.
        </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
              Question 5:  Are there any wedding packages or services available at your hotel?

            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 5:Yes, we offer wedding packages that include various services and amenities tailored to your needs. These packages often include options for catering, venue decoration, audiovisual equipment, and more. Our dedicated wedding planning team can assist you in selecting the package that best suits your requirements and help you coordinate the details.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingSix">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Question 6:  Can I schedule a tour of the wedding venues at your hotel before making a reservation?
            </button>
          </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqAccordion">
          <div class="card-body">
            Answer 6:Absolutely! We encourage you to schedule a tour of our wedding venues before making a reservation. Our event coordinators will be delighted to show you around, discuss the available options, and answer any questions you may have regarding the facilities, amenities, and services we offer.
           </div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        
        <!-- Booking Javascript File -->
        <script src="js/booking.js"></script>
        <script src="js/jqBootstrapValidation.min.js"></script>
  
        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
    </body>
</html>
