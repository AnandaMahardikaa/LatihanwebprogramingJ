<?php
    $dta[0] ["NIM"] = "1122334455";
    $dta[0] ["NAMA"] = "Putu merintis";
    $dta[0] ["JKEL"] = "L";
    $dta[0] ["ALAMAT"] = "LION KING";
    $dta[0] ["TGLL"] = "2002-05-26";
    $dta[0] ["JURUSAN"] = "Teknik Informatika";
    $dta[0] ["HOBI"] = "Tangkil";

    $dta[1] ["NIM"] = "2233445566";
    $dta[1] ["NAMA"] = "made merantau";
    $dta[1] ["JKEL"] = "p";
    $dta[1] ["ALAMAT"] = "Denpasar City";
    $dta[1] ["TGLL"] = "2001-02-21";
    $dta[1] ["JURUSAN"] = "Teknik Informatika";
    $dta[1] ["HOBI"] = "mebanten";

    $dta[2] ["NIM"] = "3344556677";
    $dta[2] ["NAMA"] = "ketut sugih";
    $dta[2] ["JKEL"] = "L";
    $dta[2] ["ALAMAT"] = "kuala lumpur";
    $dta[2] ["TGLL"] = "2001-06-19";
    $dta[2] ["JURUSAN"] = "Teknik Informatika";
    $dta[2] ["HOBI"] = "melukat";

    $dta[3] ["NIM"] = "4455667788";
    $dta[3] ["NAMA"] = "nyoman jemet";
    $dta[3] ["JKEL"] = "L";
    $dta[3] ["ALAMAT"] = "Karang asem";
    $dta[3] ["TGLL"] = "2001-04-04";
    $dta[3] ["JURUSAN"] = "Teknik Informatika";
    $dta[3] ["HOBI"] = "kerauhan";

    $dta[4] ["NIM"] = "4455668899";
    $dta[4] ["NAMA"] = "komang rajin";
    $dta[4] ["JKEL"] = "L";
    $dta[4] ["ALAMAT"] = "buleleng";
    $dta[4] ["TGLL"] = "2001-03-22";
    $dta[4] ["JURUSAN"] = "Teknik Informatika";
    $dta[4] ["HOBI"] = "sleep call with baby hony";


    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);