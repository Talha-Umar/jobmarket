<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Job Market</title>
    <!-- stylesheets-->
	  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">


</head>

<body>
    <?php include 'header.php'; ?>
    <!-- start banner -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="jbm-banner-text text-center">
                        <div class="jbm-ban-txt-line-1">
                            <h1>
                                AMBITION <span class="double-line">is the first step to success</span>
                            </h1>
                        </div>
                        <div class="jbm-ban-txt-line-2">
                            <p class="blockquote">“If you want to be successful in this world, you have to follow your passion, not a paycheck”</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end banner -->
    <!-- start search -->
    <div class="jbm-search-bar jbm-search-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="jbm-sch-inner margin-top-85-minus">
                     <form method="post" action="searchedjob.php">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                  <div class="form-group">
                                    <select class="jbm-s-category jbm-select-hide-search" name="category" id="jbm-s-category">
                                        <option value="">Category</option>
                                     <?php 
                                     include 'db.php';
                                     $sql2 = "SELECT * FROM category";
$result2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row2 = mysqli_fetch_assoc($result2)) { ?>
<option value="<?php echo $row2['id']; ?>"><?php echo $row2['cate_name'];?></option>
    
<?php  }
} 
        ?>

                                    </select>
                                    <p>(Example: designer, legal, education)</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="jbm-s-category jbm-select-hide-search" name="city" id="jbm-s-category">
                                        <option value="">City</option>
                                         <?php 
                                     include 'db.php';
                                     $sql2 = "SELECT * FROM city";
$result2 = mysqli_query($con, $sql2);

if (mysqli_num_rows($result2) > 0) {
  // output data of each row
  while($row2 = mysqli_fetch_assoc($result2)) { ?>
<option value="<?php echo $row2['id']; ?>"><?php echo $row2['city_name'];?></option>
    
<?php  }
} 
        ?>
                                    </select>
                                    <p>(Example: Rajistan, Mumbai, Dunapur)</p>
                                </div>
                            </div>
                           
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="form-group ">
                                    <input type="submit" class="jbm-button jbm-button-3" id="search-btn" name="search" value="Search Jobs" />
                                    <p class="text-center"><a href="#">More Search Options</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search -->
    <!-- start section title -->
    <div class="jbm-section-title margin-top-100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <span class="section-tit-line"></span>
                    <h2>Top Trending <span class="fw-400">Categories</span></h2>
                    <p>Make the most of the opportunity available by browsing among the most trending categories and get hired today.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end section title -->
    <!-- end section category -->
    <div class="jbm-section-catgory padding-top-80 padding-bottom-100">
        <div class="container">
            <div class="row">
   <?php
                   include 'db.php';
                   $sql = "SELECT * FROM category";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
                 ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="jbm-category-box clearfix">
                        <span class="category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  x="0px" y="0px" viewBox="0 0 512 512"  xml:space="preserve" width="512px" height="512px"><g transform="translate(1 1)"><g><path d="M506.733,217.667L259.267,81.987c-2.56-1.707-5.973-1.707-8.533,0L3.267,217.667C0.707,219.373-1,221.933-1,225.347 c0,2.56,1.707,5.973,5.12,6.827l29.013,14.107v79.943l-23.04,51.017c-4.267,9.387-3.413,20.48,2.56,29.867 c5.973,9.387,15.36,14.507,26.453,14.507h5.973c10.24,0,19.627-4.267,25.6-13.653s6.827-20.48,2.56-29.867l-23.04-51.84v-71.676 l42.667,20.745v66.931c0,21.333,12.8,41.813,33.28,52.053l17.067,8.533C178.2,420.76,216.6,429.293,255,429.293 c38.4,0,76.8-8.533,112.64-25.6l17.067-8.533c20.48-10.24,33.28-30.72,33.28-52.053v-67.346l87.893-42.734 c3.413-1.707,5.12-4.267,5.12-7.68S509.293,219.373,506.733,217.667z M57.027,397.72c-2.56,4.267-6.827,6.827-11.947,6.827h-5.973 c-5.12,0-10.24-2.56-12.8-6.827s-2.56-9.387-0.853-13.653l16.213-35.84l16.213,35.84C60.44,388.333,59.587,393.453,57.027,397.72z M400.92,284.227v58.88c0,15.36-9.387,29.867-23.893,36.693l-17.067,8.533c-65.707,32.427-143.36,32.427-209.067,0l-17.067-8.533 c-14.507-7.68-23.893-22.187-23.893-36.693v-58.88l141.653,68.267c0.853,0.853,2.56,0.853,3.413,0.853s2.56,0,3.413,0 l103.314-50.232L400.92,284.227z M255,335.427L105.667,262.04c-0.943-0.314-2.002-0.51-3.09-0.55l-30.644-14.865l142.259-17.118 c5.294,17.524,21.353,29.973,40.809,29.973c23.893,0,42.667-18.773,42.667-42.667c0-23.893-18.773-42.667-42.667-42.667 c-22.407,0-40.311,16.511-42.452,38.272L43.287,232.73l-16.98-8.237L255,98.2l228.693,126.293L255,335.427z M263.533,215.107 c-0.853-5.12-5.12-8.533-9.387-7.68l-23.966,2.876c2.763-11.187,12.575-19.089,24.819-19.089c14.507,0,25.6,11.093,25.6,25.6 c0,14.507-11.093,25.6-25.6,25.6c-10.688,0-19.517-6.026-23.428-14.998l24.281-2.922 C260.973,223.64,264.387,219.373,263.533,215.107z" fill="#454545"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </span>
                        <a href="catejobs.php?catid=<?php echo $row['id']; ?>" class="jbm-cat-title"><?php echo $row['cate_name']; ?></a>
                        <span class="jbm-cat-jobs">
                            <?php
                               $cid=$row['id'];
                               $sql1 = "SELECT count(job_title) as totaljobs FROM jobs where cid='$cid'";
                                $result1 = $con->query($sql1);
                                $row1 = $result1->fetch_assoc();
                                echo $row1['totaljobs'];

                             ?>
                            <br />
                            Openings
                        </span>
                    </div>
                </div>
                
