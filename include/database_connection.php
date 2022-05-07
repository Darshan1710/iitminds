<?php
 //    $hostname="localhost";
	// $username="smartspv_ooh";
	// $password="OOH@SmartAds";
	// $dbname="smartspv_iitminds";
$hostname="localhost";
	$username="root";
	$password="";
	$dbname="iitminds";

	
	
    // Create connection to DB server
    $con = mysqli_connect($hostname, $username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	mysqli_select_db($con , $dbname)  or die("Error " . mysqli_error());

    
?>