<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Page Title -->
<title>Contact Us | Mumbai's Best Coaching Institute | IITMinds</title>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Thank you for your interest in IITMinds. Please provide us your details to contact you. We are available from Mon-Sat, 8am-8pm. Our helpline number-9152012535." />
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
            <div class="col-md-12">
              <h2 class="title text-white text-center">Contact</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="index.php">Home</a></li>
                <li class="active text-gray-silver">Contact - Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider layer-overlay overlay-white-9" data-bg-img="images/bg/bg15.html">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="form-transparent" >				
				<input type="hidden" name="page_location" id="page_location" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?>" >
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Name <small>*</small></label>
                    <input type="text" name="name" id="name" class="form-control"  placeholder="Enter Name" required="true">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_email">Email <small>*</small></label>
                    <input name="email" id="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_name">Subject <small>*</small></label>
                    <input name="subject" id="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="form_phone">Phone</label>
                    <input name="phone" id="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="form_name">Message</label>
                <textarea name="message" id="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">                
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
			  var final_url = $('#base_url').val();
			  $.validator.setDefaults({
					submitHandler: function() { 					
						if(window.location.origin == 'http://localhost') {
							var url = final_url+"/send_mail.php";
						}
						else {
							var url = window.location.origin + "/send_mail.php";
						}
						
						var from_data = new FormData($("#contact_form")[0]);
						
						$.ajax({
							url: url,
							type: 'POST',
							data: from_data,
							async: false,
							success: function (data) {								
								$("#contact_form")[0].reset();								             
								if(data==='true'){                    
									 alert('Enquiry Has been send, We will Contact you Soon !');
								}
								if(data==='false' ){
									  alert('Please Resent Your Enquiry !');
								}
							},
							cache: false,
							contentType: false,
							processData: false
						});
					}
				});
			  
                $("#contact_form").validate({
					ignore: 'input[type=hidden], .select2-input', // ignore hidden fields
					errorClass: 'error',
					successClass: 'validation-valid-label',
					highlight: function(element, errorClass) {
						$(element).removeClass(errorClass);
					},
					unhighlight: function(element, errorClass) {
						$(element).removeClass(errorClass);
					},

					// Different components require proper error label placement
					errorPlacement: function(error, element) {

						// Styled checkboxes, radios, bootstrap switch
						if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container') ) {
							if(element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
								error.appendTo( element.parent().parent().parent().parent() );
							}
							 else {
								error.appendTo( element.parent().parent().parent().parent().parent() );
							}
						}

						// Unstyled checkboxes, radios
						else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
							error.appendTo( element.parent().parent().parent() );
						}

						// Inline checkboxes, radios
						else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
							error.appendTo( element.parent().parent() );
						}

						// Input group, styled file input
						else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
							error.appendTo( element.parent().parent() );
						}
						else {
							error.insertAfter(element);
						}
					},
					validClass: "validation-valid-label",
					rules: {
						vali: "required",											
						email: {
							email: true
						},						
						phone: {
							minlength: 10,
							digits: true
						},						
						date: {
							date: true
						}										
					},
					messages: {
						custom: {
							required: "This is a custom error message",
						},
						agree: "Please accept our policy"
					}
				});
				
              </script>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR GHATKOPAR BRANCH</strong>
                    <p class="text-white">Office no. 3, Arvind Villa, Station Road, Opp. Ghatkopar Station, Bharat Cafe Hotel, Ghatkopar (W),</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR CONTACT NUMBER</strong>
                    <p>+(91) 9152012535 / 9152012534 / 9594323786</p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-12 text-white">
                <div class="icon-box left media bg-black-333 p-25 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-color-2"></i></a>
                  <div class="media-body"> <strong class="text-white">OUR CONTACT E-MAIL</strong>
                    <p>iitminds.ghatkopar@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">

          <!-- Google Map HTML Codes -->
          <!-- <div 
            data-address=" Arvind Villa, Station Road, Opp. Ghatkopar Station, Bharat Cafe Hotel, Ghatkopar (W),"
            data-popupstring-id="#popupstring1"
            class="map-canvas autoload-map"
            data-mapstyle="style8"
            data-height="400"
            data-latlng="19.086119,72.906602"
            data-title="sample title"
            data-zoom="12"
            data-marker="images/map-marker.png">
          </div> -->
          <div class="map-popupstring hidden" id="popupstring1">
            <div class="text-center">
              <h3>GHATKOPAR BRANCH</h3>
              <p>Office no. 3, Arvind Villa, Station Road, Opp. Ghatkopar Station, Bharat Cafe Hotel, Ghatkopar (W), Mumbai-400 086</p>
            </div>
          </div>
          <!-- Google Map Javascript Codes -->
		  <!--iframe src="https://www.google.com/maps/d/embed?mid=zBPcgGa3z-PA.kIU1Ft_gm-Fg" width="100%" height="350"></iframe-->
          <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
          <script src="js/google-map-init.js"></script>

        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <?php include 'include/footer.php';?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>