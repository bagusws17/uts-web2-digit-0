<div class="container">
    <h1>Daftar Kunjungan Pasien</h1>
    <a href="<?php echo base_url('kunjungan/create'); ?>" class="btn btn-primary mb-3">Tambah Kunjungan</a>
    <table id="tableKunjungan" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor Rekam Medis</th>
                <th>Nama Pasien</th>
                <th>Tanggal Kunjungan</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kunjungan as $k) : ?>
                <tr>
                    <td><?php echo $k['id_kunjungan']; ?></td>
                    <td><?php echo $k['nomor_rm']; ?></td>
                    <td><?php echo $k['nama']; ?></td>
                    <td><?php echo $k['tanggal_kunjungan']; ?></td>
                    <td><?php echo $k['keluhan']; ?></td>
                    <td>
                        <a href="<?php echo base_url('kunjungan/read/' . $k['id_kunjungan']); ?>" class="btn btn-sm btn-info">Detail</a>
                        <a href="<?php echo base_url('kunjungan/update/' . $k['id_kunjungan']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php echo base_url('kunjungan/delete/' . $k['id_kunjungan']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
