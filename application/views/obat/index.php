<div class="container">
    <h1>Daftar Obat</h1>
    <a href="<?php echo base_url('obat/create'); ?>" class="btn btn-primary mb-3">Tambah Obat</a>
    <table id="tableObat" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rekam Medis</th>
                <th>Nama Obat</th>
                <th>Dosis</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($obat as $o): ?>
            <tr>
                <td><?php echo $o['id_obat_pasien']; ?></td>
                <td><?php echo $o['nomor_rm']; ?></td>
                <td><?php echo $o['nama_obat']; ?></td>
                <td><?php echo $o['dosis']; ?></td>
                <td><?php echo $o['keterangan']; ?></td>
                <td>
                    <a href="<?php echo base_url('obat/read/'.$o['id_obat_pasien']); ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="<?php echo base_url('obat/update/'.$o['id_obat_pasien']); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?php echo base_url('obat/delete/'.$o['id_obat_pasien']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>