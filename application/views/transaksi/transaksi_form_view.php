<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Transaksi</strong>
        </div>
        <div class="card-body card-block">
            <form action="<?= base_url() . 'transaksi/simpan_form'; ?>" method="post">
                <div class="form-group">
                    <label for="street" class=" form-control-label">Customer</label>
                    <select name="id_customer" class="form-control" required="required">
                        <option value="0">-- Pilih --</option>
                        <?php foreach ($customers as $customer) { ?>
                            <option value="<?= $customer->id_customer ?>"><?= $customer->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Mobil</label>
                    <select name="id_mobil" class="form-control" required="required">
                        <option value="0">-- Pilih --</option>
                        <?php foreach ($mobils as $mobil) { ?>
                            <option value="<?= $mobil->id_mobil ?>"><?= $mobil->merk_mobil ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Driver</label>
                    <select name="id_driver" class="form-control" required="required">
                        <option value="0">-- Pilih --</option>
                        <?php foreach ($drivers as $driver) { ?>
                            <option value="<?= $driver->id_driver ?>"><?= $driver->nama_driver ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="tanggal_kembali" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Qty Hari</label>
                    <input type="number" class="form-control" name="qty_hari" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Jaminan</label>
                    <input type="text" class="form-control" name="jaminan" required="required">
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Denda</label>
                    <input type="number" class="form-control" name="denda">
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Status Transaksi</label>
                    <select name="status_transaksi" class="form-control" required="required">
                        <option value="">-- Pilih --</option>
                        <option value="belum lunas">Belum Lunas</option>
                        <option value="lunas">Lunas</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                    <a href="<?= base_url('transaksi')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>