<div class="container">
    <h1>Detail Pasien</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $pasien['nama']; ?></h5>
            <p class="card-text">Tanggal Lahir: <?php echo $pasien['tanggal_lahir']; ?></p>
            <p class="card-text">Jenis Kelamin: <?php echo $pasien['jenis_kelamin']; ?></p>
            <p class="card-text">Nomor Telepon: <?php echo $pasien['nomor_telepon']; ?></p>
            <a href="<?php echo base_url('pasien'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
