<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Page Title -->
<title>LearnPress | Education & Courses HTML Template</title>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <?php include 'include/pre_loader.php';?>
  
    <!-- Header -->
   <header id="header" class="header">
	 <?php include 'include/header.php';?>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <span class="title text-white">XI + XII (PCM) + JEE (Mains & Advanced)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="images/services/IIT-classes.jpg" alt="IIT-classes" title="IIT-classes">
              <h3 class="text-theme-colored">XI + XII (PCM) + JEE (Mains & Advanced)</h3>
              <p>At IITMINDS, we have developed a very powerful system that can help you unfold your potential to its fullest.</p>
			  <p>Our classroom programmes not only prepare you for the boards, but, also provide a solid start for entrance preparation by working on the basics and learning the concepts step-by-step..</p>
              <div class="row">
                <div class="col-md-12">
                  <p>The IITMINDS method does not merely train you in Physics, Chemistry, Biology & Mathematics. Here, we train and build your mental strength and will power to persue excellence at every step of the way.</p><br>
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15"> 
                       <i class="fa fa-book text-theme-color-2 font-36"></i>
                        <h4>Best Library</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-user text-theme-color-2 font-36"></i>
                        <h4>Best Teachers</h4>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                      <div class="icon-box box-border text-center mb-20 p-15">
                        <i class="fa fa-money text-theme-color-2 font-36"></i>
                        <h4>Quality Education At Affordable Fees</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h3 class="text-theme-colored title-border mb-30 mt-50">Get A Free Registration!</h3>
              
                  <!-- Appointment Form Sart-->
				  
                  <?php include('include/registration_form.php'); ?> 
				  
                  <!-- Appointment Form Ends -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h4 class="widget-title line-bottom">Courses List</h4>
                <?php include 'include/courses_list.php';?>
              </div>
                <?php include 'include/testtimonial.php';?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <?php include 'include/footer.php';?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>
</html>