<?php } } ?>
            <div class="row margin-top-30 margin-bottom-50">
                <div class="col-xs-12 text-center">
                    <a href="#" class="jbm-loadmore">Load More Categories</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end section category -->
	
	
	
    <!-- start section callout -->
    <div class="jbm-section-callout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 callout-bg-1 callout-section-left pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-left pull-right text-left">
                        <div class="jbm-section-title margin-top-100 margin-bottom-100 title-white">
                            <span class="section-tit-line"></span>
                            <h2><span class="fw-400">Recruit the</span> best candidates</h2>

                            <p>More than 20.000 companies rely on our services to get the best candidates work for them. Enjoy the same facilities by registering today and your company is good to flourish and achieve success.</p>
                            <a href="pricing-plans.html" class="jbm-button margin-top-50">See Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 callout-bg-2 callout-section-right pos-relative">
                    <div class="callout-bg"></div>
                    <div class="jbm-callout-in jbm-callout-in-right pull-left text-right ">
                        <div class="jbm-section-title margin-bottom-100 margin-top-100 title-white">
                            <span class="section-tit-line"></span>
                            <h2><span class="fw-400">Find your</span> dream job</h2>
                            <p>Browse  from hundreds of jobs, whetherr it is part time, full time or even freelancing. We have it all at JobMarket. Make your dreams cometrue and excel in what you love to do the best.</p>
                            <a href="search.html" class="jbm-button margin-top-50">Browse Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section callout -->


 
    <footer>
        <div class="footer-widget-container padding-top-115 padding-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget-text">
                            <img src="assets/img/logo.png" alt="footer-logo" class="img-responsive margin-bottom-30" />
                            <p>
                                JobMarket is a platform that has been designed to help both employers and candidates achieve success. We have more than 20 years of experience and we are growing stronger each and every day.
                                <a href="#">Read More..</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="widget ">
                            <h6 class="uppercase margin-top-0 margin-bottom-55">need help?</h6>
                            <ul class="widget-links">
                                <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i><a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="how-it-works.html">How it Works</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="faqs.html">FAQ</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="terms-and-conditions.html">Terms & Conditions</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="widget ">
                            <h6 class="uppercase margin-top-0 margin-bottom-55">Useful Links</h6>
                            <ul class="widget-links">
                                <li>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i><a href="404.html">404 Error</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="pricing-plans.html">Pricing Plans</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="career-jobmarket.html">Career at JobMarket</a>
                                </li>
                                <li>
                                     <i class="fa fa-angle-right" aria-hidden="true"></i><a href="sitemap.html">Sitemap</a>
                                </li>
                            </ul>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget last-widget">
                            <h6 class="uppercase margin-top-0 margin-bottom-55">Subscribe to our Newsletter</h6>
                            <div class="widget-subscribe">
                                <div class="form-group subsribe-email">
                                    <label for="subs-email" class="subs-email-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 14 14" xml:space="preserve" ><g><g><path d="M7,9L5.268,7.484l-4.952,4.245C0.496,11.896,0.739,12,1.007,12h11.986 c0.267,0,0.509-0.104,0.688-0.271L8.732,7.484L7,9z" fill="#c4c4c4"/><path d="M13.684,2.271C13.504,2.103,13.262,2,12.993,2H1.007C0.74,2,0.498,2.104,0.318,2.273L7,8 L13.684,2.271z" fill="#c4c4c4"/><polygon points="0,2.878 0,11.186 4.833,7.079 " fill="#c4c4c4"/><polygon points="9.167,7.079 14,11.186 14,2.875 " fill="#c4c4c4"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                    </label>
                                    <input type="email" name="bs-suemail" id="subs-email" class="form-control" placeholder="Enter your email address" />
                                </div>
                                <div class="form-group">
                                   <input type="submit" class="jbm-button jbm-button-3" id="subscribe-btn" name="subscribe-btn" value="Subscribe">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-bar main-2nd-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 hidden-xs hidden-sm text-left">
                        <p>Made with <i class="fa fa-heart"></i> by PSD_Market. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-2 text-center back-top">
                        <a href="#" class="back-top-button">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a href="#" class="back-top-link">Back to Top</a>
                    </div>
                    <div class="col-md-5 text-right">
                        <ul class="list-none jbm-social-icon-1 ">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 hidden-md hidden-lg text-center">
                        <p>Made By <i class="fa fa-heart"></i> Deep brar. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Spinner -->
     <div class="jbm-spinner">
        <div class="spinner-content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
     <!-- Spinner end here -->

    <div class="apply-job-popup">
        <div class="popup-overlay"></div>
        <!-- Candidate popup -->
        <div class="popup">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-5 jbm-login-side applyy">  
                                <i class="fa fa-lightbulb-o margin-bottom-50" aria-hidden="true"></i>
                                <span class="section-tit-line"></span>
                                <h3 class="margin-bottom-60">Apply for Job</h3>
                                <ul class="new-signup">
                                    <li>
                                        <a href="#">New User? </a>
                                    </li>
                                    <li>
                                        <a href="#">Sign Up</a>
                                    </li>
                                </ul>

                                <ul class="jbm-social-icons">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                        </div>






                        <div class="col-md-7 jbm-form">
                            <div class="jbm-field margin-top-20 register">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name4" class="form-control">
                                        <label for="name4">First Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="last-name" id="last-name4" class="form-control">
                                        <label for="last-name4">Last Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="email-address" id="email-address4" class="form-control">
                                        <label for="email-address4">Email Address*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="number" id="number4" class="form-control">
                                        <label for="number4">Phone Number*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <textarea name="message" id="number5" class="form-control"></textarea>
                                        <label for="number5">Message*</label>
                                    </div>
                                </div> 
                                <div class="g-recaptcha" data-sitekey="6LdcpCoUAAAAAH7ei-XX2bHUWul6Ppl5wYm1Y7Ne"></div>
                                <a href="#" class="jbm-button jbm-button-3 jbm-hover margin-bottom-15   ">Apply for Job</a>
                                <div class="terms">
                                    <input type="checkbox" id="c1" name="cc">
                                    <label for="c1"><span></span></label>
                                    <small>I have read and agree with <a href="#">Terms & Conditions</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="close-btn">
                            <i class="fa fa-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Candidate popup -->
    </div><!--apply job popup end-->

    <div class="jbm-login-popup">
        <div class="popup-overlay"></div>
            <div class="popup">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-md-5 jbm-login-side">  
                                    <i class="fa fa-lightbulb-o margin-bottom-50" aria-hidden="true"></i>
                                    <span class="section-tit-line"></span>
                                    <h3 class="margin-bottom-60">Login</h3>
                                    <ul>
                                        <li>
                                            <a href="#">Not yet registered? </a>
                                        </li>
                                        <li>
                                            <a href="#">Register Here</a>
                                        </li>
                                    </ul>

                                    <ul class="jbm-social-icons">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                            </div>

          

          <!----------       login ---------->



                            <div class="col-md-7 jbm-form regis1">
                                <ul class="jbm-login-form padding-top-40">
                                    <li class="candidate selected">
                                        <a href="#">Candidate</a>
                                    </li>
                                    <li  class="employer">
                                        <a href="#">Employer</a>
                                    </li>
                                </ul>

                                <?php


                            include("db.php") ;

                            if(isset($_POST['login'])){
                                  
                                  $email = $_POST['new_email'];
                                  $password = $_POST['pass'];

                                  if  ( empty($email) || empty($password)) {

                                        echo "<script>alert('Required field are empty');</script>";
                                }
                                 
                                    $sql = "SELECT * FROM candidate WHERE cemail='$email' AND cpassword='$password' 
                                        UNION 
                                        SELECT * FROM employer WHERE email='$email' AND password='$password'";
                                    $result = mysqli_query($con, $sql);

                                    
                                    
                                  
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                    echo "<script>alert('Successfully Login...');</script>";
                                    $type=$row['type'];
                                    
                                   $_SESSION['id']=$row['id'];
                                    $_SESSION['type']=$row['type'];
                                    $_SESSION['email'] = $email ; 
                                    $_SESSION['password'] = $password ; 

                                    if ($row['type']==='emp') {
                                       echo "<script>window.location = 'emp/postedjobs.php';</script>";
                                    }
                                    else{
                                        echo "<script>window.location = 'index.php';</script>";
                                    }

                                  }
                                 else{
                                    echo "<script>alert('Password or email didnot match...');</script>";
                                 }
                             }


                            ?>




                                <div class="jbm-field login-style margin-top-60">
                                    <form method="post" action="">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="new_email" id="email-address" class="form-control">
                                            <label for="email-address">Email Address*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="pass" id="new-pass2" class="form-control">
                                            <label for="new-pass2">Enter Password*</label>
                                        </div>
                                    </div>
                                    <input type="submit" name="login" value="Login" class="jbm-button jbm-button-3 jbm-hover margin-bottom-40 margin-top-20">

                                </form>
                                    <div class="row margin-bottom-70">
                                        <div class="col-md-7">
                                           <div class="terms style3">
                                                <input type="checkbox" id="c4" name="cc">
                                                <label for="c4"><span></span></label>
                                                <small>Keep me logged in</small>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <a href="forget_password.php" class="forgot">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="row margin-bottom-65">
                                        <div class="col-md-5 or">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="jbm-or">
                                                <span class="or">OR</span>
                                            </div>
                                        </div>
                                        <div class="col-md-5 or">
                                        </div>
                                    </div>

                                    <div class="jbm-social-icons-2 style3">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="close-btn">
                                <i class="fa fa-close"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div><!--jbm-login-popup end-->

            <!----------      end login ---------->



                <!----------    register ----------> 


    <div class="jbm-can-register-popup">    
        <div class="popup-overlay"></div>
        <div class="popup">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-md-5 jbm-login-side">  
                                <i class="fa fa-lightbulb-o margin-bottom-50" aria-hidden="true"></i>
                                <span class="section-tit-line"></span>
                                <h3 class="margin-bottom-60">Register</h3>
                                <ul>
                                    <li>
                                        <a href="#">Already have an account? </a>
                                    </li>
                                    <li>
                                        <a href="#">Login Here</a>
                                    </li>
                                </ul>

                                <ul class="jbm-social-icons">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                        </div>




                        <div class="col-md-7 jbm-form regis">
                            <ul class="jbm-login-form padding-top-30">
                                <li class="candidate selected" data-tab="tab1">
                                    <a href="#">Candidate</a>
                                </li>
                                <li class="employer" data-tab="tab2">
                                    <a href="#">Employer</a>
                                </li>
                            </ul>



               <?php


                        include("db.php");
                         

                        if(isset($_POST['submit'])){
                              
                              $name = $_POST['fname'];
                              $lname = $_POST['lname'];
                              $email = $_POST['email'];
                              $password =  $_POST['new-pass'] ;
                              $confrim_password =  $_POST['confirm-pass'] ;
                              
                            if($password == $confrim_password){

                            $sql = mysqli_query($con, "INSERT INTO `candidate`(`fname`, `lname`, `cemail`, `cpassword`, `type`) VALUES ('$name','$lname', '$email','$password','can') ");


                                    if($sql)  {
                                       echo "<script>alert('Successful Register!'); </script>";
                                    }
                                    else{
                                         echo "<script>alert('ERROR'); ';</script>";
                                    }
                               }
                                    else{
                                         echo "<script>alert('password and confirn password did not match');</script>";
                                    }
                                  } 


                        ?>









                            <div class="jbm-field current margin-top-60 register" id="tab1">
                             <form method="post" action="">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="fname" id="name" class="form-control" required="">
                                        <label for="name">First Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="last-name" class="form-control" required="">
                                        <label for="last-name">Last Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email-address2" class="form-control" required="">
                                        <label for="email-address2">Email Address*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="new-pass" id="new-pass" class="form-control" required="">
                                        <label for="new-pass3">Enter Password*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="confirm-pass" id="confirm-pass2" class="form-control" required="">
                                        <label for="confirm-pass2">Password Confirm*</label>
                                    </div>
                                </div> 
                                <div class="jbm-cand-register">
                                    <input type="submit" name="submit" class="jbm-button jbm-button-3 jbm-hover" value="Register">
                                </div>
                            </form>
                                <div class="terms style2">
                                    <input type="checkbox" id="c5" name="cc">
                                    <label for="c5"><span></span></label>
                                    <small>I have read and agree with <a href="#">Terms & Conditions</a></small>
                                </div>
                            </div>






  <?php


                        include("db.php");
                         

                        if(isset($_POST['emplysubmit'])){
                              
                              $cname = $_POST['cname'];
                              $address = $_POST['address'];
                              $email = $_POST['email-address'];
                              $password =  $_POST['new-pass'] ;
                              $confrim_password =  $_POST['confirm-pass'] ;
                              
                            if($password == $confrim_password){

                            $sql = mysqli_query($con, "INSERT INTO `employer`( `cname`, `caddress`, `email`, `password`, `type`) VALUES ('$cname','$address', '$email','$password','emp') ");


                                    if($sql)  {
                                       echo "<script>alert('Successful Register!'); </script>";
                                    }
                                    else{
                                         echo "<script>alert('ERROR'); ';</script>";
                                    }
                               }
                                    else{
                                         echo "<script>alert('password and confirn password did not match');</script>";
                                    }
                                  } 


                        ?>


                            <div class="jbm-field margin-top-60 register" id="tab2">
                                <div class="col-md-12">
                                    <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="cname" id="com-name" class="form-control" required="">
                                        <label for="com-name">Company Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" class="form-control" required="">
                                        <label for="address">Company Address*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email-address" id="email-address3" class="form-control" required="">
                                        <label for="email-address3">Email Address*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="new-pass" id="new-pass4" class="form-control" required="">
                                        <label for="new-pass4">Enter Password*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="confirm-pass" id="confirm-pass3" class="form-control" required="">
                                        <label for="confirm-pass3">Password Confirm*</label>
                                    </div>
                                </div> 
                            
                                <div class="jbm-cand-register">
                                    <input type="submit" name="emplysubmit" class="jbm-button jbm-button-3 jbm-hover" value="Register">
                                </div>
                                </form>
                                <div class="terms style2">
                                    <input type="checkbox" id="c6" name="cc">
                                    <label for="c6"><span></span></label>
                                    <small>I have read and agree with <a href="#">Terms & Conditions</a></small>
                                </div>
                            </div>





                        </div>
                        <div class="close-btn">
                            <i class="fa fa-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--jbm-can-register-popup end-->

                <!----------  end  register ----------> 



    <div class="jbm-overlay jbm-2nd-bg"></div>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/slick/slick.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>

</body>
</html>
