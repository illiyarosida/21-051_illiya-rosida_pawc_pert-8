<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_051');
    $id = $_POST['id_illiya'];
    $nama = $_POST['nama_illiya'];
    $alamat = $_POST['alamat_illiya'];
    $query = "UPDATE tbl_illiya SET nama_illiya = '$nama', alamat_illiya = '$alamat' WHERE id_illiya = '$id'";
    $hasil = mysqli_query($Koneksi, $query);
    if ($hasil) {
        header("location: tampil.php");
    }
?>