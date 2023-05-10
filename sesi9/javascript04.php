<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perhitungan</title>
</head>
<body>
<form>
        <div>
            Masukan Alas
            <input type="text" id="txALAS">
        </div>
        <div>
            Masukan Tinggi
            <input type="text" id="txTINGGI">
        </div>
        <div>
            <button type="button" onclick="hitung()">Hitung</button>
        </div>
    </form>
    <script>
        function hitung(){
            let alas = document.getElementById("txALAS").value;
            let tinggi = document.getElementById("txTINGGI").value;
            alert("Hasil Dari Hitunganya Adalah: "+ 0.5*alas*tinggi)
        }
    </script>
</body>
</html>