<html>
<head>
</head>
<body>
    <h1>FORM BANTUAN BLT</h1>
<form action="prosestambah.php" method="POST">
<form>
<fieldset>
    <p>
        <label for="nama"> Nama Lengkap: </label>
        <input type="text" name="nama"/>
    </p>
    <p>
        <label for="jb"> Jenis Bantuan :</label>
        <label><input type="radio" name="jb" Value="Tunai"/>Tunai</label>
        <label><input type="radio" name="jb" Value="Non_Tunai"/>Non Tunai</label>
        <label><input type="radio" name="jb" Value="Beras"/>Beras</label>
        <label><input type="radio" name="jb" Value="Minyak"/>Minyak</label>
        <label><input type="radio" name="jb" Value="Gula"/>Gula</label>
    </p>
    <p>
        <input type="submit" name="kirim_data" value="kirim_data"/>
</p>
</fieldset>
</form>
</body>
</html>