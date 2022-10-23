<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_051");

$id_illiya= $_POST['id_illiya'];
$nama_illiya = $_POST['nama_illiya'];
$alamat_illiya = $_POST['alamat_illiya'];

$sql = "INSERT INTO tbl_illiya VALUES('$id_illiya','$nama_illiya','$alamat_illiya')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "Eksekusi gagal";
}else{
    echo "Eksekusi tambah data berhasil<br>";
    echo "<a href ='tampil.php'>Show data</a>";
}

?>