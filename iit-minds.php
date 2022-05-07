<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Page Title -->
<title>About US – IITMinds™</title>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="IITMinds is Mumbai's leading Coaching Institute. Our courses includes 8th-10th, XI+XII, JEE NEET & MHT-CET. Best Faculty with highest quality infrastructure. Enroll Now !!" />
<meta name="keywords" content="" />
<meta name="author" content="IITMinds" />

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
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

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
  <?php include 'include/pre_loader.php'?>
  
  <!-- Header -->
   <header id="header" class="header">
	 <?php include 'include/header.php'?>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">IITMINDS</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-gray-silver">IITMINDS</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="position-inherit">
      <div class="container">
        <div class="row">
          <div class="col-md-3 scrolltofixed-container">
            <div class="list-group scrolltofixed-sidebar z-index-0">
              <a href="#section-one" class="list-group-item smooth-scroll-to-target">IITMINDS</a>
            </div>

            <script>
              /* scrollto fixed script */
              $(document).ready(function(e) {
                if($(window).width() >= 768){
                  $('.scrolltofixed-sidebar').scrollToFixed({
                      marginTop: $('.header .header-nav').outerHeight(true) + 100,
                      limit: function() {
                          var limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                          return limit;
                      }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-9">
            <div id="section-one" class="mb-50">
              <h3>IITMINDS</h3>
              <hr>
              <p class="mb-20">IITMINDS is a coaching institute focused on training aspiring young engineers and doctors. We believe in starting early to give our students a lead start in today's immensely competitive scenario. The aim is to reach the expertise and experience of team IITMINDS to students at the school level, to enable more students realize their dream careers. </p>
              <p class="mb-20">IITMINDS is headed by Mr. Devendra Shukla, a renowned entrepreneur in the coaching circles of Mumbai.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <?php include 'include/footer.php'?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>



</body>
</html>