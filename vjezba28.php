<?php

$startValue=10;//početak puta
$endvalue=120;//kraj puta
$trip=150;//dužina pređenog puta


//endvalue-startvalue(kompletna dužina puta)
//ukoliko je pređeni put veći od kompletne dužine treba ispisati poruku: You PREKORAČENA DUŽINA PUTA more than needed
//Ukoliko je pređeni put kraći od dužine: you need KOLIKO NEDOSTAJE to go
//ukoliko je pređeni put isti kao dužina: you passed exect distance

$kompletnaDuzinaPuta=$endvalue-$startValue;

if($trip>$kompletnaDuzinaPuta){
    echo "You passed " . ($trip-$kompletnaDuzinaPuta) . " more than needed";
}elseif($trip<$kompletnaDuzinaPuta){
    echo "You needed " . ($kompletnaDuzinaPuta-$trip) . " to go";
}elseif($trip==$kompletnaDuzinaPuta){
    echo "You passed exact distance";
}
?>