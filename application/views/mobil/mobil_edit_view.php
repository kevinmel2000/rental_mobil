<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Mobil</strong>
        </div>
        <div class="card-body card-block">
            <?php foreach ($mobils as $mobil) { ?>
                <form action="<?php echo base_url() . 'mobil/update_form'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_mobil" value="<?= $mobil->id_mobil ?>">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Merk</label>
                        <input type="text" class="form-control" name="merk_mobil" value="<?= $mobil->merk_mobil ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-    label">Jenis</label>
                        <select class="form-control" name="id_type" required="required">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($types as $type) { ?>
                                <option 
                                <?php
                                if ($type->id_type == $mobil->id_type) {
                                    echo 'selected="selected"';
                                }
                                ?> 
                                    value="<?= $type->id_type ?>"><?= $type->nama_type ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Plat Nomor</label>
                        <input type="text" class="form-control" name="plat_nomor" value="<?= $mobil->plat_nomor ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Warna</label>
                        <input type="text" class="form-control" name="warna_mobil" value="<?= $mobil->warna_mobil ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Tahun Pembuatan</label>
                        <input type="date" class="form-control" name="tahun_pembuatan" value="<?= $mobil->tahun_pembuatan ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Harga Sewa</label>
                        <input type="number" class="form-control" name="harga_sewa" value="<?= $mobil->harga_sewa ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Foto Mobil</label>
                        <input type="file" class="form-control" name="fotopost" value="<?= $mobil->foto ?>" required="required">
                        <input type="hidden" name="filelama" value="<?= $mobil->foto ?>">
                        <div class="col-xs-6 col-md-3">
                            <img src="<?= base_url() ?>assets/upload/mobil/<?= $mobil->foto ?>" alt="171x180">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="<?= base_url('mobil')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>