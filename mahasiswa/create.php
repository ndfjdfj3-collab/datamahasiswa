<?php
    require 'koneksi.php';
    $prodi = $koneksi->query("SELECT id, nama_prodi, jenjang FROM prodi");
?>
<h1>Input Data Mahasiswa</h1>
<form action="/pemograman_web/akademik/proses.php" method="POST">

    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="text" class="form-control" id="nim" name="nim" required>
    </div>

    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required>
    </div>

    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
    </div>

    <div class="mb-3">
        <label class="form-label">Program Studi</label>
        <select name="prodi_id" class="form-control" required>
            <option value="">-- Pilih Prodi --</option>

            <?php while($p = mysqli_fetch_assoc($prodi)) : ?>
                    <option value="<?= $p['id']; ?>">
                        <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
                    </option>
                <?php endwhile; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
    </div>
    <div>
        <input type="submit" name="mhs_submit" class="btn btn-info" value="Simpan Data">
        <a href="index.php?page=mahasiswa" class="btn btn-primary">Lihat Data Mahasiswa</a>
    </div>

</form>
