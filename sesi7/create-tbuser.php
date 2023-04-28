<?php
    include("konfigurasi.php");

    $s_db = "CREATE TABLE tbuser(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        username VARCHAR(10),
        passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";
    echo"SQL: ".$s_db."<br>";

    //koneksi ke DBMS Mysql
    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);
    if($cnn){
        echo "koneksi ke DBMS Mysql sukses<br>";
       $hsl = mysqli_query($cnn,$s_db);
       if($hsl) {
          echo"membuat Tabel tbuser sukses<br>";
       }else{
          echo "Membuat Tabel  tbuser gagal<br>";
       }

    }else{
        echo "Koneksi ke DBMS Gagal<br>";
    }
    
    