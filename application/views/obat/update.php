<div class="container">
    <h1>Update Obat</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('obat/edit/'.$obat['id_obat_pasien']); ?>
    <div class="form-group">
        <label for="nama_obat">Nama Obat</label>
        <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?php echo $obat['nama_obat']; ?>" required>
    </div>
    <div class="form-group">
        <label for="dosis">Dosis</label>
        <input type="text" class="form-control" id="dosis" name="dosis" value="<?php echo $obat['dosis']; ?>" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $obat['keterangan']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo base_url('obat'); ?>" class="btn btn-secondary">Batal</a>
    <?php echo form_close(); ?>
</div>
