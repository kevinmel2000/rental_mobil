<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Customer</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?= base_url() . 'mobil/simpan_form'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Merk</label>
                    <input type="text" class="form-control" name="merk_mobil" required="required">
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Tipe</label>
                    <select class="form-control" name="id_type" required="required">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($types as $type) { ?>
                            <option value="<?= $type->id_type ?>"><?= $type->nama_type ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Plat Nomor</label>
                    <input type="text" class="form-control" name="plat_nomor" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Warna</label>
                    <input type="text" class="form-control" name="warna_mobil" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Tahun Pembuatan</label>
                    <input type="date" class="form-control" name="tahun_pembuatan" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Harga Sewa</label>
                    <input type="number" class="form-control" name="harga_sewa" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Foto Mobil</label>
                    <input type="file" class="form-control" name="fotopost" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    <a href="<?= base_url('mobil')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                </div>
            </form>
        </div>
        <!-- <div class="card-footer">
           
        </div> -->
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>