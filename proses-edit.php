<?php
include("koneksi.php");

if(isset($_POST['kirim'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $ecommerce=$_POST['ecommerce'];

    $sql="UPDATE indahganjil SET nama='$nama', ecommerce='$ecommerce' WHERE id=$id";
    $query=mysqli_query($db, $sql);
    if($query){
        header("Location:tampil.php");
    }else{
        die("gagal mengedit");
    }
}else{
    die("berhasil");
}
?>