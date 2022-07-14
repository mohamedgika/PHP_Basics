<?php
session_start();
session_destroy();
header("LOCATION: Form_Login.html");

?>