<div class="container">
    <h1>Update Pasien</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('pasien/edit/'.$pasien['id_pasien']); ?>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pasien['nama']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $pasien['tanggal_lahir']; ?>" required>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki" <?php if ($pasien['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($pasien['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="<?php echo $pasien['nomor_telepon']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>
