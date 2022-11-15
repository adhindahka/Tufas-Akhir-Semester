<DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tambah</title>
</head>
<body>
    <header>
        <h1>Aplikasi Voting "Ecommerce"</h1>
</header>
<form action="proses.php" method="POST">
    <fieldset>
</p>
</p>
        <p>
            <label for="nik"> Nik : </label>
            <input type="text" name= "nik" />
</p>
<p>
    <label for ="nama"> Nama : </label>
    <input type="text" name="nama"/>
</p>
<p>
</label for="ecommerce">Ecommerce :</label>
<select name='ecommerce'>
    <option value='shopee'>shopee</option>
    <option value='tokopedia'>tokopedia</option>
    <option value='bukalapak'>bukalapak</option>
    <option value='blibli'>blibli</option>
    <option value='lazada'>lazada</option>
</select>
</p>
<p>
    <input type="submit" value="Kirim Data" name="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>