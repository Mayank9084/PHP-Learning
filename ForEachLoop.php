<?php
echo "Welcome in FOR EACH LOOP world <br>";

echo "1st using FOR LOOP <br>";
$arr = array("Kela","Sabe","Amrud","tu");

for($i=0; $i<count($arr); $i++){
    echo $arr[$i];
    echo "<br>";
 }

 // better way to do this

 echo "2nd using FOR EACH Loop <br>";
 
 foreach($arr as $value){
    echo"$value <br>";
 }
?>