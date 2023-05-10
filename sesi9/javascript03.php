<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <div>
            Nama Lengkap
            <input type="text" id="txNAMA">
        </div>
        <div>
            <button type="button" onclick="checknama()">CekNama</button>
        </div>
    </form>
    <script>
        function checknama(){
            let nm = document.getElementById("txNAMA").value;
            alert("Isi dari filed nama: "+nm)
        }
    </script>
    
</body>
</html>