<?php
$flname="";
    if(isset($_POST["upfiles"])){
       /* echo "<pre>";
        print_r($_FILES);
        echo "</pre>";*/
        $path="upfiles/";
        $flname = $path . basename( $_FILES["FlGAMBAR"]["name"]);
        move_uploaded_file($_FILES["FlGAMBAR"]["tmp_name"],$flname);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="uploadfil.php" enctype="multipart/form-data">
        <div>
            File Gambar
            <input type="file" name="FlGAMBAR" accept=".jpg, .jpeg, .png">
        </div>

        <div>
            <button type="submit"> Upload Gambar</button>
        </div>
        <input type="hidden" name="upfiles">
    </form>
    <div>
<?php
if(!$flname==""){
    echo"<img src='".$flname."'>";
}
?>
    </div>
    
</body>
</html>