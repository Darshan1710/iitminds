<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <title>#1 Coaching Institute » 8th - SSC » 11th -12th Science » JEE » NEET</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Coaching classes in ghatkopar. Coaching classes in mumbai for 8th, 9th, SSC classes, 11th and 12th science, NEET coaching, MHT-CET, IIT JEE classes."/>
    <meta name="keywords"
          content="best coaching institute for medical entrance exam, neet classes in mumbai, neet 2019, entrance exam for mbbs, neet classes, medical coaching classes, neet classes in mumbai, best iit coaching in mumbai, iit classes, jee classes, iit jee classes, iit coaching in mumbai, jee course, jee main coaching classes, best science classes in mumbai, iit coaching mumbai, science tuition, pcm course"/>
    <meta name="author" content="IITMINDS"/>
    <!-- Page Title -->

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
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-97161188-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '972742229529365');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=972742229529365&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

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
        <!-- Section: home -->
        <section id="home">

            <!-- Slider Revolution Start -->


            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>
                        <?php
                        $slider = mysqli_query($con, "SELECT * FROM slider");

                        while ($slider_row = mysqli_fetch_array($slider)) {
                            $image[] = $slider_row['slider'];
                        }
                        ?>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="<?php echo $base_url . $image[0]; ?>" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 1" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $base_url . '/cms/' . $image[0]; ?>" alt="neet-classes-in-mumbai"
                                 title="neet-classes-in-mumbai" data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                 id="rs-1-layer-1"

                                 data-x="['left']"
                                 data-hoffset="['30']"
                                 data-y="['middle']"
                                 data-voffset="['-110']"
                                 data-fontsize="['100']"
                                 data-lineheight="['110']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:700;">Education
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                                 id="rs-1-layer-2"

                                 data-x="['left']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['-25']"
                                 data-fontsize="['35']"
                                 data-lineheight="['54']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:600;">Right Choice Towards A Bright
                                Future !
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white"
                                 id="rs-1-layer-3"

                                 data-x="['left']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['35']"
                                 data-fontsize="['16']"
                                 data-lineheight="['28']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">We
                                Provide Quality Coaching for medical & engneering <br> entrance, college courses &
                                school courses.
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                 id="rs-1-layer-4"

                                 data-x="['left']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['100']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20"
                                        href="classes-mumbai-iit-neet-mht-cet.php">View Details</a>
                            </div>
                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="<?php echo $base_url . $image[1]; ?>" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 2" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $base_url . '/cms/' . $image[1]; ?>" alt="neet-classes-in-ghatkopar"
                                 title="neet-classes-in-ghatkopar" data-bgposition="center 40%" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase  bg-theme-colored-transparent text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30"
                                 id="rs-2-layer-1"

                                 data-x="['center']"
                                 data-hoffset="['0']"
                                 data-y="['middle']"
                                 data-voffset="['-90']"
                                 data-fontsize="['28']"
                                 data-lineheight="['54']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">Laying A
                                strong
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                                 id="rs-2-layer-2"

                                 data-x="['center']"
                                 data-hoffset="['0']"
                                 data-y="['middle']"
                                 data-voffset="['-20']"
                                 data-fontsize="['48']"
                                 data-lineheight="['70']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">
                                foundation for a bright future. <span style="font-size:300%;color:gold;">&starf;&starf;&starf;</span>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white text-center"
                                 id="rs-2-layer-3"

                                 data-x="['center']"
                                 data-hoffset="['0']"
                                 data-y="['middle']"
                                 data-voffset="['50']"
                                 data-fontsize="['16']"
                                 data-lineheight="['28']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">courses
                                for standard 8th, 9th & 10th
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                 id="rs-2-layer-4"

                                 data-x="['center']"
                                 data-hoffset="['0']"
                                 data-y="['middle']"
                                 data-voffset="['115']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-default btn-circled btn-transparent pl-20 pr-20"
                                        href="coaching-classes-8th-9th-ssc-coaching.php">Apply Now</a>
                            </div>
                        </li>

                        <!-- SLIDE 3 -->
                        <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="<?php echo $base_url . $image[2]; ?>" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 3" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo $base_url . '/cms/' . $image[2]; ?>"
                                 alt="best-coaching-institute-for-medical-entrance-exam"
                                 title="best-coaching-institute-for-medical-entrance-exam" data-bgposition="center top"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10"
                                 data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20"
                                 id="rs-3-layer-1"

                                 data-x="['right']"
                                 data-hoffset="['30']"
                                 data-y="['middle']"
                                 data-voffset="['-90']"
                                 data-fontsize="['64']"
                                 data-lineheight="['72']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:600;">Turning Aspirations
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                                 id="rs-3-layer-2"

                                 data-x="['right']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['-25']"
                                 data-fontsize="['32']"
                                 data-lineheight="['54']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap; font-weight:600;">Into top notch results
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white text-right"
                                 id="rs-3-layer-3"

                                 data-x="['right']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['30']"
                                 data-fontsize="['16']"
                                 data-lineheight="['28']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;s:500"
                                 data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                                 data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                Experience the result - on ented teaching methodology of one of mumbai's best faculties
                                for - JEE / NEET / HSC.
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme"
                                 id="rs-3-layer-4"

                                 data-x="['right']"
                                 data-hoffset="['35']"
                                 data-y="['middle']"
                                 data-voffset="['95']"
                                 data-width="none"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                                 data-start="1400"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a
                                        class="btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20"
                                        href="best-classes-for-11th-and-12th-science-mumbai-ghaktopar.php">Apply Now</a>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- end .rev_slider -->
            </div>
            <!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function (e) {
                    $(".rev_slider").revolution({
                        sliderType: "standard",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 5000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            },
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                style: "metis",
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 30,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778],
                        visibilityLevels: [1240, 1024, 778],
                        gridwidth: [1170, 1024, 778, 480],
                        gridheight: [650, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            origo: "slidercenter",
                            speed: 1000,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                            type: "scroll"
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "on",
                        stopAfterLoops: 0,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "0",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                });
            </script>
            <!-- Slider Revolution Ends -->
        </section>

        <!-- Section: home-boxes -->
  


        <!-- Section: About -->
        <section id="about">
            <div class="container pb-70">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h6 class="text-uppercase mt-0" style="font-size: 2.1rem;">Welcome To<span
                                        class="text-theme-color-2"> IITMINDS </span></h6>
                            <p class="lead">
                                IITMINDS welcomes all the talented and dynamic young brains.We have a powerful system
                                that can help you unfold your potential to its fullest. We just expect sheer dedication
                                and total hard work from your side.<br><br>
                                <b>“If You Have Just One Dream SUCCESS AT NEET / JEE / HSC /SSC -Then IITMINDS Is Just
                                    For You”.</b>
                            </p>
                            <div class="row mt-40">
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="1s">
                                    <div class="mb-sm-30">
                                        <img class="img-fullwidth" src="images/about/school-foundation-coaching.jpg"
                                             alt="school-foundation-coaching" title="school-foundation-coaching">
                                        <h1 class="letter-space-1 mt-10" style="font-size:17px;">School | Foundation
                                            <span class="text-theme-color-2">Coaching</span></h1>
                                        <p>We Offer Quality Foundation Coaching <br>For - Std VIII | IX | X.</p>
                                        <a href="coaching-classes-8th-9th-ssc-coaching.php"
                                           class="btn btn-sm btn-theme-colored">School SSC</a>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                                    <div class="mb-sm-30">
                                        <img class="img-fullwidth" src="images/about/college-entrance-exam-coaching.jpg"
                                             alt="college-entrance-exam-coaching.jpg"
                                             title="college-entrance-exam-coaching.jpg">
                                        <h2 class=" letter-space-1 mt-10" style="font-size: 16px;">College | Entrance
                                            Exam <span class="text-theme-color-2">Coaching</span></h2>
                                        <p>Std XI | XII (Science) - PCMB / PCM</p>
                                        <p>NEET , JEE (Mains & Advanced) MHT - CET</p>
                                        <a href="engineering.php" class="btn btn-sm btn-theme-colored">Engineering</a>
                                        <a href="medical.php" class="btn btn-sm btn-theme-colored">Medical</a>
                                        <a href="commerce.php" class="btn btn-sm btn-theme-colored">Commerce</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="p-30 bg-theme-colored mt-10">
                                <div class="text-white mt-0 mb-10" style="font-size:20px;font-weight:700;">
                                    <center>Request a callback !</center>
                                </div>
                                <!-- Appilication Form Start-->

                                <?php include('include/registration_form.php'); ?>

                                <!-- Application Form Validation Start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: Mission -->
        <section id="mission">
            <div class="container-fluid pt-0 pb-0">
                <div class="row equal-height">
                    <div class="col-sm-12 col-md-12 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="0.3s">
                        <div class="pt-60 pb-40 p-md-30">
                            <div class="title text-white text-uppercase line-bottom mt-0 mb-30 text-center"
                                 style="font-size:28px;font-weight:700;">Why Choose Us?
                            </div>
                            <div class="row">

                                <div class="col-md-offset-1 col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/quality-education-at-affordable-fees.jpg">
                                        <h4 style="font-size:18px;font-weight:700;">Quality education at affordable
                                            fees</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/result-oriented-methodology.jpg">

                                        <h4 style="font-size:18px;font-weight:700;">Result-oriented Methodology</h4>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/bi-weekly-test-programme.png">

                                        <h4 style="font-size:18px;font-weight:700;">Bi-weekly test programme</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/weekly-practice-session.png">

                                        <h4 style="font-size:18px;font-weight:700;">Weekly Practise sessions</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/student-friendly-subject-expert.png">

                                        <h4 style="font-size:18px;font-weight:700;">Student Friendly Subject
                                            experts</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-offset-1 col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/weekend-destress-activities.png">

                                        <h4 style="font-size:18px;font-weight:700;"> Weekend de-stress activities</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/periodic-parent-teacher-meeting.png">

                                        <h4 style="font-size:18px;font-weight:700;">Periodic Parent-teacher
                                            meetings</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/complete-conceptual-clarity.png">

                                        <h4 style="font-size:18px;font-weight:700;">Complete Conceptual Clarity</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/in-house-subject-assistants.png">

                                        <h4 style="font-size:18px;font-weight:700;">In-house subject assistants</h4>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-2 col-md-2">
                                    <div class="icon-box box-border text-center mb-20 p-15">
                                        <img src="images/icons/focus-on-overall-developement.png">

                                        <h4 style="font-size:18px;font-weight:700;">Focus on overall development</h4>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: courses -->
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h6 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333"
                                style="font-size:28px;font-weight: 700;">Our <span
                                        class="text-theme-color-2"> Courses</span></h6>
                            <p>One of the most distinctive characteristics of our courses is that we cover <br> the
                                subject area very broadly.</p>
                        </div>
                    </div>
                </div>
                <div class="row multi-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top" data-dots="true">
                            <?php
                            $courses = mysqli_query($con, "SELECT * FROM `courses` ");
                            while ($courses_row = mysqli_fetch_array($courses)) {
                                if ($courses_row['commencement'] != '0000-00-00') {
                                    ?>
                                    <div class="item">
                                        <div class="project mb-30 border-2px">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="standard-VIII-coaching-class"
                                                     title="standard-VIII-coaching-class"
                                                     src="<?php echo $image_url . $courses_row['image_path']; ?>">
                                            </div>
                                            <div class="project-details p-15 pt-10 pb-10">
                                                <h5 class="font-14 font-weight-500 mb-5">Foundation</h5>
                                                <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                            href="<?php echo $courses_row['link'] ?>"><?php echo $courses_row['heading']; ?></a>
                                                </h4>
                                                <p> <?php echo $courses_row['description']; ?></p>

                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="item">
                                        <div class="project mb-30 border-2px">
                                            <div class="thumb">
                                                <img class="img-fullwidth" alt="jee-nee-mht-cet" title="jee-nee-mht-cet"
                                                     src="<?php echo $image_url . $courses_row['image_path']; ?>">
                                            </div>
                                            <div class="project-details p-15 pt-10 pb-10">
                                                <h4 class="font-weight-700 text-uppercase mt-0"><a
                                                            href="<?php echo $courses_row['link'] ?>"><?php echo $courses_row['heading']; ?></a>
                                                </h4>
                                                <p><?php echo $courses_row['heading']; ?>Prepare for the entrance
                                                    examinations with an assurance from IITMINDS Enroll Now ! </p>

                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="events" class="divider parallax layer-overlay overlay-dark-8" data-stellar-background-ratio="0.5"
                 data-bg-img="images/bg/best-coaching-institute-for-medical-entrance-exam.jpg">
            <div class="container pt-70 pb-40">
                <div class="section-title mb-30">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2 class="mt-0 line-height-1 text-center mb-10 text-white text-uppercase">BEST<span
                                        class="text-theme-color-2"> FEATURES</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0" src="images/about/regular-tests.jpg"
                                                 alt="regular-tests" title="regular-tests">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-24 pl-sm-50">
                                        <h4 class="mt-0 mb-5 text-white">Regular Tests</h4>
                                        <p class="mb-15 mt-15 text-white text-justify">The institute conducts regular
                                            online &
                                            offline tests throughout the year, and provides prompt feedback. This helps
                                            us to constantly track and monitor performance of students.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0"
                                                 src="images/about/unique-study-material.jpg"
                                                 alt="unique-study-material" title="unique-study-material">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-24 pl-sm-50">
                                        <h4 class="mt-0 mb-5 text-white">Unique Study Material
                                        </h4>
                                        <p class="mb-15 mt-15 text-white text-justify">Authentic, exhaustive,
                                            comprehensive yet
                                            concise, the study material comes in the form of professionally printed
                                            books by our expert faculty.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0"
                                                 src="images/about/counselling-sessions.jpg" alt="counselling-sessions"
                                                 title="counselling-sessions">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-24 pl-sm-50">
                                        <h4 class="mt-0 mb-5 text-white">Counselling Sessions
                                        </h4>
                                        <p class="mb-15 mt-15 text-white text-justify">We have an in-house counsellor to
                                            help
                                            students with time management Stress-management and for personality
                                            development, apart from regular motivational session</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 mb-30 wow fadeInRight" data-wow-duration="1s"
                             data-wow-delay="0.5s">
                            <div class="pricing table-horizontal maxwidth400">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumb">
                                            <img class="img-fullwidth mb-sm-0"
                                                 src="images/about/classroom-surveillance.jpg"
                                                 alt="classroom-surveillance" title="classroom-surveillance">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-24 pl-sm-50">
                                        <h4 class="mt-0 mb-5 text-white">Classroom Surveillance
                                        </h4>
                                        <p class="mb-15 mt-15 text-white text-justify">IITMINDS is now using Biometric
                                            Time
                                            Attendance to track student's attendance in lectures and exams in an
                                            efficient manner. Parents are informed immediately via SMS.</p>
                                    </div>
                                </div>
                            </div>
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

<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>