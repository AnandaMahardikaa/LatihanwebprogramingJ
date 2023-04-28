<?php
    include("konfigurasi.php");
    include("fungsiUser.php");
    $psn = "";
    if(isset($_POST["txNAMA"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];
            $psn = registerUser($nama,$email,$user,$pass,);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <form method="POST" action="Registrasi.php">
<?php
echo " <div>$psn</div>";
?>
        <div>
            Nama Lengkap
            <input type="text" name="txNAMA" placeholder="your name..">
        </div>
        <div>
            Email
            <input type="email" name="txEMAIL"placeholder="your email..">
        </div>
        <div>
            Username
            <input type="text" name="txUSER"placeholder="your username..">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1"placeholder="your password..">
        </div>
        <div>
            Verivikasi Password
            <input type="password" name="txPASS2"placeholder="password..">
        </div>
        <div>
            <button type="submit"> Registrasi </button>
        </div>
        
    </form>
    
</body>
</html>