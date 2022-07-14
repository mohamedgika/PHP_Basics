<?php
// Array In PHP Dynamic 

// First Type Index Array
// $name = array('Mohamed',25,'Cairo','ElMokkattam');
//  $name=['Mohamed',25,'Cairo','ElMokkattam'];

// Second Type Associative Array 
// $name=['Name'=>'Mohamed','Age'=>25,'State'=>'Cairo','City'=>'ElMokkattam'];
// print_r($name);
// echo $name['Name'];

// $name=['Mohamed',25,'Cairo','ElMokkattam','Egypt'];
// $c = count($name);  //This Functiion Let Me Add New Index Inside Array And Automatic Increase
// for($i=0;$i<$c;$i++){
//     echo $name[$i].'<br>';
// }

//This Method Work In Index And Associative Array 
// $name=['Name'=>'Mohamed','Age'=>25,'State'=>'Cairo','City'=>'ElMokkattam'];
// foreach($name as $k => $v){
//     echo $v."<br>";
// }

//Multi Array
$person=[
    ['Name'=>'Mohamed',
    'Age'=>25,
    'State'=>'Cairo',
    'City'=>'ElMokkattam'],

    ['Name'=>'Ashraf',
    'Age'=>18,
    'State'=>'Cairo',
    'City'=>'ElMokkattam'],

    ['Name'=>'Sobhy',
    'Age'=>20,
    'State'=>'Cairo',
    'City'=>'ElMokkattam']

];
// echo "<pre>";
// print_r($person);
// echo '<br>';
// echo $person[2]['Name'];

foreach($person as $p){
    // echo $k."<br>";
    foreach($p as $k => $per){
        echo $k." : ".$per."<br>";
    }
    echo "<hr>";
}

?>