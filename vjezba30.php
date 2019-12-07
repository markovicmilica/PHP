<?php

$price=mt_rand(10,100);
$isnow=mt_rand(0,1);
$discount=0.2;
$class="";

// ispitivanje da li je proizvod nov
if($isnow){
    $class="class='border'";
}
//ispitivanje cijene i popusta
if($price>50){
    $discountPrice=$price*$discount;
    echo "<h1>Item is discount " . "<span class {$class}>" . 
    $discountPrice . 
    " BAM" . 
    "<del>(" . 
    $price . 
    ")</del>" . 
    "</span>" . 
   "</h1>";
}else{
   echo "<h1>Item is not on discount " . 
    "<span {class}>" . 
    $price . 
    " BAM" . 
    "</span>" . 
    "</h1>";
}



?>