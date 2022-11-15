<?php
include("koneksi.php");
?>

<html>
<head>
</head>
</body>
<h1>Aplikasi Voting "Ecommerce"</h1>
<h4> <a href=form.php> Aplikasi Voting "Ecommerce"</a></h4>
<table border="1">
<tr>
    <th>Id</th>
    <th>Nik</th>
    <th>Nama</th>
    <th>Ecommerce</th>
    <th>Aksi</th>
</tr>

<?php
include("koneksi.php");
$sql= "SELECT * from indahganjil";
$query =mysqli_query($db, $sql);

while($indahganjil=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$indahganjil['id']."</td>";
    echo "<td>".$indahganjil['nik']."</td>";
    echo "<td>".$indahganjil['nama']."</td>";
    echo "<td>".$indahganjil['ecommerce']."</td>";
    echo "<td>";
    echo "<a href='edit-tambah.php?id=".$indahganjil['id']."'>Edit</a> /";
    echo "<a href='hapus-tambah.php?id=".$indahganjil['id']."'>Hapus</a> /";
    echo "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>