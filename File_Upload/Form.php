<?php

print_r($_POST);

echo "<hr>";
echo "<pre>";

print_r($_FILES);

$name = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];

move_uploaded_file($temp,'/Desktop/'.$name);
?>