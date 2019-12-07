<?php

$proizvod1="jabuke";
$proizvod2="kruske";
$proizvod3="sljive";


$cijena1=1.8;
$cijena2=3.3;
$cijena3=1.1;


$vc1="";
$vc2="";
$vc3="";


if($cijena1>=0 & $cijena1<=1.5){
    $vc1="niska";
}elseif($cijena1>=1.6 & $cijena1<=2){
$vc1="srednja";
}elseif($cijena1>2){
    $vc1="visoka";
}



if($cijena3>=0 & $cijena3<=1.1){
    $vc3="niska";
}elseif($cijena3>=1.2 & $cijena3<=2){
$vc3="srednja";
}elseif($cijena1>2){
    $vc3="visoka";
}



if($cijena2>=0 & $cijena2<=1.8){
    $vc2="niska";
}elseif($cijena2>=1.9 & $cijena2<=3){
$vc2="srednja";
}elseif($cijena2>3.1){
    $vc2="visoka";
}




echo "Cijena " . $proizvod1 . " iznosi " . $cijena1 . "KM, i ova cijena je " . $vc1;
echo "<br>";
echo "Cijena " . $proizvod2 . "iznosi " . $cijena2 . "KM, i ova cijena je " . $vc2;
echo "<br>";
echo "Cijena " . $proizvod3 . "iznosi " . $cijena3 . "KM, i ova cijena je " . $vc3;










?>