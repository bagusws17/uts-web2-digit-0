<div class="container">
    <h1>Update Kunjungan</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('kunjungan/edit/'.$kunjungan['id_kunjungan']); ?>
    <div class="form-group">
        <label for="nomor_rm">Nomor Rekam Medis</label>
        <input type="text" class="form-control" id="nomor_rm" name="nomor_rm" value="<?php echo $kunjungan['nomor_rm']; ?>" required>
    </div>
    <div class="form-group">
        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
        <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" value="<?php echo $kunjungan['tanggal_kunjungan']; ?>" required>
    </div>
    <div class="form-group">
        <label for="id_pasien">Pasien</label>
        <select class="form-control select2" id="id_pasien" name="id_pasien" required>
            <option value="">Pilih Pasien</option>
            <?php foreach ($pasien as $p): ?>
            <option value="<?php echo $p['id_pasien']; ?>" <?php if($p['id_pasien'] == $kunjungan['id_pasien']) echo 'selected'; ?>><?php echo $p['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="keluhan">Keluhan</label>
        <textarea class="form-control" id="keluhan" name="keluhan" required><?php echo $kunjungan['keluhan']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('kunjungan'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>
