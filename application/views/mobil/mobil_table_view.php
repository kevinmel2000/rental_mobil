<?php $this->load->view('layout/header_view') ?>
<h2>Data Mobil</h2> <br>
<a href="<?= base_url('mobil/tambah_form'); ?>" class="btn btn-primary">Tambah Data</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Plat Nomor</th>
                        <th>Warna</th>
                        <th>Harga Sewa</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mobils as $mobil) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $mobil->merk_mobil ?></td>
                            <td><?= $mobil->plat_nomor ?></td>
                            <td><?= $mobil->warna_mobil ?></td>
                            <td><?= "Rp. " . number_format($mobil->harga_sewa, 2, ',', '.'); ?></td>
                            <td>
                                <img alt="64x64" class="media-object" 
                                     src="<?= base_url() ?>assets/upload/mobil/<?= $mobil->foto ?>" 
                                     style="width: 64px; height: 64px;">
                            </td>
                            <td class="process">
                                <a href="<?= site_url('mobil/edit_form/' . $mobil->id_mobil) ?>">Edit</a> | 
                                <a href="<?= site_url('mobil/hapus/' . $mobil->id_mobil . '/' . $mobil->foto) ?>">Delete</a>
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