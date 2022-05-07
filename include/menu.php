    <?php
	$file_name = basename($_SERVER['PHP_SELF']);
	?>
	
	<div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="<?php if($file_name == ' ') { echo 'active'; } ?>"><a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a></li>
                <li class="<?php if($file_name == 'founder.php' || $file_name == 'iit-minds.php' || $file_name == 'media-&-press.php' || $file_name == 'facilities.php') { echo 'active'; } ?>"><a href="founder.php">About </a>
                    <ul class="dropdown">
                        <li><a href="iit-minds.php">IITMINDS</a></li>
                        <li><a href="founder.php">Founder</a></li>
                        <!-- <li><a href="facilities.php">Facilities</a></li>
                        <li><a href="media-&-press.php"> Media and Press</a></li> -->
                    </ul>
                </li>
                <li class="<?php if($file_name == 'best-iit-coaching-mumbai.php' || $file_name == 'neet-classes-mumbai-ghatkopar.php' || $file_name == 'mht-cet-classes-engineering-medical.php' || $file_name == 'classes-mumbai-iit-neet-mht-cet.php') { echo 'active'; } ?>"><a href="classes-mumbai-iit-neet-mht-cet.php">Courses</a>
                <ul class="dropdown">
                    <li class="<?php if($file_name == 'best-classes-for-11th-and-12th-science-mumbai-ghaktopar.php' || $file_name == 'best-classes-for-11th-12th-science-pcm-ghaktopar.php' || $file_name == '11th-12th-pcm-jee-classes-in-mumbai-ghatkopar.php' || $file_name == 'best-11th-12th-pcmb-neet-classes-in-ghatkopar.php' || $file_name == 'coaching-classes-11th-12th-pcmb-ghatkopar.php' || $file_name == 'coaching-classes-11th-12th-pcm-ghatkopar.php') { echo 'active'; } ?>"><a href="best-classes-for-11th-and-12th-science-mumbai-ghaktopar.php">College Section</a>
                      <ul class="dropdown">
                          <li class="<?php if($file_name == 'engineering.php') { echo 'active'; } ?>"><a href="engineering.php">Engineering</a>
                    </li>
                          <li class="<?php if($file_name == 'medical.php') { echo 'active'; } ?>"><a href="medical.php">Medical</a>
                    </li>
                    <li class="<?php if($file_name == 'commerce.php') { echo 'active'; } ?>"><a href="commerce.php">Commerce</a>
                    </li>

                      </ul>
                    </li>
                    <li class="<?php if($file_name == 'coaching-classes-8th-9th-ssc-coaching.php') { echo 'active'; } ?>"><a href="coaching-classes-8th-9th-ssc-coaching.php">School Section</a>
                    </li>
                    
                </ul>
              </li>
              <li class="<?php if($file_name == 'result.php') { echo 'active'; } ?>"><a href="result.php">Result</a></li>
              <!-- <li class="<?php if($file_name == 'blog.php') { echo 'active'; } ?>"><a href="blog.php">Blog</a></li> -->
              <li class="<?php if($file_name == 'contact-us.php') { echo 'active'; } ?>"><a href="contact-us.php">Contact Us</a></li>

              </li>
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
                <!-- Modal: Enroll Now Starts -->
                <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-30 pr-15 pl-15" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.php">Enroll Now</a>
                <!-- Modal: Enroll Now End -->
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>