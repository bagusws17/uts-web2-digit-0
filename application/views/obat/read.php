<div class="container">
    <h1>Detail Obat</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID Obat: <?php echo $obat['id_obat_pasien']; ?></h5>
            <p class="card-text">ID Kunjungan: <?php echo $obat['id_kunjungan']; ?></p>
            <p class="card-text">Nama Obat: <?php echo $obat['nama_obat']; ?></p>
            <p class="card-text">Dosis: <?php echo $obat['dosis']; ?></p>
            <p class="card-text">Keterangan: <?php echo $obat['keterangan']; ?></p>
            <a href="<?php echo base_url('obat'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
