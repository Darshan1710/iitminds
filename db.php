<?php

$con = mysqli_connect("localhost", "u420187958_iitminds", "Drshn@1710", "u420187958_iitminds") or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");

$base_url = 'https://' . $_SERVER['HTTP_HOST'] . '/';

$current_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$image_url = 'https://' . $_SERVER['HTTP_HOST'] . '/cms/';
?>

