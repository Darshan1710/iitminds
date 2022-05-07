<?php include 'db.php'; ?>
<form id="get_registration_form" name="reservation_form" class="mt-20">
    <input type="hidden" name="page_location" id="page_location"
           value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>">
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
                        <option value="">Courses</option>
                        <option value="School">School - Section</option>
                        <option value="College">College - Section</option>
                        <option value="JEE">JEE</option>
                        <option value="NEET">NEET</option>
                        <option value="MHT - CET">MHT - CET</option>
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
                <textarea placeholder="Enter Message" rows="3" class="form-control required" name="message" id="message"
                          aria-required="true"></textarea>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group mb-0 mt-10">
                <button type="submit"
                        class="btn btn-colored <?php echo $bacground = $current_url == 'https://www.iit-minds.com/' || $current_url == 'https://www.iit-minds.com/index.php/' ? 'background-white text-black' : 'background-maroon text-white' ?>  font-weight-600 btn-lg btn-block submit_request"
                        data-loading-text="Please wait...">Submit Request
                </button>
            </div>
        </div>
    </div>
</form>
<!-- Application Form End-->

<!-- Application Form Validation Start-->
<script type="text/javascript">
    var final_url = $('#base_url').val();
    $.validator.setDefaults({
        submitHandler: function () {
            if (window.location.origin == 'http://localhost') {
                var url = final_url;
            } else {
                var url = window.location.origin + "/";
            }

            var from_data = new FormData($("#get_registration_form")[0]);

            $.ajax({
                url: url + 'send_mail.php',
                type: 'POST',
                data: from_data,
                async: false,
                success: function (data) {
                    //alert(data);
                    $("#get_registration_form")[0].reset();
                    if (data == 'true') {
                        alert('Enquiry Has been send, We will Contact you Soon !');
                        window.location.replace(url + 'download.php');
                    }
                    if (data == 'false') {
                        alert('Please Resent Your Enquiry !');
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    var base_url = $('#current_url').val();
    if (base_url == 'https://www.iit-minds.com/') {
        var errorCode = 'error';
    } else {
        var errorCode = 'text-white';
    }

    $("#get_registration_form").validate({


        ignore: 'input[type=hidden], .select2-input', // ignore hidden fields
        errorClass: errorCode,
        successClass: 'validation-valid-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function (error, element) {

            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
                if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo(element.parent().parent().parent().parent());
                } else {
                    error.appendTo(element.parent().parent().parent().parent().parent());
                }
            }

            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                error.appendTo(element.parent().parent().parent());
            }

            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo(element.parent().parent());
            }

            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        rules: {
            valid: "required",
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