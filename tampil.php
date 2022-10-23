<?php
$koneksi = mysqli_connect("localhost","root","","db_051");

$sql = "select * from tbl_illiya";
$hasil = mysqli_query($koneksi,$sql);
?>
<h4>Nama : Illiya Rosida<br>
NIM : 210411100051<br>
Kelas : PAW C</h4>
<a href="tambah.php">Tambah</a>
<table border="1" width="80%">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
<?php
    while ($row=mysqli_fetch_assoc($hasil)){
?>
    <tr>
        <td><?=$row['id_illiya']?></td>
        <td><?=$row['nama_illiya']?></td>
        <td><?=$row['alamat_illiya']?></td>
        <td>
            <a href="delete.php?id=<?=$row['id_illiya']?>" onclick="return confirm('apakah anda yakin ingin menghapus==<?php echo $row['nama_illiya']?>= Dari Database?');" >Delete</a>
            <a href="edit.php?id=<?=$row['id_illiya']?>">Edit</a>
        </td>
    </tr>
<?php } ?>
</table>