<?php
include 'db.php';

$page = isset($_GET['blog_page']) ? $_GET['blog_page'] : 1;
$month = isset($_GET['month']) ? ' WHERE MONTH(date) = "'.$_GET['month'].'"' : '';
$recordsPerPage = 3;
$fromRecordNum = ($recordsPerPage * $page) - $recordsPerPage;
$blogQuery = 'SELECT * FROM blog '.$month.'ORDER BY id ASC LIMIT '.$fromRecordNum.','.$recordsPerPage;

$blog = mysqli_query($con, $blogQuery);

$num_blog = mysqli_query($con, "SELECT * FROM blog");

$recent_blog = mysqli_query($con, "SELECT * FROM blog ORDER BY id DESC LIMIT 3");

$future_post = mysqli_query($con, "SELECT * FROM future_post");

$archive = mysqli_query($con, "SELECT COUNT(CONCAT(MONTHNAME(date), ' ', YEAR(date))) AS `Month`, CONCAT(MONTHNAME(date), ' ', YEAR(date)) AS 'Archive',MONTH(date) AS `MonthId` FROM blog GROUP BY MONTHNAME(date),YEAR(date) ORDER BY date DESC");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <!-- Page Title -->
    <title>Blogs » JEE » NEET » Science College » School Students ::IITMinds::</title>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Blogs for JEE, NEET, PCMB, PCM, School, SSC, 11th & 12th Science. For more details, Please stay updated with our latest articles & Blogs."/>
    <meta name="keywords"
          content="Blogs for JEE, NEET, PCMB, PCM, School, SSC, 11th & 12th Science. For more details, Please stay updated with our latest articles & Blogs."/>
    <meta name="author" content="IITMINDS"/>

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
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <link rel="stylesheet" href="css/blog.css">

</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <?php include 'include/pre_loader.php' ?>

    <!-- Header -->
    <header id="header" class="header">
        <?php include 'include/header.php' ?>
    </header>

    <!-- Section: Blog -->
    <section>
        <div class="container blog_body">
            <div class="row">
                <div class="col-md-9 col-sm-12 ">
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($blog)) {
                        ?>
                    <div class="blog">
                        <h3><?php echo $row['title']; ?></h3>
                        <div class="clearfix mb-10 blog_header">
                                        <span>
                                            <?php
                                            $originalDate = $row['date'];
                                            $newDate2 = date("l, d F Y", strtotime($originalDate)); //from line no 231
                                            echo $newDate2;
                                            ?>
                                        </span>
                            <span>by <strong><a href="#"><?php echo $row['author_name']; ?></a></strong></span>
                        </div>
                        <div style="box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.15);">
                            <div class="col-md-6">
                                <a href="view_blog.php?blog_id=<?php echo $row['id']; ?>">
                                    <img src="<?php echo $image_url . $row['blog_img']; ?>"
                                         alt="best-science-classes-in-mumbai" title="best-science-classes-in-mumbai"
                                         width="420px" height="280px">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div style="font-family: times new roman;font-size: 16px;color:black;"><?php
                                    $string = strip_tags($row['description']);
                                    if (strlen($string) > 500) {

                                        // truncate string
                                        $stringCut = substr($string, 0, 500);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... <a href="view_blog.php?blog_id="' . $row['id'];
                                        '>Read More</a>';
                                    }
                                    echo $string; ?></div>
                            </div>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <!--  Tagged Start-->
                        <div class="mt-20 tagged_under">
                            <span class="itemTagsBlock">Tagged Under:</span>
                            <?php $tags = explode(',', $row['tag']);

                            if ($tags[0] != '') {
                                foreach ($tags as $t) {
                                    ?>
                                    <a href="#" rel="tag" title="" class="tags"><span
                                                class="glyphicon glyphicon-tag"></span> <?php echo $t; ?></a>
                                <?php }
                            } else {
                                echo '';
                            } ?>
                            <a class="btn btn-danger btn-lg pull-right"
                               href="view_blog.php?blog_id=<?php echo $row['id']; ?>">Read More</a>
                        </div>
                        <div class="publish mt-20">
                            PUBLISHED IN
                            <a><strong>MOBILE</strong></a>
                        </div>
                    </div>
                        <!-- Tagged End-->
                        <?php $i++;} ?>
                </div>
                <!-- Feautered post-->

            <div class="col-md-3 col-sm-9 sidebar">
                <div>
                    <h4>ARCHIVES</h4>
                </div>
                <ul class="archives">
                    <?php while ($ar = mysqli_fetch_array($archive)) { ?>
                        <li>
                            <a href="<?php echo 'blog.php?month='.$ar['MonthId']; ?>"><?php echo $ar['Archive'] ?> &nbsp;&nbsp;(<?php echo $ar['Month']; ?>)</a>

                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-9">
                    <ul class="pagination">
                        <?php

                        $query = "SELECT COUNT(*) as total_rows FROM blog".$month;
                        
                        $pagination = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($pagination);
                        $total_rows = $row['total_rows'];
                        $total_pages = ceil($total_rows/$recordsPerPage);
                        $range = 3;
                        $initial_num = $page - $range;
                        $condition_limit_num = ($page + $range)  + 1;

                        for ($x=$initial_num; $x<$condition_limit_num; $x++) {

                            // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
                            if (($x > 0) && ($x <= $total_pages)) {

                                // current page
                                $activeClass = $x == $page ? ' class="active"' : '';
                                if ($x == $page) {
                                    echo "<a href='#' $activeClass>".$x."</a>";
                                }else {
                                    echo "<a $activeClass href='blog.php?blog_page=$x'>".$x."</a>";
                                }
                            }
                        }
                        ?>


                    </ul>
                </div>
            </div>

        </div>
    </section>

</div>
<!-- end main-content -->

<?php include 'include/footer.php' ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>