<?php
$potrosnjaGoriva=7;
$stanjeRezervoara=90;
$distanca=900;

$ocekivanaDistanca=100*$stanjeRezervoara/$potrosnjaGoriva;
$ocekivanapotrosnja=$potrosnjaGoriva*$distanca/100;


//$potrosnjaGoriva*$stanjeRezervoara/100;---potronja rezervoara

define("KM","kilometar");
define("L","litara" );
define("L/KM" , "litara/kilometru");

//očekivana distanca
echo "Sa stanjem rezervoara " . $stanjeRezervoara . " l, automobil moze preći " . $ocekivanaDistanca . " KM";
echo"<br>";

//očekivana potrosnja goriva
echo "Da bi automobil prešao " . $distanca . " KM, potrebno mu je " . $ocekivanapotrosnja . "L goriva";
echo"<br>";

//Da li će automobil imati dovoljno goriva za očekivani put

if($stanjeRezervoara>$ocekivanapotrosnja){
    echo "Automobil će sa trenutnim stanjem rezervoara preći zadatu distancu od " . $distanca . " KM.";
}else{
    echo "Automobil nema dovoljnu količinu goriva da pređe zadatu distancu";
}



?>