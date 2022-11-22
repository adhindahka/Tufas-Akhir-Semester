<?php
include("koneksi.php");
isset($_GET['id']);
$id = $_GET['id'];

$sql = "DELETE FROM indahganjil WHERE id=$id";
$query = mysqli_query($db, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>