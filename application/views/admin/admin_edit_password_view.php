<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Ganti Password Admin</strong>
        </div>
        <div class="card-body card-block">
            <?php foreach ($admins as $admin) { ?>
                <form action="<?= base_url() . 'admin/update_password_form'; ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?= $admin->user_id ?>">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Password</label>
                        <input type="password" class="form-control" name="user_password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>