<div class="container">
    <h1>Detail Kunjungan Pasien</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Nomor Rekam Medis: <?php echo $kunjungan['nomor_rm']; ?></h4>
            <h5 class="card-title">Nama: <?php echo $kunjungan['nama']; ?></h5>
            <p class="card-text">Tanggal Kunjungan: <?php echo $kunjungan['tanggal_kunjungan']; ?></p>
            <p class="card-text">Keluhan: <?php echo $kunjungan['keluhan']; ?></p>
            <a href="<?php echo base_url('kunjungan'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
