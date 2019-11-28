<?php $this->load->view('layout/header_view') ?>
<h2>Data Type Mobil</h2> <br>
<a href="<?= base_url('type_mobil/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Type</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($types as $type) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $type->nama_type ?></td>
                            <td class="process">
                                <a href="<?= site_url('type_mobil/edit_form/' . $type->id_type) ?>">Edit</a> | 
                                <a href="<?= site_url('type_mobil/hapus/' . $type->id_type) ?>">Delete</a>
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