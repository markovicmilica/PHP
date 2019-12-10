<?php

$dani=31;
$mjeseci=12;
$godineStart=1980;
$godineEnd=date('Y');

echo "<div>";
echo "<select name='dani'>";
echo "<option>dan</option>";
 for($i=1; $i<=$dani; $i++){
echo "<option value= $i>";
echo $i;
echo "</option>";
}
echo "</select>";




echo "<select name='mjeseci'>";
echo "<option>mjesec</option>";
 for($m=1; $m<=$mjeseci; $m++){
echo "<option value= $m>";
echo $m;
echo "</option>";
}
echo "</select>";




echo "<select name='godine'>";
echo "<option>godina</option>";
 for($j=$godineStart; $j<=$godineEnd; $j++){
echo "<option value= '$j'>";
echo $j ;
echo "</option>";
}
echo "</select>";
echo "</div>";





?>