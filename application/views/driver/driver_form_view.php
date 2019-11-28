<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Driver</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?= base_url() . 'driver/simpan_form'; ?>" method="post">
                <div class="form-group">
                    <label for="company" class=" form-control-label">NIK</label>
                    <input type="text" class="form-control" name="nik" required="required">
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">Nama</label>
                    <input type="text" class="form-control" name="nama_driver" required="required">
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <div class="radio">
                            <label for="radio1" class="form-check-label ">
                                <input type="radio" id="radio1" name="jenis_kelamin" value="pria" class="form-check-input" required="required">Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio2" class="form-check-label ">
                                <input type="radio" id="radio2" name="jenis_kelamin" value="wanita" class="form-check-input" required="required">Wanita
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Nomor Telpon</label>
                    <input type="text" class="form-control" name="no_telepon" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Harga Driver</label>
                    <input type="numner" class="form-control" name="harga_driver" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                    <a href="<?= base_url('driver')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>