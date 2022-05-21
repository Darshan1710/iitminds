<?php
include 'db.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>

        <!-- Page Title -->
        <title>Media & Press Release – IITMinds™</title>

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="In our press room you can find the latest press releases as well as our latest news. IITMinds is Mumbai's leading Coaching Institute in Ghatkopar. Visit Now !!" />
        <meta name="keywords" content="In our press room you can find the latest press releases as well as our latest news. IITMinds is Mumbai's leading Coaching Institute in Ghatkopar. Visit Now !!" />
        <meta name="author" content="IITMinds" />

        <!-- Favicon and Touch Icons -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">
        <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
        <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
        <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
        <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

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
        <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
        <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
        <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

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
            <?php include 'include/pre_loader.php' ?>

            <header id="header" class="header">
                <?php include 'include/header.php' ?>
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
                                    <h2 class="title text-white text-center">Media and Press</h2>
                                    <ol class="breadcrumb text-left text-black mt-10">
                                        <li><a href="index.php">Home</a></li>
                                        <li class="active text-gray-silver">Media & Press</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Gallery Grid 3 -->
                <section>
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Portfolio Filter -->
                                    <div class="portfolio-filter font-alt align-center mb-6 0">
                                        <a href="#" class="active" data-filter="*">All</a>
                                        <a href="#classroom" class="" data-filter=".classroom">Classroom</a>
                                        <a href="#seminar" class="" data-filter=".seminar">Seminar</a>
                                        <a href="#newspaper" class="" data-filter=".newspaper">News-Paper</a>
                                        <a href="#felicitations" class="" data-filter=".felicitations">Felicitations</a>


                                    </div>
                                    <!-- End Portfolio Filter -->

                                    <!-- Portfolio Gallery Grid -->
                                    <div id="grid" class="gallery-isotope masonry grid-3 gutter clearfix">
                                        <?php
                                        $sql = mysqli_query($con , "SELECT * FROM mediagroup");
                                        while($mediagroup = mysqli_fetch_array($sql)){
                                            
                                            $class_query = mysqli_query($con , "SELECT * FROM mediapress WHERE media_id='".$mediagroup['media_id']."'"); 
                                            $class = mysqli_fetch_row($class_query);
                                            
                                            $sql1 = mysqli_query($con , "SELECT * FROM mediapress WHERE media_id='".$mediagroup['media_id']."'");
                                            
                                            if(mysqli_num_rows($sql1) == 1){
                                            while($mediapress = mysqli_fetch_array($sql1)){
                                        ?>
                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item <?php echo $mediapress['class'];?>">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="<?php echo $image_url.$mediapress['src'];?>" width="<?php echo $mediapress['width'];?>" height="<?php echo $mediapress['height'];?>" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="<?php echo $image_url.$mediapress['src'];?>" title="<?php $mediapress['title']; ?>"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } }else { 
                                            ?>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item classroom">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/media-press/02.png" width="375px" height="233px" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/media-press/02.png"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item newspaper">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/media-press/s19.jpg" width="375px" height="475px" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/media-press/s19.jpg"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item classroom">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/media-press/03.png" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/media-press/03.png"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/media-press/03.png" width="375px" height="233px">View more</a>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item newspaper">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li><a href="images/media-press/s111.jpg" title="Portfolio Gallery - Photo 1"><img src="images/media-press/s111.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s112.jpg" title="Portfolio Gallery - Photo 2"><img src="images/media-press/s112.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s113.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s113.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s114.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s114.jpg" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        
                                        <div class="gallery-item <?php echo $class[1];?>">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <?php while($mediapress = mysqli_fetch_array($sql1)){?>
                                                            <li><a href="<?php echo $image_url.$mediapress['src'];?>" title="<?php echo $mediapress['title'];?>"><img src="<?php echo $image_url.$mediapress['src'];?>" alt="iit-mind-founder"></a>
<!--                                                            <li><a href="images/media-press/iit-mind-founders.jpg" title="iit-mind-founders"><img src="images/media-press/iit-mind-founders.jpg" alt="iit-mind-founders"></a>-->
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } } ?>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item felicitations">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/media-press/s16.jpg" width="375px" height="233px" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/media-press/s16.jpg"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item newspaper">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper" data-direction="vertical">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li><a href="images/media-press/s1.jpg" title="Portfolio Gallery - Photo 1"><img src="images/media-press/s1.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s2.jpg" title="Portfolio Gallery - Photo 2"><img src="images/media-press/s2.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s3.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s3.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s4.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s4.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s5.jpg" title="Portfolio Gallery - Photo 2"><img src="images/media-press/s5.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s6.jpg" title="Portfolio Gallery - Photo 1"><img src="images/media-press/s6.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s7.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s7.jpg" alt=""></a></li>
                                                            <li><a href="images/media-press/s8.jpg" title="Portfolio Gallery - Photo 3"><img src="images/media-press/s8.jpg" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item felicitations">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper" data-direction="vertical">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li><a href="images/media-press/1.png" title="Portfolio Gallery - Photo 2"><img src="images/media-press/1.png" width="375px" height="233px" alt=""></a></li>
                                                            <li><a href="images/media-press/11.png" title="Portfolio Gallery - Photo 1"><img src="images/media-press/11.png" width="375px" height="233px" alt=""></a></li>
                                                            <li><a href="images/media-press/111.png" title="Portfolio Gallery - Photo 3"><img src="images/media-press/111.png" width="375px" height="233px" alt=""></a></li>
                                                            <li><a href="images/media-press/1111.png" title="Portfolio Gallery - Photo 3"><img src="images/media-press/1111.png" width="375px" height="233px" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
<!--                                        <div class="gallery-item classroom">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/media-press/01.png" width="375px" height="233px" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/media-press/01.png"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/media-press/01.png">View more</a>
                                            </div>
                                        </div>-->
                                        <!-- Portfolio Item End -->
                                        </div>
                                        <!-- End Portfolio Gallery Grid -->

                                        </div>
                                        </div>
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