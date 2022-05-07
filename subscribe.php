<?php 

$input_data = $_POST;
include('libraries/PHPMailer-master/PHPMailerAutoload.php');
include('include/database_connection.php');

$message = " ";
if($input_data){
	

	if(isset($input_data['email'])){
		$message .= "<strong>Email Id :- </strong>".$input_data['email']."<br>\n";
	}

	
	
	
	if(isset($input_data['subject'])){
		$subject = $input_data['subject'];
	}else{
		$subject = "IIT-Minds : Subscription !";
	}
	
	if(isset($input_data['email']) && filter_var($input_data['email'], FILTER_VALIDATE_EMAIL)){
		$email = $input_data['email'];
	}else{
		$email = '';
	}
	
	
}


		$sql_query = "insert into enquiry ( email) values ( '".$email."')";
        mysqli_query($con , $sql_query) or die(mysqli_error());

    
        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 587;                   // SMTP port to connect to GMail
        $mail->Username   = "smartads.darshan@gmail.com";  // user email address
        $mail->Password   = "WagonR@2022";            // password in GMail
        $mail->SetFrom("enquiry@iit-minds.com","IIT-Minds");  //Who is sending the email
        $mail->AddAddress("kinidarshan07@gmail.com","IIT-Minds");  //email address that receives the response
       // $mail->AddAddress("ashishbabariya.8@gmail.com","IIT-Minds");  //email address that receives the response
        $mail->IsHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        if($mail->send()){		
            echo  "true";exit;		
        }else{
        	//echo $mail->ErrorInfo;exit;
			// create email headers
            $email_from =  "enquiry@iit-minds.com";
            $email_to = "kinidarshan07@gmail.com";
            $email_subject = $subject;
            $email_message = $message;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: '.$email_from."\r\n".
            'Reply-To: '.$email_from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
 
            if(@mail($email_to, $email_subject, $email_message, $headers)){
                echo  "true";		
            }else{
		    	echo 'false';			
		    }
		}
        
        
    
?>