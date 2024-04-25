<div class="container">
    <h1>Tambah Obat</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('obat/store'); ?>
    <div class="form-group">
        <label for="id_kunjungan">ID Kunjungan</label>
        <select class="form-control select2" id="id_kunjungan" name="id_kunjungan" required>
            <option value="">Pilih Kunjungan</option>
            <?php foreach ($kunjungan as $k): ?>
            <option value="<?php echo $k['id_kunjungan']; ?>"><?php echo $k['nomor_rm']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nama_obat">Nama Obat</label>
        <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
    </div>
    <div class="form-group">
        <label for="dosis">Dosis</label>
        <input type="text" class="form-control" id="dosis" name="dosis" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('obat'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>
