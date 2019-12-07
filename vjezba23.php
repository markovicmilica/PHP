<?php
$current_time= date("h");
$user_age=19;
$user_name="Milica";
$time_message="";



if($current_time>0 & $current_time<12){
    $time_message="morning";
}if($current_time>12 & $current_time<18){
    $time_message="afternon";
}else{
    $time_message="evening";
}
echo "Good " . $time_message .  $user_name . ".";
