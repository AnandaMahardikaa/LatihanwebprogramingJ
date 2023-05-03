<h3> Tambah Data User </h3>

<from method="POST" action="tbuser.php">
    <input type ="hidden" name="opsi" value="store">
<div>
    Nama Lengkap
    <input type="text" name="TxNAMA">
</div>
<div>
    Email
    <input type="text" name="TxEMAIL">
</div>
<div>
    User Name
    <input type="text" name="Txuser">
</div>
<div>
    Password
    <input type="text" name="TxPASS1">
</div>
<div>
    Verivikasi Password
    <input type="text" name="TxPASS2">
    <div>
    <button type="submit"> Simpan Data </button>
</div>
</form>