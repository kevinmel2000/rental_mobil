<?php $this->load->view('layout/header_view') ?>
<h2>Data Admin</h2> <br>
<a href="<?= base_url('admin/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($admins as $admin) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $admin->user_name ?></td>
                            <td><?= $admin->user_email ?></td>
                            <td class="process">
                                <a href="<?= site_url('admin/edit_password_form/' . $admin->user_id) ?>">Ganti Password</a> |
                                <a href="<?= site_url('admin/edit_form/' . $admin->user_id) ?>">Edit</a> | 
                                <a href="<?= site_url('admin/hapus/' . $admin->user_id) ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
<?php
$this->load->view('layout/footer_view')?>