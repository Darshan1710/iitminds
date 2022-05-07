<?php

$con = mysqli_connect("localhost", "root", "", "iitminds") or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");

$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/iit-minds.com/';

$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$image_url = 'http://' . $_SERVER['HTTP_HOST'] . '/iit-minds.com/cms/';
?>

