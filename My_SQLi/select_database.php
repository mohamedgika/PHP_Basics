<?php
//1
$con = mysqli_connect('localhost','root','','souq.com');

//2
$select = "SELECT * FROM `product`";

//3
$all = mysqli_query($con,$select);

$nums_of_rows = mysqli_num_rows($all); // Show Num Of Rows In This Table
echo "Number Of Rows Is : ". $nums_of_rows;

if($nums_of_rows > 0 ){
    
    // $data = mysqli_fetch_assoc($all);

    $take_data = []; // This Array To Take Data And Put In UnLimited Array 
    while ( $data = mysqli_fetch_assoc($all)) { // While loop for fetch All Data In Array 
        $take_data[] = $data;
    }
    echo "<pre>";
    print_r($take_data);

    // for($i = 0 ; $i<$nums_of_rows ; $i++){
    //     $data[$i] = mysqli_fetch_assoc($all);
    // }
    // echo "<pre>";
    // print_r($data); 

}else{
    echo "Not Data";
}






?>