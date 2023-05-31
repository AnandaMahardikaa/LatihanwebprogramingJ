<?php
    $dta["NIM"] = "1122334455";
    $dta["NAMA"] = "Putu merintis";
    $dta["JKEL"] = "L";
    $dta["ALAMAT"] = "LION KING";
    $dta["TGLL"] = "2002-05-26";
    $dta["JURUSAN"] = "Teknik Informatika";
    $dta["HOBI"] = "Tangkil";
    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);