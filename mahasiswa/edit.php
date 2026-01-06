<?php
require 'koneksi.php';
$nim = $_GET['nim'];

$edit = $koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
$data = mysqli_fetch_assoc($edit);

$prodi = $koneksi->query("SELECT id, nama_prodi, jenjang FROM prodi");
?>

<h1>Edit Data Mahasiswa</h1>

<form action="/pemograman_web/akademik/proses.php" method="post">

    <!-- NIM sebagai PRIMARY KEY -->
    <input type="hidden" name="nim" value="<?= $data['nim'] ?>">

    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" value="<?= $data['nim'] ?>" disabled>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mhs" value="<?= $data['nama_mhs'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select name="prodi_id" class="form-select">
            <?php while ($p = mysqli_fetch_assoc($prodi)) : ?>
                <option value="<?= $p['id']; ?>"
                    <?= ($data['prodi_id'] == $p['id']) ? 'selected' : '' ?>>
                    <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
                </option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
    </div>

    <button type="submit" name="mhs_update" class="btn btn-primary">Simpan</button>
    <a href="index.php?page=mahasiswa" class="btn btn-secondary">Batal</a>

</form>