<?php $this->load->view('layout/header_view')?>
 <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Customer</strong>
        </div>
        <div class="card-body card-block">
            <?php foreach($customers as $customer){ ?>
            <form action="<?= base_url(). 'customer/update_form'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_customer" value="<?= $customer->id_customer ?>">
                </div>
                <div class="form-group">
                    <label for="company" class=" form-control-label">NIK</label>
                    <input type="text" class="form-control" name="nik" value="<?= $customer->nik ?>" required="required">
                </div>
                    <div class="form-group">
                    <label for="company" class=" form-control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $customer->nama ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <div class="radio">
                            <label for="radio1" class="form-check-label ">
                                <input type="radio" id="radio1" <?php if($customer->jenis_kelamin == 'pria') echo "checked='checked'"; ?> name="jenis_kelamin" value="pria" class="form-check-input" required="required">Pria
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio2" class="form-check-label ">
                                <input type="radio" id="radio2" <?php if($customer->jenis_kelamin == 'wanita') echo "checked='checked'"; ?> name="jenis_kelamin" value="wanita" class="form-check-input" required="required">Wanita
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class=" form-control-label">Nomor Telpon</label>
                    <input type="text" class="form-control" required="required" name="no_telp" value="<?= $customer->no_telp ?>">
                </div>
                 <div class="form-group">
                    <label for="company" class=" form-control-label">Alamat</label>
                     <textarea name="alamat" rows="9" required="required" placeholder="Masukan Alamat" class="form-control"><?= $customer->alamat ?></textarea>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                    <a href="<?= base_url('customer')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer_view')?>