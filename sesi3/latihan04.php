<?php
//PHP Index arrays
//model1

//$cars = array("Fortuner","BMW","TOYOTA","Pajero");
//model2
$cars[0] = "BMW";
$cars[1] = "FORTUNER";
$cars[2] = "PAJERO";

for($i=0;$i <3;$i++){
    echo "Mobil ",$cars[$i]."<br>";
}