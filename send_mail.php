<?php

$input_data = $_POST;
include('libraries/PHPMailer-master/PHPMailerAutoload.php');
include('include/database_connection.php');

$message = " ";
if ($input_data) {
    if (isset($input_data['subject'])) {
        $message .= "<strong>Subject :- </strong>" . $input_data['subject'] . "<br>\n";
    }
    if (isset($input_data['name'])) {
        $message .= "<strong>Name :- </strong>" . $input_data['name'] . "<br>\n";
    }
    if (isset($input_data['date'])) {
        $message .= "<strong>Date :- </strong>" . $input_data['date'] . "<br>\n";
    }

    if (isset($input_data['email'])) {
        $message .= "<strong>Email Id :- </strong>" . $input_data['email'] . "<br>\n";
    }
    if (isset($input_data['phone'])) {
        $message .= "<strong>Contact Number :- </strong>" . $input_data['phone'] . "<br>\n";
    }
    if (isset($input_data['courses'])) {
        $message .= "<strong>Courses :- </strong>" . $input_data['courses'] . "<br>\n";
    }
    if (isset($input_data['message'])) {
        $message .= "<strong>Message :- </strong><br>" . $input_data['message'] . "<br><br>\n";
    }
    if (isset($input_data['page_location'])) {
        $message .= "<strong>Page Location :- </strong>" . $input_data['page_location'];
    }


    if (isset($input_data['subject'])) {
        $subject = $input_data['subject'];
    } else {
        $subject = "IIT-Minds : Enquiry from Website !";
    }
    if (isset($input_data['name'])) {
        $name = $input_data['name'];
    } else {
        $name = '';
    }
    if (isset($input_data['email']) && filter_var($input_data['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $input_data['email'];
    } else {
        $email = '';
    }

    if (isset($input_data['phone']) && preg_match('/^[0-9]{10}+$/', $input_data['phone'])) {
        $phone = $input_data['phone'];
    } else {
        $phone = NULL;
    }
    if (isset($input_data['courses'])) {
        $courses = $input_data['courses'];
    } else {
        $courses = '';
    }
    if (isset($input_data['message'])) {
        $user_message = $input_data['message'];
    } else {
        $user_message = '';
    }
    if (isset($input_data['page_location'])) {
        $page_location = $input_data['page_location'];
    } else {
        $page_location = '';
    }
}


$sql_query = "insert into enquiry (subject, name, email, phone, courses, message, page_link) values ( '" . $subject . "','" . $name . "','" . $email . "','" . $phone . "','" . $courses . "','" . $user_message . "','" . $page_location . "')";
mysqli_query($con, $sql_query) or die(mysqli_error());

ob_start();

$mail = new PHPMailer();
$mail->SMTPDebug = 2;
$mail->IsSMTP(); // we are going to use SMTP
$mail->SMTPAuth = true; // enabled SMTP authentication
$mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
$mail->Host = "smtp.gmail.com";      // setting GMail as our SMTP server
$mail->Port = 587;                   // SMTP port to connect to GMail
$mail->Username = "iitmindsconnects@gmail.com";  // user email address
$mail->Password = "iitmindsshukla";            // password in GMail
$mail->SetFrom("enquiry@iit-minds.com", "IIT-Minds");  //Who is sending the email
// $mail->AddAddress("kinidarshan07@gmail.com","IIT-Minds");  //email address that receives the response
// $mail->AddAddress("ashishbabariya.8@gmail.com","IIT-Minds");  //email address that receives the response
$mail->IsHTML(true);
$mail->Subject = $subject;
$mail->Body = $message;

if ($mail->send()) {
    ob_clean();
    echo "true";
    exit;
} else {
    //echo $mail->ErrorInfo;exit;
    // create email headers
    $email_from = "enquiry@iit-minds.com";
    $email_to = "enquiry@iit-minds.com";
    $email_subject = $subject;
    $email_message = $message;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        echo "true";
    } else {
        echo 'false';
    }
}


?>