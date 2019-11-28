<?php $this->load->view('layout/header_view') ?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Form Admin</strong>
        </div>
        <div class="card-body card-block">
            <?php foreach ($admins as $admin) { ?>
                <form action="<?= base_url() . 'admin/update_form'; ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?= $admin->user_id ?>">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Username</label>
                        <input type="text" class="form-control" name="user_name" value="<?= $admin->user_name ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Email</label>
                        <input type="email" class="form-control" name="user_email" value="<?= $admin->user_email ?>" required="required">
                    </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label">User Level</label>
                        <select name="user_level" class="form-control" required="required">
                            <option value="">-- Pilih --</option>
                            <option <?php
                            if ($admin->user_level == '1') {
                                echo 'selected="selected"';
                            }
                            ?>  value="1">Super Admin</option>
                            <option <?php
                            if ($admin->user_level == '2') {
                                echo 'selected="selected"';
                            }
                            ?> value="2">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Save</button>
                        <a href="<?= base_url('admin')?>" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Kembali</a>
                    </div>
                </form>
<?php } ?>
        </div>
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>