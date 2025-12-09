<?php 
require 'koneksi.php';
$nim = $_GET['nim'];
$query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
$sql = $koneksi->query($query);
$data = $sql->fetch_assoc();
?>

<h1>Edit Data Mahasiswa</h1>

<form action="proses.php" method="post">
    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim"
               value="<?= $data['nim'] ?>">
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs"
               value="<?= $data['nama_mhs'] ?>">
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
               value="<?= $data['tgl_lahir'] ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $data['alamat'] ?></textarea>
    </div>
    <div>
        <!-- NIM LAMA -->
        <input type="hidden" name="nim_lama" value="<?= $data['nim'] ?>">

        <input type="submit" name="ubah" value="Update" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </div>
</form>
