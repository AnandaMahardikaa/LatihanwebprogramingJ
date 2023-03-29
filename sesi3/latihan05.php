<?php
//model 1
//$age[0] = "peter";
//$age[1] = "Ben";
//$age[2] = "JOE";
$age= array("peter" => "35", "Ben"=> "37", "JOE" => "43");
//print_r($age);
 
foreach($age as $p => $u){
    echo $p. " Umurnya " .$u;
    echo "<br>";
}