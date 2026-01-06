<h1 class="text-center">List Data Mahasiswa</h1>

<table class="table table-bordered text-center">
    <thead class="table-primary">
        <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Prodi</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'koneksi.php';
            $tampil = $koneksi->query("SELECT m.nim, m.nama_mhs, m.tgl_lahir, m.alamat, p.nama_prodi, p.jenjang 
                                    FROM mahasiswa m 
                                    LEFT JOIN prodi p ON m.prodi_id = p.id");
            $no=1;
            //looping data mahasiswa
            while($data = mysqli_fetch_assoc($tampil)){
        ?>
            <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama_mhs'] ?></td>
                <td><?= $data['tgl_lahir'] ?></td>
                <td><?= $data['nama_prodi'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td>
                    <a href="index.php?page=mahasiswa_update&nim=<?= $data['nim']; ?>" 
                       class="btn btn-info btn-sm">Edit</a>

                    <a href="proses.php?mhs_delete=<?= $data['nim']; ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?');">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<a href="index.php?page=mahasiswa_create" class="btn btn-primary">+ Input Data Mahasiswa</a>