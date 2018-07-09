<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Services</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Main stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<!-- PRELOADER -->
<div class="page-loader">
	<div class="loader">Loading...</div>
</div>
<!-- /PRELOADER -->  
<div class="boxed_wrapper">
<!--Start Top bar area -->  
<div class="top-bar-area">
    <div class="container">
        <div class="clearfix">
            <div class="pull-left"><p></p></div>
            <div class="pull-right">
                <p><i class="fa fa-clock-o"></i>
                <script type="text/javascript">
                var date;
                date = Date();
                document.write(date);
                </script>
                </p>
            </div>
        </div>

    </div>
</div>
<!--End Top bar area --> 
 
<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
        <marquee><h3>We provide the best and affordable services to you </h3></marquee>
            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="index.php">
                        <img src="images/logo/logo.png" alt="Logo" height="80" width="100">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Need help?</h6>
                                <p>9870837639</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-email-filled-closed-envelope"></span>
                            </div>
                            <div class="text-holder mail-holder">
                                <h6>Mail Us @</h6>
                                <a href="#"><p>monster.xheel@gmail.com</p></a>
                            </div>

                        </li>
                        <li>
                            <form action="new.php" method="post">
                                <input type="text" name="service" placeholder="Search..."> 
                        </li>
                        <li>
                            <input type="submit" name="" value="Search" style="margin-left:-50px;background-color: #333;color: white;">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>   
<!--End header area--> 

<!--Start mainmenu area-->
<div class="mainmenu-area stricky">
    <div class="container-fluid" ;">
        <div class="mainmenu-bg">
            
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="provide_service.html">Provide Services</a> </li>
                                <li><a href="http://www.xheel.org">IT Services</a> </li>
                                <li><a href="feedback.html">Feedback</a></li>
                                <li><a href="about.html">About Us</a> </li>
                                <li><a href="career.html">Careers</a></li>                          
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                    <!-- mobile-menu --> 
                    <div class="services-mobile-menu visible-xs">
                        <nav id="mobile-nav">
                            <ul>
                               <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="provide_service.html">Provide Services</a> </li>
                                <li><a href="http://www.xheel.org">IT Services</a> </li>
                                <li><a href="feedback.html">Feedback</a></li>
                                <li><a href="about.html">About Us</a> </li>
                                <li><a href="career.html">Careers</a></li> 
                            </ul>
                        </nav>
                    </div>                      
                </div>
            </div>
            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                       
                   </div>
                   
                </div> 
            </div>
        </div>
    </div>
</div><!--End mainmenu area-->       
 
 
<!--Start breadcrumb area-->     
<div class="breadcrumb-area" style="background-image: url(img/provideserv.jpg);">
    <div class="container text-center">
        <h1>Provide Services</h1>
            <div class="breadcrumbs_path">
                <a href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>      
    </div>
</div>
<!--End breadcrumb area-->
 



<!--Start contact form area-->
<div class="contact-form-area sec-padd-top">
    <div class="container">
        
        <marquee><h3>Our Service Provider</h3></marquee>
        <div class="row">
           
            <div class="col-md-8">

 <table  border="2">

            <?php
                     $service = $_POST["service"];   
                     $con = mysqli_connect("localhost","ak2019cs","qwerty123");
                     mysqli_select_db($con,"city_need");
                     $query = "select * from serviceprovider where OcupationName = '$service'";
                     $result = mysqli_query($con,$query);

                     while($row = mysqli_fetch_array($result))
                     {


            ?>
                <tr>
                    <th>Name</th>
                    <th><?php echo "".$row['UserName']; ?></th>
                    <th>Address</th>
                </tr>
                <tr>
                    <th>Service</th>
                    <th><?php echo "".$row['OcupationName'];?></th>
                    <th rowspan="3"><?php echo "".$row['Address']; ?></th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th><?php echo "".$row['Email'];?></th>
                </tr>
                <tr>
                    <th>Contact</th>
                    <th><?php echo "".$row['Number'];?></th>
                </tr>
                <tr>
                    <th>
                    <form name="myNumber" action="show.php" method="post">
                    <input type="text" value="<?php echo ''.$row['Email']; ?>" name="to">
                    </th>

                    <th>

                    <input type="text" name="callme" placeholder="Enter your number">
                    </th>
                    <th>
                    <input type="submit" name="" value="Request" style="background-color: #333; color: white;">
                    </form>
                    </th>
                </tr>
                <?php } ?>
            </table>

            </div>
            <br>
            <br>
                
        </div>
    </div>
