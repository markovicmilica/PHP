<?php
$studenti=1;
$Profesori=2;
$koordinatori=3;
$tehnickapodrska=4;


$logovaniKorisnik=1;
$dozvoljeniKorisnici="$tehnickapodrska|$koordinatori";


if(("$logovaniKorisnik&$dozvoljeniKorisnici")!=0){
    echo "HELLO, this user is alowed";
}else{
    echo "UNKNOWEN USER";
}






?>