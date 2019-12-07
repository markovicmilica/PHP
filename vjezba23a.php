<?php
$current_time= date("h");
$user_age=19;
$user_name="Milica";
$time_message="";
$user_gender="f";
$user_message="";



if($current_time>0 & $current_time<12){
    $time_message="morning";
}if($current_time>12 & $current_time<18){
    $time_message="afternon";
}else{
    $time_message="evening";
}


switch($user_gender){
    case "f":
    $user_message .=(($user_age<18)?"Girl" : "Women");

    break;
    case "m":
    $user_message .=(($user_age<18)? "Boy" : "Man");

    break;
    default: $user_message="Someone";
break;
}
    echo $user_message . " " . $user_name . ", welcome to our site!";
    echo "<br>";
    echo "Your age is, " . $user_age . "!";
    echo "<br>";
    echo "current time is, " . $current_time . "h!";

?>

