<?php 
    $Koneksi =  mysqli_connect('localhost', 'root', '', 'db_051');
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_illiya WHERE id_illiya = $id";
    $hasil = mysqli_query($Koneksi, $query);
    if (!$hasil) {
        echo "Gagal";
    }
    $baris = mysqli_fetch_array($hasil);
?>
<h1>
	Edit Data
</h1>
<form action="actionedit.php" method="POST">
        <div>
            <input type="hidden" name="id_illiya" value="<?php echo $baris['id_illiya']?>">
        </div>
        <div>
            <label for="nama_illiya">Nama</label>
            <input type="text" id="nama_illiya" name="nama_illiya" value="<?php echo $baris['nama_illiya']?>">
        </div>
        <div>
            <label for="alamat_illiya">Alamat</label>
            <input type="text" id="alamat_illiya" name="alamat_illiya" value="<?php echo $baris['alamat_illiya']?>">
        </div>
        <div>
            <button type="submit" name="kirim">Kirim</button>
            <button type="reset" name="kosongkan">reset</button>
        </div>
    </form>