<?php
$koneksi = mysqli_connect("localhost","root","","db_051");
$id_illiya=$_GET['id'];

$sql="delete from tbl_illiya where id_illiya=$id_illiya";
$hasil=mysqli_query($koneksi,$sql);

if(!$hasil){
    echo "<script>alert('Data GAGAL di delete');location.href='tampil.php'</script>";
}else{
    echo "<script>alert('Data BERHASIL di delete');location.href='tampil.php'</script>";
}
?>