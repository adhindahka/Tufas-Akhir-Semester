<?php
include ("koneksi.php");
if(!isset($_GET['id'])){
    header ('Location:tampil.php?');
}
$id = $_GET['id'];
$sql = "SELECT * FROM indahganjil WHERE id=$id";
$query = mysqli_query($db, $sql);
$db_indah8nov = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <form action="proses-edit.php" method="POST">
        <form>
            <fieldset>
                <input type="hidden" name ="id" value="<?php echo $db_indah8nov['id']?>"/>
                <p>
                    <label for="nama"> Nama Lengkap : </label>
                    <input type ="text" name="nama" value="<?php echo $db_indah8nov['id']?>"/>
</p>
                <p>
                    <label for="ecommerce">Ecommerce : </label>
                    <select name='ecommerce'>
                    <option value='shopee'>Shopee</option>
                    <option value='tokopedia'>Tokopedia</option>
                    <option value='bukalapak'>Bukalapak</option>
                    <option value='blibli'>Blibli</option>
                    <option value='lazada'>Lazada</option>
</select>
</p>
<p>
    <input type= "submit" value ="Kirim Data" name ="kirim"/>
</p>
</fieldset>
</form>
</body>
</html>