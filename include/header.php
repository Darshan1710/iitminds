<?php include 'db.php'; ?>
<div class="header-top bg-theme-color-2 sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
		  <div class="col-md-6">
			   <marquee  class="marquee_text">
			        <?php $marqueeQuery = "SELECT * FROM marquee_text WHERE status = '1' ORDER BY id DESC LIMIT 1 ";
                    $marquee = mysqli_query($con,$marqueeQuery);
                    if($marquee){
                        foreach($marquee as $marqueeRow){
                            echo $marqueeRow['heading'];
                        }
                    }?>
			 </marquee>
			 
		  </div>
          <div class="col-md-3">
            
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li><a href="https://www.facebook.com/iitminds" target="_blank"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="https://instagram.com/iitminds_online?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="https://www.linkedin.com/in/iitminds-coaching-12aa05238" target="_blank"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8">
            <div class="widget no-border m-0">
              <a href="index.php" class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="images/logo.png"  width="200px" alt="iit-minds" title="iit-minds"></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="+919594323786" class="font-12 text-gray text-uppercase"><strong>Call us today !</strong></a>
                  <h5 class="font-14 m-0 ">
                    <a href="tel:+919152012535" class="text-black"> +(91) 9152012535</a> / 
                    <a href="tel:+919152012534" class="text-black"> 9152012534 </a>/
                    <a href="tel:+919594323786" class="text-black"> 9594323786</a>
                  </h5>
                </li>
              </ul>
            </div>
          </div>  

        </div>
      </div>
    </div>
    
	<?php include 'menu.php'?>