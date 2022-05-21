<?php
include 'db.php';
$query = "SELECT section FROM result GROUP BY section";
$sections = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Page Title -->
    <title>Latest Results « Students Who Topped – IITMinds™</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Check latest results of Students who topped in SSC, HSC, MHT-CET, JEE and NEET Examinations. Mumbai's leading Coaching Institute in Gharkopar. Visit Now!"/>
    <meta name="keywords" content=""/>
    <meta name="author" content="ThemeMascot"/>

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

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <?php include 'include/pre_loader.php'; ?>

    <!-- Header -->
    <header id="header" class="header">
        <?php include 'include/header.php'; ?>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg3.jpg">
            <div class="container pt-70 pb-20">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title text-white text-center">Result</h2>
                            <ol class="breadcrumb text-left text-black mt-10">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-gray-silver">Our Start Performers At Boards & Various Entrance
                                    Examinations
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container pt-50 pb-30">
                <div class="section-content">
                    <?php while ($section = mysqli_fetch_array($sections)) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Gallery Grid -->
                            <h4 class="title text-uppercase font-raleway font-weight-500 m-0 pb-30"><?php echo $section['section']; ?></h4>
                            <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                                <?php
                                $query = 'SELECT * FROM result WHERE section = "' . $section['section'] . '"';
                                $result = $con->query($query);
                                while ($result_row = $result->fetch_array(MYSQLI_ASSOC)) { ?>
                                    <!-- Portfolio Item Start -->
                                    <div class="gallery-item wheel">
                                        <div class="work-gallery">
                                            <div class="gallery-thumb">
                                                <img class="img-fullwidth img-responsive" alt=""
                                                     src="<?php echo $image_url . $result_row['src']; ?>">
                                                <div class="gallery-overlay"></div>
                                                <div class="gallery-contect">
                                                    <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                        <li><a data-rel="prettyPhoto"
                                                               href="<?php echo $image_url . $result_row['src']; ?>"><i
                                                                        class="fa fa-picture-o"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gallery-bottom-part text-center">
                                                <h4 class="title text-uppercase font-raleway font-weight-500 m-0"><?php echo $result_row['name']; ?></h4>
                                                <h5 class="sub-title m-0"><?php echo $result_row['percentage']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Portfolio Item End -->
                                <?php } ?>
                            </div>

                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

    </div>
    <!-- end main-content -->

    <?php include 'include/footer.php' ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>