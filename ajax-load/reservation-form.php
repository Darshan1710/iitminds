<?php include '../db.php';?>
<div class="modal-header bg-theme-colored">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title text-white text-center" id="myModalLabel">Reservation Form</h4>
</div>
<div class="p-40">
  <!-- Reservation Form Start-->
    <form id="reservation_form_popup" name="reservation_form" class="reservation-form" method="post" action="">
	<h3 class="mt-0 line-bottom text-theme-colored mb-40">Get A Free Service<span class="text-theme-colored font-weight-600"> Now!</span></h3>
      <div class="row">
        <input type="hidden" name="page_location" id="page_location" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>" >
        <input type="hidden" id="base_url" value="<?php echo $base_url; ?>">         
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Enter Name" type="text" id="name" name="name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Email" type="text" id="email" name="email" class="form-control" required="">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <div class="styled-select">
                        <select id="courses" name="courses" class="form-control" required>
                          <option value="">Please Select Courses</option>
                          <option value="School">School - Section</option>
                          <option value="College">College - Section</option>
                          <option value="JEE">JEE</option>
                          <option value="NEET">NEET</option>
                          <option value="MH - CET">MH - CET</option>
                        </select>
                      </div>
                    </div>
                  </div>
				  
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Phone" type="text" id="phone" name="phone" class="form-control" required="">
                    </div>
                  </div>
				  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="Enter Message" rows="3" class="form-control required" name="message" id="message" aria-required="true"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-0 mt-10">                      
                      <button type="submit" class="btn btn-colored btn-default text-white font-weight-600 btn-lg btn-block" data-loading-text="Please wait..." style="background-color: #e41937 !important;">Submit Request</button>
                    </div>
                  </div>
                </div>
    </form>
    <!-- Reservation Form End-->

    <!-- Reservation Form Validation Start-->
    <script type="text/javascript">
    var final_url = $('#base_url').val();
      $("#reservation_form_popup").validate({
        submitHandler: function(form) {
			  var form_btn = $(form).find('button[type="submit"]');
			  var form_result_div = '#form-result';
			  $(form_result_div).remove();
			  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
			  var form_btn_old_msg = form_btn.html();
			  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
			  if(window.location.origin == 'http://localhost') {
					var url = final_url;
				}
				else {
					var url = window.location.origin + "/";
				}
				
				var from_data = new FormData($("#reservation_form_popup")[0]);
						
				$.ajax({
					url: url+'send_mail.php',
					type: 'POST',
					data: from_data,
					async: false,
					success: function (data) {
						if(data){
							$("#reservation_form_popup")[0].reset();							
							if(data==='true'){                    
								 alert('Enquiry Has been send, We will Contact you Soon !');
								 window.location.replace(url+'download.php');
							}
							if(data==='false' ){
								  alert('Please Resent Your Enquiry !');
							}
							form_btn.prop('disabled', false);
							form_btn.html(form_btn_old_msg);
						}						
					},
					cache: false,
					contentType: false,
					processData: false
				});				
			}
        });
    </script>
    <!-- Reservation Form Validation Start -->
</div>
<!-- Footer Scripts -->
<script>
  //reload date and time picker
  THEMEMASCOT.initialize.TM_datePicker();
</script>