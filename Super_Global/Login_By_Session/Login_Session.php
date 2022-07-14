<?php
session_start();

if(empty($_SESSION['Username']))
{
    header("LOCATION: Login_By_Session.php"); //Function Return To Page And Start Again

}

echo "Home";



?>