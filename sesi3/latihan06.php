<?php
$mhs = array (
    array("nama"=>"Ardika","id"=>"2201010117","add"=>"Denpasar"),
    array("nama"=>"Wahyu","id"=>"2201010118","add"=>"Bali"),
    array("nama"=>"Santi","id"=>"2201010119","add"=>"Konoha"),
    array("nama"=>"Zizi","id"=>"2201010110","add"=>"Malaysie")
);
foreach($mhs as $idx => $dta){
    echo " Data ke- ".$idx. "<br>";
    foreach($dta as $b=>$nval){
        echo $b. " : " .$nval. "<br>";
    
    }
    echo "<br>" ;
}