<?php $this->load->view('layout/header_view') ?>
<h2>Data Customer</h2> <br>
<a href="<?= base_url('customer/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
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
                        <th>Alamat</th>
                        <th>Kelamin</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($customers as $customer) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $customer->nik ?></td>
                            <td><?= $customer->nama ?></td>
                            <td><?= $customer->alamat ?></td>
                            <td><?= $customer->jenis_kelamin ?></td>
                            <td><?= $customer->no_telp ?></td>
                            <td class="process">
                                <a href="<?= site_url('customer/edit_form/' . $customer->id_customer) ?>">Edit</a> | 
                                <a href="<?= site_url('customer/hapus/' . $customer->id_customer) ?>">Delete</a>
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