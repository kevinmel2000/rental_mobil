<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Type Mobil</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?= base_url() . 'type_mobil/simpan_form'; ?>" method="post">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Nama Type</label>
                    <input type="text" class="form-control" name="nama_type" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                    <a href="<?= base_url('type_mobil')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>