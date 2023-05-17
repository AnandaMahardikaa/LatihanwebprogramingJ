<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

<form name="latihan 1" method="POST" onsubmit="return checkform(this)">
    <div>
        NIM
        <input type="text" id="txNIM" name="NIM">
    </div>
    <div>
        NAMA
        <input type="text" id="txNAMA" name="NAMA">
    </div>
    <div>
        Jenis Kelamin
        <input type="radio" id="txJKEL" name="JKEL" value="L">Laki-Laki
        <input type="radio" id="txJKEL" name="JKEL" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="JURUSAN" id="txJUR">
        <option value="MTI">MTI</option>
        <option value="DKV">DKV</option>
        <option value="TIPAR">TIPAR</option>
        <option value="KAB">KAB</option>
        </select>
    </div>
    <div>
        Hobi
        <input type="checkbox" name="hobi_1">Rebahan
        <input type="checkbox" name="hobi_2">Overthinking
        <input type="checkbox" name="hobi_3">Menghayal
    </div>
    <div>
        <button type="submit" >Kirim Data </button>
    </div>
</form>

<script>
    function checkform(frm){
        let F = frm.elements;

        let nim = F.namedItem("NIM").value;
        let nama = F.namedItem("NAMA").value;
        let jkel = F.namedItem("JKEL").value;
        let jur = F.namedItem("JURUSAN").value;
        let H1 = F.namedItem("hobi_1").checked;
        let H2 = F.namedItem("hobi_2").checked;
        let H3 = F.namedItem("hobi_3").checked;


        console.log("NIM: "+nim);
        console.log("NAMA: "+nama);
        console.log("JKEL: "+jkel);
        console.log("JURUSAN: "+jur);
        console.log("Hobi: "+H1);
        console.log("Hobi: "+H2);
        console.log("Hobi: "+H3);

        return false;
    }
</script>
    
</body>
</html>