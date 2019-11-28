<?php $this->load->view('layout/header_view') ?>
<h2>Data Driver</h2> <br>
<a href="<?= base_url('driver/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Telepon</th>
                        <th>Harga Driver</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($drivers as $drivers) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $drivers->nik ?></td>
                            <td><?= $drivers->nama_driver ?></td>
                            <td><?= $drivers->jenis_kelamin ?></td>
                            <td><?= $drivers->no_telepon ?></td>
                            <td><?= $drivers->harga_driver ?></td>
                            <td class="process">
                                <a href="<?= site_url('driver/edit_form/' . $drivers->id_driver) ?>">Edit</a> | 
                                <a href="<?= site_url('driver/hapus/' . $drivers->id_driver) ?>">Delete</a>
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