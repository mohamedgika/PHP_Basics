<?php
session_start();

define("USERNAME","mohamed"); //This Function Define Any Varriable We Want Const ثابت
define("PASSWORD","12345");

if(isset($_POST['Username'])) //Function To Set First Value In Form
{
    if($_POST['Username']==USERNAME && $_POST['Password']==PASSWORD)
    {
        $_SESSION['Username'] = $_POST['Username'];
        header("LOCATION: Login_Session.php");
    }
}


?>