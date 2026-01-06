<h1 class="text-center">List Data Prodi</h1>

<table class="table table-bordered text-center">
    <thead class="table-primary">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">Nama Prodi</th>
            <th scope="col">Jenjang</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'koneksi.php';
        $no = 1;
        $tampil = $koneksi->query(
            "SELECT * FROM prodi"
        );

        while ($data = $tampil->fetch_assoc()) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama_prodi'] ?></td>
                <td><?= $data['jenjang'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>
                    <a href="index.php?page=prodi_update&id=<?= $data['id']; ?>" 
                       class="btn btn-info btn-sm">
                        Edit
                    </a>

                    <a href="proses.php?prodi_delete=<?= $data['id']; ?>" 
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

<a href="index.php?page=prodi_create" class="btn btn-primary">
    + Input Data Prodi
</a>
