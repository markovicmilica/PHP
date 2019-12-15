<?php

$userStatus="5";

$usermessage=($userStatus==1 | $userStatus==2 | $userStatus==3)? "Welcome user" : "Unknown user";

echo $usermessage;

?>