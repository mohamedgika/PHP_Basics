<?php

$name_product = $_POST['name_product'];
$price = $_POST['price'];
$Gategory_id = $_POST['Gategory_id'];
// $id = $_POST['id'];

//1
$con = mysqli_connect('localhost','root','','souq.com');

//2
$insert = "INSERT INTO `product` ( `name_product`, `price`, `Gategory_id`) VALUES ('$name_product',$price,$Gategory_id)";
// $update = "UPDATE `product` SET `name_product`= '$name_product' WHERE `id`=$id "; //update
// $delete = "DELETE FROM `product` WHERE `id`=$id"; //delete

mysqli_query($con,$insert); // to confirm connection with insert

//3
if(mysqli_affected_rows($con) == 1){ 
    echo "Done";
}else{
    echo "Not Successfully";
}
// echo mysqli_affected_rows($con); // to show data save or not

?>