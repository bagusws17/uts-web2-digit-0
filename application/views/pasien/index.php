<div class="container">
    <h1>Daftar Pasien</h1>
    <a href="<?php echo base_url('pasien/create'); ?>" class="btn btn-primary mb-3">Tambah Pasien</a>
    <table id="tablePasien" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $p): ?>
            <tr>
                <td><?php echo $p['id_pasien']; ?></td>
                <td><?php echo $p['nama']; ?></td>
                <td><?php echo $p['tanggal_lahir']; ?></td>
                <td><?php echo $p['jenis_kelamin']; ?></td>
                <td><?php echo $p['nomor_telepon']; ?></td>
                <td>
                    <a href="<?php echo base_url('pasien/read/'.$p['id_pasien']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('pasien/update/'.$p['id_pasien']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('pasien/delete/'.$p['id_pasien']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
