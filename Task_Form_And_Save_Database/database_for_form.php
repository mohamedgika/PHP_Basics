<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$con = mysqli_connect('localhost','root','','form');
$x = "INSERT INTO `information` (`name`, `phone`) VALUES ('$name','$phone')";

mysqli_query($con,$x);




?>