</div>
<!--End contact form area-->



<div class="home-google-map">
    <div>

        <br>
        <br>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115408.23982843258!2d82.92106787460938!3d25.320746099499672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e2db76febcf4d%3A0x68131710853ff0b5!2sVaranasi%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1530004899563" width="1360" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>

<div class="call-out2">
    <div class="container">
        <div class="clearfix">
            <div class="float_left">
                <h4>Have any question or need any business consultation?</h4>
            </div>
            <div class="float_right">
                <a href="http://www.xheel.org" class="thm-btn bg-clr2">Contact Us</a>
            </div>
        </div>
                
    </div>
</div>


<div class="brand-logo sec-padd">
    <div class="container">
        <ul class="brand-carousel">
            <li><a href="#"><img src="images/brand/1.png" alt="" height="100px" width="150px"></a></li>
            <li><a href="#"><img src="images/brand/2.png" alt="" height="100px" width="150px"></a></li>
            <li><a href="#"><img src="images/brand/3.png" alt="" height="100px" width="150px"></a></li>
            <li><a href="#"><img src="images/brand/4.png" alt="" height="100px" width="150px"></a></li>
            <li><a href="#"><img src="images/brand/5.png" alt="" height="100px" width="150px"></a></li>
            <li><a href="#"><img src="images/brand/6.png" alt="" height="100px" width="150px"></a></li>
        </ul>
    </div>
</div>

<footer>
    <div class="footer-main sec-padd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col">
                        <div class="logo-part">
                            <a href="index.php" class="footer-logo text-uppercase">
                                <img src="img/fav.png" alt="logo">
                            </a>
                        </div>
                        <p class="footer-words">At City Needs we are obsessed about your needs and troubles.</p>
                        <ul class="list-inline footer-social">
                            <li><a href="Facebook.html"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="Twitter.html"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="Google.html"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="Pinterest.html"><i class="fa fa-pinterest-p"></i></a></li>
                           
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col service-col">
                        <h3 class="footer-title"><a href="latest_services.html">Services</a></h3>
                        <ul class="footer-list" style="color:#9d9d9d;">
                            <li>Hotels and Restaurants.</li>
                            <li>Education.</li>
                            <li>Repairman.</li>
                            <li>Grocery Store.</li>
                            <li>Fruit Store.</li>
                            <li>Medical Store.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-col post-column">
                        <h3 class="footer-title">Contact Us</h3>
                        <div class="post-list">
                            <div class="post">
                                 <li>
                                        <div class="iocn-holder">
                                            <span class="icon-email-filled-closed-envelope"></span>
                                         </div>
                                        <div class="text-holder mail-holder">
                                            <h3 style="color: #9d9d9d;">Mail Us @</h3>
                                            <p> <a href="#">sannidhyasingh21@gmail.com</a>
                                            <a href="#">monster.xheel@gmail.com</p></a>
                                        </div>
                                </li>
                        
                            </div>
                            <div class="post">
                               
                                     <ul>
                                    <li>
                                        <div class="iocn-holder">
                                        <span class="icon-technology-1"></span>
                                         </div>
                                    <div class="text-holder">
                                        <h3 style="color: #9d9d9d;">Need help?</h3>
                                        <p>9870837639</p>
                                        <p>8077427591</p>
                                    </div>
                                     </li>
                       
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="copyright">© 2017 services all rights reserved</p>
                </div>
                <div class="col-md-9">
                    <nav class="footer-menu pull-right">
                        <ul class="list-inline">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!-- main jQuery /-->
<script src="js/jquery.js"></script>
<!-- jQuery plugins /-->
<script src="js/plugins.js"></script>
<!-- jQuery meanmenu /-->
<script src="js/jquery.meanmenu.js"></script>
<!-- bootstrap /-->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider /-->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to /-->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel /-->
<script src="js/owl.carousel.min.js"></script>
<!-- validate /-->
<script src="js/validation.js"></script>
<!-- mixit up /-->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing /-->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper /-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script /-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- fancy box /-->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script /-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.bootstrap-touchspin.js"></script>

<!-- jQuery ui js /-->
<script src="js/jquery-ui.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/validation.js"></script>
<script src="js/wow.min.js"></script>
<!-- thm custom script /-->
<script src="js/custom.js"></script>
</div>
           
</body>

</html>