<?php
include 'db.php';
if(isset($_GET['blog_id'])){
    $blog = mysqli_query($con , "SELECT * FROM blog  WHERE id = ".$_GET['blog_id']."");
}

$recent_blog = mysqli_query($con , "SELECT * FROM blog LIMIT 3 OFFSET ".$_GET['blog_id']."");
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <!-- Page Title -->
        <title>Blogs » JEE » NEET » Science College » School Students ::IITMinds::</title>

        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Blogs for JEE, NEET, PCMB, PCM, School, SSC, 11th & 12th Science. For more details, Please stay updated with our latest articles & Blogs." />
        <meta name="keywords" content="Blogs for JEE, NEET, PCMB, PCM, School, SSC, 11th & 12th Science. For more details, Please stay updated with our latest articles & Blogs." />
        <meta name="author" content="IITMINDS" />

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

            <!-- Start main-content -->
            <div class="main-content bg-lighter">
               
                <!-- Section: Blog -->
                <section>
                    <div class="container blog_body">
                        <div class="row">
                            <?php while($row = mysqli_fetch_array($blog)) {?>
                            <div class="col-md-9 col-sm-9 ">
                                <h1><?php echo $row['title'];?></h1>
                                <div class="clearfix mb-10" >
                                <span>
                                    <span>by <strong><?php echo $row['author_name'];?></strong></span>
                                </span>
                                
                                <span>
                                    /
                                </span>
                                
                                <span><span class="glyphicon glyphicon-calendar"></span>
                                    <?php
                                    $originalDate = $blog['date'];
                                    $newDate2 = date("l, d F Y", strtotime($originalDate)); //from line no 231 
                                    echo $newDate2;
                                    ?>
                                </span>
                                
                                <span>
                                    /
                                </span>
                                
                                <span>
                                    <span class="glyphicon glyphicon-folder-close"></span>
                                </span>
                                Published in
                                <a><strong>Mobile</strong></a>
                                </div>
                                <div style="box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.15);">
                                    <div class="col-md-6">
                                    <a href="<?php echo $base_url.$row['blog_img'];?>">
                                    <img src="<?php echo $base_url.$row['blog_img'];?>" alt="best-science-classes-in-mumbai" title="best-science-classes-in-mumbai" width="420px" height="280px">                                                           
                                    </a>
                                    </div>
                                    <div class="col-md-6">
                                    <div style="font-family: times new roman;font-size: 16px;color:black;"><?php echo $row['description'];?></div>
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                                <!-- Social sharing -->
<!--                                                <ul class="itemSocialSharing kl-blog-post-socsharing clearfix">
                                                     Facebook button 
                                                    <li class="itemFacebookButton kl-blog-post-socsharing-fb">
                                                        <div class="fb-like" data-href="https://www.facebook.com/thesmartads" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                                         Requried script for Facebool button 
                                                        <div id="fb-root"></div>                                                        
                                                        <script>
                                                            (function (d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                if (d.getElementById(id))
                                                                    return;
                                                                js = d.createElement(s);
                                                                js.id = id;
                                                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1146743278727687";
                                                                fjs.parentNode.insertBefore(js, fjs);
                                                            }(document, 'script', 'facebook-jssdk'));
                                                        </script>
                                                    </li>
                                                    / Facebook button 

                                                     Google+ button 
                                                    <li class="itemGooglePlusOneButton kl-blog-post-socsharing-gp"> 
                                                         Requried script for Google+ button 
                                                         Place this tag in your head or just before your close body tag. 
                                                        <script src="https://apis.google.com/js/platform.js" async defer></script>

                                                         Place this tag where you want the +1 button to render. 
                                                        <div class="g-plusone" data-href="https://plus.google.com/+SmartAdsMumbai"></div>
                                                    </li>
                                                    / Google+ button 

                                                     Twitter button 
                                                    <li class="itemTwitterButton kl-blog-post-socsharing-tw">
                                                        <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                         Requried script for Twitter button 
                                                        <script>
                                                            window.twttr = (function (d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0],
                                                                        t = window.twttr || {};
                                                                if (d.getElementById(id))
                                                                    return t;
                                                                js = d.createElement(s);
                                                                js.id = id;
                                                                js.src = "//platform.twitter.com/widgets.js";
                                                                fjs.parentNode.insertBefore(js, fjs);

                                                                t._e = [];
                                                                t.ready = function (f) {
                                                                    t._e.push(f);
                                                                };

                                                                return t;
                                                            }
                                                            (document, "script", "twitter-wjs"));
                                                        </script> 
                                                    </li>
                                                    / Twitter button 

                                                     Linkedin button 
                                                    <li class="kl-blog-post-socsharing-pin"> 
                                                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                                                        <script type="IN/Share" data-url="https://www.linkedin.com/in/the-smart-ads-b78a4b123?trk=nav_responsive_tab_profile_pic" data-counter="right"></script> 
                                                    </li>
                                                    / Linkedin button 
                                                </ul>-->
                                                <!--/ Social sharing -->
                                                
                                            <!--  Tagged Start-->
                                            <div class="mt-20 tagged_under">
                                            <span class="itemTagsBlock">Tagged Under:</span>
                                            <?php $tags = explode(',',$row['tag']);

                                            if($tags[0] != ''){
                                            foreach($tags as $t){?>
                                            <a href="#" rel="tag" title="" class="tags"><span class="glyphicon glyphicon-tag"></span> <?php echo $t;?></a>
                                            <?php }
                                            }else{

                                                echo '';
                                            }?>
                                            </div>
                                            <!-- Tagged End-->   
                                            
                                            <!-- Author post -->
                                            <div class="mt-20" style="background:#f8f8f8;padding: 4%;">
                                                <div>
                                                    <img class="img-circle" src="<?php echo $base_url . $row['author_img']; ?>" width="100" height="100">
                                                </div>
                                                <div>
                                                    <h5>About <?php echo $row['author_name']; ?></h5>
                                                </div>
                                            </div>
                                            <!-- Author post -->
                                            
                                            <div class="related-articles">
                                            <!-- Title -->
                                            <h4 class="text-center read_next">What you can read next</h4>
                                            <!--/ Title -->

                                            <div class="row">
                                                <?php while($row2 = mysqli_fetch_array($recent_blog)){
                                                   
                                                    ?>
                                                    <div class="col-sm-4">
                                                        <!-- Related article post -->
                                                        <div class="rta-post">
                                                            <!-- Image -->
                                                            <a href="view_blog.php?blog_id=<?php echo $row2['id'];?>">
                                                                <img src="<?php echo $base_url.$row2['blog_img'];?>" class="img-responsive" style="height:240px;width:370px;" alt="">
                                                            </a>
                                                            <!--/ Image -->

                                                            <!-- Title -->
                                                            <h5>
                                                                <a href="" class="blog_title"><?php echo $row2['title']; ?></a>
                                                            </h5>
                                                            <!--/ Title -->
                                                        </div>
                                                        <!--/ Related article post .rta-post -->
                                                    </div>
                                                    <!--/ col-sm-4 -->
                                                <?php } ?>
                                            </div>
                                            <!--/ row -->
                                        </div>
                                        <!--/ Related articles -->
                            </div>
                            
                            <?php } ?>
                            
                            
<!--                           Feautered post-->
                            <div class="col-md-3 sidebar" >
                                <div>
                                <h4>FEATURED POSTS</h4>
                                </div>
                                <ul >
                                    <li class="posts">
                                        <a href=""><img src=""></a>
                                        <h5 class="title">Darshan Kini</h5>
                                        
                                    </li>
                                </ul>
                                
                                <div>
                                <h4>ARCHIVES</h4>
                                </div>
                                <ul class="archives">
                                    <li>
                                        <a href=""><img src="">December 2019</a>
                                       
                                    </li>
                                    <li>
                                        <a href=""><img src="">December 2020</a>
                                       
                                    </li>
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